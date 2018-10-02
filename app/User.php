<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','lastname','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // многие ко многим - роли

    public function roles()
    {
//        return $this->belongsToMany('App\Models\Role','role_user','user_id','role_id');
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id');
    }

    //Удаление пользователя

    public function deleteUser(User $user)
    {
        $user->roles()->detach();
        if ($user->image !== 'avatar/noimage.png'):
            unlink('storage/'.$user->image);
        endif;
        $user->destroy($user->id);

    }

    //смена пароля пользователем

    public function changePassword(User $user,$password)
    {
        $hashed = Hash::make($password);
        $user->update([
            'password'=>$hashed
        ]);
    }

    //Обновление из профиля пользователя


    public function updateUser($request, User $user)
    {
//        dd($user,$request->all());
        if($request->file('image') && $user->image !== 'noimage.png'):
            unlink('storage/'.$user->image);
        endif;
        $user->update([
            'username' => $request->uname,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ]);
        if ($request->file('image')):
//            $user = $this->user->where('id',$id)->first();
            $user->update([
                'image' => $request->image->store('avatar','public')
            ]);
        endif;

        if ($request->input('password')):
            $this->user->changePassword($user,$request->password);
        endif;
    }

    //Отдельный метод для добавления пользователя админом

    public function adminCreateUser($request)
    {

        if ($request->input('password')) :
//            $password = Input::get('password');
            $password = $request->password;
            $hashed = Hash::make($password);
        endif;

        if ($request->input('email_verified_at')) :
            $email_verified = date('Y-m-d H:i:s');
        endif;



        $adduser = User::create($request->all());

        $idusers = $adduser->id;
        if ($request->input('roles')) :
            $adduser->roles()->attach($request->input('roles'));
        endif;
        $tmpuser = $adduser::where('id',$idusers)->first();
        $tmpuser->password = $hashed;

        if ($request->input('email_verified_at')) :
            $tmpuser->email_verified_at = $email_verified;
        endif;

        if ($request->file('image')) :
            $path = $request->image->store('avatar','public');
            $tmpuser->image =$path;
        endif;

        if (!$request->file('image')) :
            $path = 'avatar/noimage.png';
            $tmpuser->image =$path;
        endif;

        $tmpuser->save();

    }

    //Отдельный метод для добавления пользователя админом
    public function adminUpdateUser($request,$id)
    {
        $user = new User();
        $user = $user->where('id',$id)->first();

        if ($request->file('image') && $user->image !== 'noimage.png'):
            unlink('storage/'.$user->image);
        endif;

        $user->update([
            'username' => $request->uname,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ]);
        if ($request->file('image')):
//            $user = $this->user->where('id',$id)->first();
            $user->update([
                'image' => $request->image->store('avatar','public')
            ]);
        endif;
        $user->roles()->detach();
        $user->roles()->attach($request->get('roles'));

        if ($request->input('password')):
            $this->user->changePassword($user,$request->password);
        endif;

    }


}

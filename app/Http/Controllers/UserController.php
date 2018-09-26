<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Role;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

//Переход на страницу профиля пользователем

    public function profile()
    {
        $roles = Auth::user()->roles;
        return view('user.profile',
            [
                'roles' =>$roles,
            ]);
    }

//Создание пользователя админом

    public function createuser(Request $request)
    {
        dd($request->all());

        if ($request->input('password')) :
            $password = Input::get('password');
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
        $tmpuser = $this->user::where('id',$idusers)->first();
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
        return redirect()->route('users');

    }

// Обновление данных пользователя админом

    public function updateuser(Request $request, User $user,$id)
    {
        $user = $this->user->where('id',$id)->first();

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
            $user = $this->user->where('id',$id)->first();
            $user->update([
            'image' => $request->image->store('avatar','public')
            ]);
        endif;
            $user->roles()->detach();
            $user->roles()->attach($request->get('roles'));

        if ($request->input('password')):
            $this->user->changePassword($user,$request->password);
            endif;
        return redirect()->route('users');
    }
// удаление пользователя

    public function deleteUser($id)
    {
        $user = $this->user->where('id',$id)->first();
        $this->user->deleteUser($user);
        return redirect()->route('users');
    }
// переход на страницу редактирования профиля пользователя

    public function profileUserUpdate($id)
    {
        $user = $this->user->where('id',$id)->first();
        $roles = $user->roles;
//        dd($id,$user,$roles);
        return view('user.editprofile',
            [
                'roles' =>$roles,
                'user' =>$user
            ]);
    }
//обновление профиля пользователем из кабинета

    public function profileUpdate(Request $request)
    {
        $user = $this->user->where('id',$request->id)->first();
        $user->updateUser($request,$user);
        return redirect()->route('editprofile',$user->id);
    }


}

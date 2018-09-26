<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


use App\User;
use App\Models\Role;

class AdminController extends Controller
{
    protected $user;
    protected $role;
    protected $user_count;

    public function __construct(User $user, Role $role)
    {
//        $this->middleware('auth');
        $this->user = $user;
        $this->role = $role;
        $this->user_count = $this->user::all()->count();

    }

    public function user(){
        $users = $this->user::paginate(10);
        $roles = $this->role::get();
        $users_count = $this->user::all()->count();
        return view('admin.user',[
            'users'=>$users,
            'roles'=>$roles,
            'users_count'=>$users_count

        ]);
    }

    public function adduser()
    {
        $roles = $this->role::get();
        $users_count = $this->user::all()->count();
        $create_role = array();
        return view('admin.adduser',[
            'roles' => $roles,
            'users_count' => $users_count,
            'create_role' => $create_role
        ]);
    }


    public function admin()
    {
        $roles = $this->role::get();
        $users_count = $this->user::all()->count();
        return view('admin.admin',[
            'roles'=>$roles,
            'users_count'=>$users_count

        ]);
    }

    public function edituser($id, User $user)
    {
        $roles = $this->role::get();
        $users = $this->user::where('id',$id)->first();
        $user=$users;
        $users_count = $this->user::all()->count();
        return view('admin.edituser',[
            'users_count'=>$this->user_count,
            'roles' => $roles,
            'id'=>$user->id,
            'user'=>$user
            ]);
    }
}

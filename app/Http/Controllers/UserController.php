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
        $this->user->adminCreateUser($request);
        return redirect()->route('users');
    }

// Обновление данных пользователя админом

    public function updateuser(Request $request, User $user,$id)
    {
        $this->user->adminUpdateUser($request,$id);
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

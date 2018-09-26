<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    //
//    protected $table = 'roles';

    public function users()
    {
        $this->belongsToMany('App\User','role_user','role_id','user_id');
    }

    public function getRoles()
    {
        $role =new Role();
//        dd($role);
        return $role::all();
    }
}

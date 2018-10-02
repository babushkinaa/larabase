<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    //
//    protected $table = 'roles';

    protected $fillable = [
        'name','slug',
    ];

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

    public function findRole($id)
    {
        $role =new Role();
//        dd($role);
        return $role::where('id',$id)->first();
    }

    public function updateRole($request,$id)
    {
        $role =new Role();
        $role = $role::find($id);
//        dd($role);
        $role->update([
            'name' => $request->name,
        ]);
    }

    public function addrole($request)
    {
        $role = new Role();
        $role->create($request->all());
    }
}

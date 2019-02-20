<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function user_role()
    {
        return $this->hasMany('App\User_Role', 'role_id');
    }

    public function user()
    {
        return $this->belongstoMany('App\User', 'user_roles', 'role_id', 'user_id')->withPivot('id');
    }
}

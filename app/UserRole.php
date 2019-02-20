<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    
    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}

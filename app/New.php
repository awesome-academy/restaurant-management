<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function comment()
    {
        return $this->hasMany('App\Comment', 'new_id');
    }
}

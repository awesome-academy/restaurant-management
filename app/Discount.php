<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function food()
    {
        return $this->hasMany('App\Food', 'discount_id');
    }
}

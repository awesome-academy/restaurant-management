<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
 
    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function food()
    {
        return $this->belongsTo('App\Food', 'food_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}

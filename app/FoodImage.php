<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodImage extends Model
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
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function category_food()
    {
        return $this->hasMany('App\Category_Food', 'category_id');
    }

    public function food()
    {
        return $this->belongtoMany('App\Food', 'category_foods', 'category_id', 'food_id')->withPivot('id');
    }
}

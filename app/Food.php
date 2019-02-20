<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function discount()
    {
        return $this->belongsTo('App\Food', 'discount_id');
    }

    public function category_food()
    {
        return $this->hasMany('App\Category_Food', 'food_id');
    }

    public function category()
    {
        return $this->belongtoMany('App\Category', 'category_foods', 'food_id', 'category_id');
    }

    public function food_image()
    {
        return $this->hasMany('App\Food_Image', 'food_id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment', 'food_id');
    }

    public function order_detail()
    {
        return $this->hasMany('App\Order_Detail', 'food_id');
    }

    public function rate()
    {
        return $this->hasMany('App\Rate', 'food_id');
    }
}

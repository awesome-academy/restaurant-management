<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryFood extends Model
{
    
   protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function category()
    {
        return $this->belongTo('App\Category', 'category_id');
    }

    public function food()
    {
        return $this->belongsTo('App\Food', 'food_id');
    }
}

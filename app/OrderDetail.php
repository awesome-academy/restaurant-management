<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    
    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id');
    }

    public function food()
    {
        return $this->belongsTo('App\Food', 'food_id');
    }

    public function storage()
    {
        return $this->hasMany('App\Storage', 'order_detail_id');
    }
}

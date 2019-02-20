<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function order_detail()
    {
        return $this->hasMany('App\Order_Detail', 'order_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}

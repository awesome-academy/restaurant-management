<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function order_detail()
    {
        return $this->belongsTo('App\Order_Detail', 'order_detail_id');
    }
}

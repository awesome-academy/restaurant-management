<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revervation extends Model
{

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function table()
    {
        return $this->hasMany('App\Table', 'table_id');
    }
}

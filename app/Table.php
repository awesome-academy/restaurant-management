<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function revervation()
    {
        return $this->belongsTo('App\Revervation', 'table_id');
    }
}

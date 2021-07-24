<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function OrderDetail()
    {
        return $this->hasMany('App\Models\OrderDetail','order_id','id');
    }
}

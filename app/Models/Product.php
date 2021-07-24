<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $timestamps = false;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','price','images'];
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

}

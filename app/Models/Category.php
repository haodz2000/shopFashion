<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $fillable =['title'];
    public function product()
    {
        return $this->hasMany('App\Models\Product','category_id','id');
    }

    //
}

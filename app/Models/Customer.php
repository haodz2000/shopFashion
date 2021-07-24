<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';
    protected $primaryKey ='id';
    public $timestamps = false;
    protected $fillable =['name','email','phone','address'];
}

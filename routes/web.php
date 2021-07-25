<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Response;
use App\Models\Category;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','ProductController@index')->name('/');
Route::post('Add-Cart/{id}','AjaxController@AddCart');
Route::post('Del-Item-Cart/{id}','AjaxController@deleteItemCart');
Route::post('Update-Cart/{id}/{quanty}','AjaxController@UpdateItemCart');
Route::post('cart','OrderController@store')->name('cart');
Route::get('products','ProductController@listProduct' )->name('products');
Route::get('products/{id}', 'ProductController@productDetail');
Route::get('cart', function () {
    return view('pages.Order.cart');
})->name('cart');

Route::get('contact',function (){
    return view('pages.contact');
})->name('contact');





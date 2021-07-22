<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::get('Add-Cart/{id}','AjaxController@AddCart');
Route::get('Del-Item-Cart/{id}','AjaxController@deleteItemCart');
Route::get('Update-Cart/{id}/{quanty}','AjaxController@UpdateItemCart');
Route::get('product-list', function () {
    return view('pages.product.product-list');
})->name('product-list');
Route::get('product-detail', function () {
    return view('pages.product.product-detail');
})->name('product-detail');

Route::get('cart', function () {
    return view('pages.Order.cart');
})->name('cart');

Route::get('contact',function (){
    return view('pages.contact');
})->name('contact');

Route::get('role',[
    'middleware'=>'Role:editor',
    'uses'=>'TestController@index',
]);
Route::get('terminate',[
    'middleware'=>'terminate',
    'uses'=>'ABCController@index',
]);




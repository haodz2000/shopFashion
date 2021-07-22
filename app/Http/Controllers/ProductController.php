<?php

namespace App\Http\Controllers;


use App\Models\Product;


class ProductController extends Controller
{
    //
    public function index()
    {
        $pro = Product::paginate(12);
        return view('pages.home',['pro'=>$pro]);
    }
}

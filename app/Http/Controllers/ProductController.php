<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index()
    {
        $pro = Product::paginate(12);
        return view('pages.home',['pro'=>$pro]);
    }
    public function productDetail($id)
    {
        if(is_numeric($id))
        {
            $product = Product::where('id',(int)$id)->first();
            $hotProduct = Product::where('status',2)->get();
            return view('pages.product.product-detail',compact('product','hotProduct'));
        }
        else{
            return redirect()->route('/');
        }

    }
    public function listProduct()
    {
        $products = Product::paginate(5);
        return view('pages.product.product-list',compact('products'));
    }

}

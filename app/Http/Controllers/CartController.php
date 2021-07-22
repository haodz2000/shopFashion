<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;
//
//class CartController extends Controller
//{
//    //
////    public function AddCart(Request $request,$id){
////        $product = DB::table('product')->where('id',$id)->first();
////        if ($product != null)
////        {
////                $oldCart = Session('Cart')?Session('Cart'):null;
////                $newCart = new Cart($oldCart);
////                $newCart->Addcart($product,$id);
////                $request->session()->put('Cart',$newCart);
////                dd(Session('Cart'));
////        }
////    }
//}

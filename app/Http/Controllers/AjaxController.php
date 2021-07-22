<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use MongoDB\Driver\Session;


class AjaxController extends Controller
{
    public function AddCart(Request $request,$id){
        $product = DB::table('product')->where('id',$id)->first();
        if ($product != null)
        {
            $oldCart = Session('Cart')?Session('Cart'):null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product,$id);
            $request->session()->put('Cart',$newCart);
        }
        $totalPrice = $newCart->totalPrice;
        $totalQuanty = $newCart->totalQuanty;
        $item = $newCart->products;
        return response()->json(['totalPrice'=>$totalPrice,'totalQuanty'=>$totalQuanty,'products'=>$item]);
//        return view('pages.Order.cart-item',compact('newCart'));
    }

//    DELETE product in Cart
    public function deleteItemCart(Request $request,$id)
    {
        $oldCart = Session('Cart')?Session('Cart'):null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if(count($newCart->products) > 0)
        {
            $request->session()->put('Cart',$newCart);
        }
        else{
            $request->session()->forget('Cart');
        }
        $item = $newCart->products;
        return response()->json(['totalPrice'=>$newCart->totalPrice,'totalQuanty'=>$newCart->totalQuanty,'products'=>$item]);
    }
//
    public function UpdateItemCart(Request $request,$id,$newQuanty){
        if((int)$newQuanty > 0)
        {
            $oldCart = Session('Cart');
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($id,$newQuanty);
            $request->session()->put('Cart',$newCart);
            $item = $newCart->products;
            return response()->json(['totalPrice'=>$newCart->totalPrice,'totalQuanty'=>$newCart->totalQuanty,'products'=>$item]);
        }
        else
        {
            return 0;
        }
    }
}

/* End Ajax Cart*/
/* Regex Form Check Out*/

/* End Regex Form Check Out*/



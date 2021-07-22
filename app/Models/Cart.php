<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }
    public function AddCart($product,$id)
    {
        $newProduct = ['quanty'=>0,'price'=>$product->price,
            'productInfo'=>$product];
        if($this->products){
            if(array_key_exists($id,$this->products)){
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quanty']++;
        $newProduct['price']=$newProduct['quanty']*$product->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->price;
        $this->totalQuanty++;
    }

    public function DeleteItemCart($id)
    {
        $this->totalQuanty -= $this->products[$id]['quanty'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function UpdateItemCart($id,$newQuanty)
    {
        if((int)$newQuanty >0)
        {
            $oldQuanty = $this->products[$id]['quanty'];
            $increQuanty = $newQuanty - $oldQuanty;
            $this->products[$id]['quanty'] = $oldQuanty + $increQuanty;
            $increPrice= $increQuanty*$this->products[$id]['productInfo']->price;
            $this->products[$id]['price'] += $increPrice;
            $this->totalQuanty += $increQuanty;
            $this->totalPrice += $increPrice;
        }
        else{
            return 0;
        }
    }

}

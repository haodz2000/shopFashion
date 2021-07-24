<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use http\Cookie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\This;

class OrderController extends Controller
{
    //
    public function store(Request $req){
        if(session()->has('Cart'))
        {
            $input = $req->all();

            if(!isset($input['note']))
            {
                $input['note'] = 'Null';
            }
            $customer = new Customer();
            $customer->name = $input['name'];
            $customer->email = $input['email'];
            $customer->phone = $input['phone'];
            $customer->address = $input['address'];
            $customer->save();

            $order = new Order();
            $order->customer_id = $customer->id;
            $order->note = $input['note'];
            $order->key_token = $this->getToken(8);
            $order->save();
            $cart = Session('Cart');
            foreach ($cart->products as $item)
            {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $item['productInfo']->id;
                $orderDetail->price = $item['productInfo']->price;
                $orderDetail->quantity = $item['quanty'];
                $orderDetail->total = $item['price'];
                $orderDetail->save();
            }
            $this->Mail_Order($customer,$order);
            $alertOrderSuccess = 'Đặt hàng thành công';
            $req->session()->forget('Cart');
            return view('pages.Order.cart',compact('alertOrderSuccess'));
        }
        else{
            $alertOrderDanger = 'Bạn chưa mua hàng';
            return view('pages.Order.cart',compact('alertOrderDanger'));
        }

    }

    public function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
    }

    public function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[$this->crypto_rand_secure(0, $max-1)];
        }
        return $token;
    }
    public function Mail_Order($customer,$order) {

        $this->email = $customer->email;
        $data = array('cart'=>Session('Cart'),'customer'=>$customer,'token'=>$order->key_token);
        Mail::send('pages.Mail.mail-Order', $data, function($message) {
            $message->to($this->email, 'ShopFashion')->subject
            ('Thanh You');
            $message->from('tahuuhao1810@gmail.com','ShopFashion');
        });
    }
}

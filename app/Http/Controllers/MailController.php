<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class MailController extends Controller
{
    //
    public function Mail_Order(Request $req) {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('tahuuhao@gmail.com', 'Thank You')->subject
            ('');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        $alertOrderSuccess = 'Đặt hàng thành công';
        $req->session()->forget('Cart');
        return view('pages.Order.cart',compact('alertOrderSuccess'));
    }
    public function attachment_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}

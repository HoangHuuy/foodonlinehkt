<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use http\Exception;
use App\Models\Cart;
use Auth;
use App\Models\Orders;
use App\Models\Order_Detail;

class CheckOutController extends Controller
{
    public function getCheckOut(){
        // gio hang
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        
        //thong tin tai khoan
        $id = Auth::user()->id;
        $account = User::query()->where('id', $id)->get();

        return view('cart.checkOut', 
            [
                'products' => $cart->items, 
                'totalPrice' => $cart->totalPrice,
                'account' => $account,
            ]);
    }

    public function postCheckOut(Request $request){
        // dd($request);

        //sinh day ki tu ngau nhien
        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input_length = strlen($permitted_chars);
        $random_string = '';
        for($i = 0; $i < 6; $i++) {
            $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        //luu vao bang order
        $order = new Orders;
        $order->buyer_id = Auth::user()->id;
        $order->order_code = $random_string;
        $order->buyer_name = $request->fullname;
        $order->phoneNumber = $request->phoneNumber;
        $order->address = "Ha Noi";
        $order->totalPrice = $request->totalPrice;
        $order->status = "Chưa xác nhận";
        $order->save();

        //luu vao bang Detail
        foreach ($request->id_product as $key => $product){
            $detail = new Order_Detail;
            $detail->order_code = $random_string;
            $detail->id_product = $request->id_product[$key];
            $detail->qty = $request->qty[$key];
            $detail->save();
            
            //xoa gio hang
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->DeleteItemCart($request->id_product[$key]);
            if(count( $cart->items ) > 0){
                $request->Session()->put('cart', $cart);
            }
            else {
                $request->Session()->forget('cart');
            }
        }

        // $oldCart = Session::get('cart');
        // $cart = new Cart($oldCart);
        // dd($cart->items[1]['item']->title);

        return redirect()->route('showAllProduct');
    }
}



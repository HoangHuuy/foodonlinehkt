<?php

namespace App\Http\Controllers;
use App\User;
use http\Exception;
use Illuminate\Http\Request;
use Auth;
use App\Models\Orders;
use App\Models\Order_Detail;
use App\Models\Product;


class AccountController extends Controller
{
    public function edit()
    {
        $account = Auth::user();
        return view('account.profile', compact('account'));
    }

    public function store(Request $request, $id)
    {
        try{
            User::where('id', $id)->update(['fullname' =>  $request->fullname,
                'email' => $request->email, 'phoneNumber' => $request->phoneNumber, 
                'gender' => $request->gender, 'day' => $request->day, 
                'month' => $request->month, 'year' => $request->year, 'address' => $request->address]);

                return redirect()->route('user.showprofile');
        }catch(Exception $error){
            return redirect()->route('seller.storeAccount')->with('error', 'loi');
        }

    }

    public function showOrders()
    { 
        $account = Auth::user();
        $order = Orders::where('buyer_id', $account->id)->get();
        $order_detail = Order_Detail::where('order_code', $order[0]->order_code)->get();

        foreach ($order_detail as $key => $value) {
            $product = Product::where('id', $order_detail[$key]->id_product)->get();
            $array[$key] = array_merge($order_detail[0]->toArray(), $product->toArray());
        }
        return view('account.orders', ['array' => $array]);
    }
}

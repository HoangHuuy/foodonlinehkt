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
        // $account = Auth::user();
        // $order = Orders::where('buyer_id', $account->id)->get();

        // // if($order->isEmpty()){
        // //     return view('account.orders');            
        // // }
        // $count1 = 0;
        // foreach($order as $item){
        //     $order_detail[$count1] = Order_Detail::where('order_code', $order[$count1]->order_code)->get();
        //     $count1++;
        // }
        // // dd($order_detail[1][1]);
        // foreach ($order_detail as $key => $values) {
        //     $count2 = 0;
        //     foreach($values as $value){
        //         $product = Product::where('id', $value->id_product)->get();
        //         $array[$key][$count2] = array_merge($value->toArray(), $product[0]->toArray());
        //         $count2++;
        //     }
        // }
        // return view('account.orders', ['array' => $array]);

        $buyer = Auth::user()->id;
        $order = Orders::where('buyer_id', $buyer)->get();
        if($order->isEmpty()){
            return view('account.orders');
        }

        return view('account.orders', compact('order'));
    }
}

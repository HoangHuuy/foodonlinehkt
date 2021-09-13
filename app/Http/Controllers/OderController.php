<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use DB;

class OderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        try{
            $order = new Order;

            $id_order = 1;
            $ordered = Order::query()->where('user_username', $request->user_username)->get();
            $max_id = Order::find(\DB::table('orders')->max('id'));
            
            // $allow_continue = true;

            //sinh ma san pham ngau nhien
            $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $input_length = strlen($permitted_chars);

            $random_string = '';
            for($i = 0; $i < 10; $i++) {
                $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }

            // neu don hang da co
            if(!is_null($max_id)){
                $counts = $max_id->id;
                //kiem tra don hang da ton tai chua
                while($id_order<=$counts){
                    $ordered = Order::find($id_order);
                    // if(is_null($ordered)){
                        // $allow_continue = true;
                    // }
                    if(($ordered->id_product == $request->id_product) && ($ordered->user_username == $request->user_username))
                    {
                        Order::where('id_product', $request->id_product)->update(['quantity' => ($ordered->quantity + $request->quantity)]);
                        return redirect('/');
                    }
                    $id_order++;
                }
            }

            //neu don hang chua co
            //gan gia tri
            $order->id_product = $request->id_product;
            $order->user_username = $request->user_username;
            $order->quantity = $request->quantity;
            $order->order_code = $random_string;

            //luu du lieu len database
            $order->save();

            //dieu huong
            return redirect('/');
            
        }catch(Exception $error){
            dd($error);
            // return redirect()->route('seller.addorder')->with('error', 'Có lỗi trong quá trình thực hiện');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

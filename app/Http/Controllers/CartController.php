<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;
use App\Models\Product;
use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //show trong trang /cart
    public function index()
    {
        $find_user_order = Order::query()->where('user_username', Auth::user()->username)
                                        ->orderBy('id_product', 'asc')
                                        ->get();

        //them sap xep vao day
        if(!is_null($find_user_order)){
            for($i = 0; $i < $find_user_order->count(); $i++){
                $id_product[$i] = $find_user_order[$i]->id_product;
            }
        }

        $data_product = Product::find($id_product);

        return view('cart')->with(['data_product'=>$data_product, 'data_order'=>$find_user_order]);
    }

    //show trong trang chu
    public function indexIcon()
    {
        $find_user_order = Order::query()->where('user_username', Auth::user()->username)
                                        ->orderBy('id_product', 'asc')
                                        ->get();

        //them sap xep vao day
        if(!is_null($find_user_order)){
            for($i = 0; $i < $find_user_order->count(); $i++){
                $id_product[$i] = $find_user_order[$i]->id_product;
            }
        }

        $data_product = Product::find($id_product);

        return view('welcome')->with(['data_product'=>$data_product, 'data_order'=>$find_user_order]);
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
        //
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

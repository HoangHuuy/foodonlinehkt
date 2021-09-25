<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;
use App\Models\Product;
use DB;
use Session;

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

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        
        $request->session()->put('cart', $cart);
        return view('cart.cartItem');
    }
    
    public function getCart(){
        if(!Session::has('cart')){
            return view('cart.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    
    public function DeleteItemCart(Request $request, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->DeleteItemCart($id);
        if(count( $cart->items ) > 0){
            $request->Session()->put('cart', $cart);
        }
        else {
            $request->Session()->forget('cart');
        }
        return view('cart.cartItem');
    }

    public function DeleteSingleItem(Request $request, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->DeleteItemCart($id);
        if(count( $cart->items ) > 0){
            $request->Session()->put('cart', $cart);
        }
        else {
            $request->Session()->forget('cart');
        }
        return view('cart.listCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function SaveItemCart(Request $request, $id, $qty){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->UpdateItemCart($id, $qty);
    
        $request->Session()->put('cart', $cart);

        return view('cart.listCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }

    public function getCheckOut(){
        if(!Session::has('cart')){
            return view('cart.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('cart.checkOut', ['total' => $total]);
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

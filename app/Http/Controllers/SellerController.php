<?php

namespace App\Http\Controllers;

use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;
use App\Models\Orders;
use App\Models\Order_Detail;
use App\Models\Product;


class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seller.sellerhome');
    }
    public function index3()
    {
        $username = Auth::user()->username;
        $seller = Seller::query()->where('username', $username)->get();
        return view('seller.addaddress',compact('seller'));
    }
    public function indexAddress($id)
    {
        $seller = Seller::query()->where('id', $id)->get();
        return view('seller.showAddress',compact('seller'));
    }
    public function addaddress()
    {
        return view('seller.addaddress');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   try{

        $seller = new Seller;
        if($id == " ")
        {
            $seller->username= Auth::user()->username;
            $seller->shopName = $request->shopName;
            $seller->phoneNumber = $request->phoneNumber;
            $seller->address = $request->address."-".$request->district."-".$request->province;
            $seller->save();
           $seller1 = Seller::where('username', $seller->username)->get();
            return redirect()->route('seller.showAddress',['id'=> $seller1[0]->id]);

        }else{
            Seller::where('id', $id)->update([
                'shopName' => $request->shopName, 'phoneNumber' => $request->phoneNumber,
                'address' => $request->address."-".$request->district."-".$request->province ]);
            return redirect()->route('seller.showAddress',['id'=> $id]);
        }


    }catch(Exception $e )
        {
            
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showOrders()
    {

        $seller = Auth::user()->username;
        $order_code = Orders::where('seller_id', $seller)->get();
        if($order_code->isEmpty()){
            return view('seller.showOrders');
        }

        $count = 0;

        foreach($order_code as $item){
            $id_product[$count] = Order_Detail::where('order_code', $item->order_code)->get();
            $count2 = 0;
            foreach($id_product[$count] as $key => $value){
                $product = Product::where('id', $id_product[$count][$count2]->id_product)->get();
                $array[$count][$count2] = array_merge($value->toArray(), $product->toArray());
                $count2++;
            }
            // echo $id_product[$count].'<br>';
            $count++;

        }
        return view('seller.showOrders', compact('array'));
    }

    public function changeStatus(Request $request, $id){
        dd('hi');
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
    // public function update(Request $request, $id)
    // {
    //     //
    // }

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

<?php

namespace App\Http\Controllers;

use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

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
        return view('seller.addAddress',compact('seller'));
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

    public function indexSsbAddress($id)
    {
        $seller = Seller::query()->where('id', $id)->get();
        return view('layouts.ssb',compact('seller'));
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
            $seller->fullname = $request->fullname;
            $seller->sđt = $request->sđt;
            $seller->address = $request->address."-".$request->district."-".$request->province;
            $seller->save();
           $seller1 = Seller::where('username', $seller->username)->get();
            return redirect()->route('seller.showAddress',['id'=> $seller1[0]->id]);

        }else{
            Seller::where('id', $id)->update([
                'fullname' => $request->fullname, 'sđt' => $request->sđt,
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

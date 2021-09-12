<?php

namespace App\Http\Controllers;
//use App\Models\Account;
use App\User;
use http\Exception;
use Illuminate\Http\Request;
use Auth;



class AccountController extends Controller
{

//    public function index($id){
//
//        $account = User::query()->where('id', $id)->get();
//        return view('layouts.app', compact('account'));
//    }



    public function edit($id){

        $account = User::query()->where('id', $id)->get();
        return view('account.profile', compact('account'));
    }

    public function store(Request $request,$id)
    {
        try{
            User::where('id', $id)->update(['fullname' =>  $request->fullname,
                'doB' => $request->doB, 'emails' => $request->emails,
                'sđt' => $request->sđt, 'gender' => $request->gender,'address' => $request->address ]);

        }catch(Exception $error){
            return redirect()->route('seller.storeAccount')->with('error', 'loi');
        }

    }
}

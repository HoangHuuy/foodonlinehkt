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
//            $account = new User;
////            dd($account);
//            $account->username = Auth::user()->username;
//            $account->fullname  = $request->fullname;
//            $account->doB  = $request->doB;
//            $account->emails = $request->emails;
//            $account->sđt = $request->sđt;
//            $account->gender = $request->gender;
//            $account->address = $request->address;
//            $account->save();
//            $opportunity = Opportunity::create(['title' => $account->title, 'description' => $account->description]);

//            $account = new Account;
//          $account->username = Auth::user()->username;
//            $account->fullname  = $request->fullname;
//            $account->doB  = $request->doB;
//            $account->emails = $request->emails;
//            $account->sđt = $request->sđt;
//            $account->gender = $request->gender;
//            $account->address = $request->address;
//            dd($account);
//            $account->save();
//            $account = User::create(['doB' => $request->doB, 'emails' => $request->emails]);

            User::where('id', $id)->update(['fullname' =>  $request->fullname,
                'doB' => $request->doB, 'emails' => $request->emails,
                'sđt' => $request->sđt, 'gender' => $request->gender,'address' => $request->address ]);


//            User::where('id', $id)->update(['fullname' => $account->fullname, 'doB' => $account->doB,
//                'emails' => $account->emails, 'gender' => $account->gender,
//                'sđt'=>$account->sđt]);


//            $accounts = User::query()->where('username', Auth::user()->username)->get();
//            return view('account.profile', compact('accounts'));
        }catch(Exception $error){
            return redirect()->route('seller.storeAccount')->with('error', 'loi');
        }

    }
}

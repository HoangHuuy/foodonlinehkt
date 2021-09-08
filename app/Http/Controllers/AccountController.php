<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function index(){
        return view('account.profile');
    }
    public function store(Request $request)
    {
        try{
            $account = new Account;
            $account->username = Auth::user()->username;
            $account->fullname  = $request->fullname;
            $account->doB  = $request->doB;
            $account->emails = $request->emails;
            $account->sđt = $request->sđt;
            $account->gender = $request->gender;
            $account->save();
            return redirect()->route('seller.storeAccount')->with('success', 'them thanh cong');
        }catch(Exception $error){
            return redirect()->route('seller.storeAccount')->with('error', 'loi');
        }

    }
}

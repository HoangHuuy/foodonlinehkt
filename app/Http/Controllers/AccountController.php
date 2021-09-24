<?php

namespace App\Http\Controllers;
//use App\Models\Account;
use App\Http\Requests\storeAccountRequest;
use App\User;
use Encore\Admin\Middleware\Session;
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

    public function store(storeAccountRequest $request,$id)
    {
        try{
            User::where('id', $id)->update(['fullname' =>  $request->fullname,
                'doB' => $request->doB, 'email' => $request->email,
                'phoneNumber' => $request->phoneNumber, 'gender' => $request->gender,'address' => $request->address ]);

                return redirect()->route('user.showprofile', ['id' => $id])->with('success','Lưu thành công');
        }catch(Exception $error){
            dd($error);
        }

    }
}

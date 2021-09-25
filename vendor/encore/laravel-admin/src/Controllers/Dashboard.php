<?php

namespace Encore\Admin\Controllers;

use App\Models\Product;
use App\User;
use Encore\Admin\Admin;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Dashboard
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function title()
    {
        return view('admin::dashboard.title');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function environment()
    {
        $products = DB::table('products')->get();
        return view('admin::dashboard.environment', compact('products'));
    }
    public static function searchUser($a)
    {
        $users = DB::table('users')->where('username','like',"%$a%")->get();
        return view('admin::dashboard.dependencies', compact('users'));
    }
    public static function searchProduct(\Illuminate\Http\Request $request){
       $a = $request->searchProduct;
       $b = $request->sltSearch;
       $c = $request->priceSort;
       if($c != "")
       {
           if($b == "")
               $products = DB::table('products')->where("title",'like',"%$a%")->orderBy('price',$c)->get();
            else
                $products = DB::table('products')->where("$b",'like',"%$a%")->orderBy('price',$c)->get();
       }
       else
       {
           if($b == "")
               $products = DB::table('products')->where("title",'like',"%$a%")->get();
           else
               $products = DB::table('products')->where("$b",'like',"%$a%")->get();
       }

        return view('admin::dashboard.environment', compact('products'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function edit($id)
    {
//        dd($id);
       $user = User::query()->where('id', $id)->get();
//       dd($user);
        return view('admin::dashboard.edituser',compact('user'));
    }
    public static function edit1($id)
    {
        $product = Product::query()->where('id', $id)->get();
        return view('admin::dashboard.editproduct',compact('product'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function dependencies()
    {
        $users = DB::table('users')->get();
        return Admin::component('admin::dashboard.dependencies', compact('users'));
    }
}

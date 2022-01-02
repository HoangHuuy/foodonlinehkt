<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Whistlist;
use Auth;

class WhistlistController extends Controller
{
    public function save($id){

        $exist = Whistlist::query()->where('id_user', Auth::user()->id)->where('id_product', $id)->get();

        if(!$exist->isEmpty()){
            Whistlist::query()->where('id_user', Auth::user()->id)->where('id_product', $id)->delete();
        }else {
            $whistlist = new Whistlist;
            $whistlist->id_user = Auth::user()->id;
            $whistlist->id_product = $id;
            $whistlist->save();
        }        
    }

    public function show(){
        $wishlist = Whistlist::where('id_user', Auth::user()->id)->id_product->get();
        dd($wishlist);
        
        $product = Product::paginate(12);
        $count = Product::all()->count();
        return view('welcome', compact('product', 'category', 'count'));
    }
}

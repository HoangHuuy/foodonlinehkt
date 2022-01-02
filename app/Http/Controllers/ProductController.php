<?php

namespace App\Http\Controllers;

use App\Seller;
use App\Feedback;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Whistlist;
use App\Models\Comment;
use App\Http\Requests\storeProductRequest;
use Auth;
use DB;
use function PHPUnit\Framework\isNull;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sellerIndex(){
        $product = Product::query()->where('username', Auth::user()->username)->get();
        return view('seller.showproduct',compact('product'));
    }

    //hien thi theo loai
    public function typeIndex($type){
        $product = Product::query()->where('type', $type)->get();
        return view('type',compact('product'));
    }

    public function indexAll(){
        $category = Category::all();

        if(isset($_GET['searchProduct']))
        {
           $searchProduct = $_GET['searchProduct'];
           $product = DB::table('products')->where('title','like', "%$searchProduct%")->paginate(12);
           $count = DB::table('products')->where('title','like', "%$searchProduct%")->count();
            return view('welcome', compact('product', 'category', 'count'));
        }
        else{
           $product = Product::paginate(12);
           $count = Product::all()->count();
        }
        return view('welcome', compact('product', 'category', 'count'));
    }

    public function searchProduct(){
        if(isset($_GET['searchProduct'])){
            $searchProduct  = $_GET['searchProduct'] ;
            $product = Product::query()->where('title','like', "%$searchProduct%")->get();
            // if(isset($_GET['sltSearch'])){
            //     $sltSearch = $_GET['sltSearch'];
            //     if($sltSearch == "up")
            //        $pro = $product->sortBy('price');
            //     else if($sltSearch == "down");
            //    $pro = $product->sortByDesc('price');
                // if(isset($product))
                //     return view('searchProduct',compact('product'))->with("error","Khong tim thay san pham ");
                // else
            return view('searchProduct',compact('product'));
        }else{
            $product = Product::all();
            return view('welcome', compact('product'));
        }
    }

    public function indexDetail($id){
        $product = Product::query()->where('id', $id)->get();
        $seller = Seller::query()->where('username', $product[0]->username)->get();
        $comment = Comment::where('id_product', $id)->get();
        return view('productdetail', compact('product', 'seller', 'comment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seller = Auth::user()->username;
        $seller_add = Seller::where('username', $seller)->get();
        if($seller_add->isEmpty()){
            return view('seller.addaddress')->with('alert', 'Bạn cần thêm địa chỉ cho gian hàng trước');
        }

        $category = Category::all();
        return view('seller.addproduct', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeProductRequest $request)
    {
        try{
            $product = new Product;
            $product->username = Auth::user()->username;
            $product->title = $request->title;
            $product->type = $request->type;
            $product->price = $request->price;

            if($request->hasfile('image_product')){
                $file = $request->file('image_product');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/product/', $filename);
                $product->image_product = $filename;
            }else {
                $product->image_product = "imagedefaults.jpg";
            }

            $product->save();

            return redirect()->route('seller.addProduct')
                            ->with('success', 'Thêm thành công. ');
        }catch(Exception $error){
            return redirect()->route('seller.addProduct')->with('error', 'Có lỗi trong quá trình thực hiện');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::query()->where('id', $id)->get();
        return view('seller.editproduct', compact('product'));
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
        try{
            $product = new Product;
            $product->username = Auth::user()->username;
            $product->title = $request->title;
            $product->type = $request->type;
            $product->price = $request->price;

            if($request->hasfile('image_product')){
                $file = $request->file('image_product');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/product/', $filename);
                $product->image_product = $filename;

            }else {
                
                $product2 = Product::query()->where('id', $id)->get();
                $product->image_product = $product2[0]->image_product;
            }

            Product::where('id', $id)->update(['username' => $product->username, 
            'title' => $product->title, 'type' => $product->type, 
            'price' => $product->price, 'image_product' => $product->image_product ]);

            return redirect()->route('seller.showProduct')->with('success', 'Thay đổi thành công');
        }catch(Exception $error){
            dd($error);
            return redirect()->route('seller.updateProduct')->with('error', 'Có lỗi trong quá trình thực hiện');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::query()->where('id', $id)->get();
        $filename = $products[0]['image_product'];
        $file = 'uploads/product/'.$filename;
        unlink($file);
        Product::query()->where('id', $id)->delete();
        $product = Product::query()->where('username', Auth::user()->username)->get();
        return view('seller.showproduct', compact('product'));
    }

    public function storeComment(Request $request, $id){
        $comment = new Comment;
        $comment->id_user = Auth::user()->id;
        $comment->id_product = $id;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->route('product.detail', ['id' => $id]);
    }

    public function report($id){

        $product = Product::query()->where('id', $id)->get();
        $seller = Seller::query()->where('username', $product[0]->username)->get();
        $comment = Comment::where('id_product', $id)->get();
        if($_POST['report'] != "")
        {
            $fb = new Feedback;
            $fb->id_user = $_POST['id_user'];
            $fb->id_product =$_POST['id_product'];
            $fb->mo_ta  = $_POST['report'];
            $fb->save();
        }
        return view('productdetail', compact('product', 'seller', 'comment'));
    }
}

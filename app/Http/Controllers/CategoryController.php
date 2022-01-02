<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(){
        $data = Category::all();
        return view('admin.categoryShow', compact('data'));
    }

    public function add(Request $request){
        $category = new Category;
        $category->cate_name = $request->category;
        $category->slug = $request->slug;
        $category->save();
        return redirect()->route('category.show');
    }

    public function delete($id){
        $category = Category::where('id', $id)->delete();
        return redirect()->route('category.show');
    }

    public function update(Request $request){
        Category::where('id', $request->idCateUpdate)->update(['cate_name' => $request->categoryUpdate, 
        'slug' => $request->slugUpdate]);
        return redirect()->route('category.show');
    }
}

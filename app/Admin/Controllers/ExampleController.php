<?php //Day la controller cua product

namespace App\Admin\Controllers;

use App\Models\Product;
use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Faker\Provider\hy_AM\Address;

class ExampleController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->title('FoodKTH')
            ->description('Welcome to Admin')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(9, function (Column $column) {
                    $column->append(Dashboard::environment());
                });
            });
    }
    public function delete($id,Content $content)//delete product
    {

        Product::query()->where('id', $id)->delete();
        return $content
            ->title('FoodKTH')
            ->description('Welcome to Admin')
            ->row(Dashboard::title())
            ->row(function (Row $row) {
                $row->column(9, function (Column $column) {
                    $column->append(Dashboard::environment());
                });
            });
    }
    public function update2($id,Request $request,Content $content)  //update product
    {
            $product = new Product();
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

            Product::query()->where('id', $id)->update([
                'title' => $product->title, 'type' => $product->type,
                'price' => $product->price, 'image_product' => $product->image_product ]);


        return $content
            ->title('FoodKTH')
            ->description('Welcome to Admin')
            ->row(Dashboard::title())
            ->row(function (Row $row) use ($id) {
                $row->column(9, function (Column $column) use ($id) {
                    $column->append(Dashboard::environment());
                });
            });
    }
    public function edit($id,Content $content)  //edit product
    {
        return $content
            ->title('FoodKTH')
            ->description('Welcome to Admin')
            ->row(Dashboard::title())
            ->row(function (Row $row) use ($id) {
                $row->column(9, function (Column $column) use ($id) {
                    $column->append(Dashboard::edit1($id));
                });
            });

    }

    public function searchProduct(Content $content,\Illuminate\Http\Request $request)  //tìm kiếm san pham
    {
        return $content
            ->title('FoodKTH')
            ->description('Welcome to Admin')
            ->row(Dashboard::title())
            ->row(function (Row $row) use ($request) {
                $row->column(9, function (Column $column) use ($request) {
                    $column->append(Dashboard::searchProduct($request));
                });
            });

    }


}

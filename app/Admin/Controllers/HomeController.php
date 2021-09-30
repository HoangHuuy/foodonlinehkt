<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\User;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use GuzzleHttp\Psr7\Request;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('FoodKTH')
            ->description('Welcome to Admin')
            ->row(Dashboard::title());

    }
    public function index2(Content $content)
    {
        return $content
            ->title('FoodKTH')
            ->description('User')
            ->row(Dashboard::title())
            ->row(function (Row $row) {
                $row->column(12, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
    public function delete($id,Content $content)
    {
        $user = User::query()->where('id', $id)->get();
        Product::query()->where('username',$user[0]->username)->delete();
        User::query()->where('id', $id)->delete();
        return $content
            ->title('FoodKTH')
            ->description('User')
            ->row(Dashboard::title())
            ->row(function (Row $row) {
                $row->column(12, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
    public function update(Content $content,\Illuminate\Http\Request $request,$id)//update user
    {
        User::query()->where('id',$id)->update(['username'=>$request->username,
            'doB'=>$request->doB,
            'email'=>$request->email,
            'phoneNumber'=>$request->phoneNumber,
            'gender'=>$request->gender,
            'fullname'=>$request->fullname,
            'address'=>$request->address
        ]);
        return $content
            ->title('FoodKTH')
            ->description('User')
            ->row(Dashboard::title())
            ->row(function (Row $row) {
                $row->column(12, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
    public function edit(Content $content,$id)  //edit user
    {
        $user = User::query()->where('id', $id)->get();

        return $content
            ->title('FoodKTH')
            ->description('User')
            ->row(Dashboard::title())
            ->row(function (Row $row) use ($id) {
                $row->column(12, function (Column $column) use ($id) {
                    $column->append(Dashboard::edit($id));
                });
            });

    }
    public function searchUser(Content $content,\Illuminate\Http\Request $request)  //tìm kiếm người dùng
    {

        return $content
            ->title('FoodKTH')
            ->description('User')
            ->row(Dashboard::title())
            ->row(function (Row $row) use ($request) {
                $row->column(12, function (Column $column) use ($request) {
                    $column->append(Dashboard::searchUser($request->searchInput));
                });
            });

    }
}



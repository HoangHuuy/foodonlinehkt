@extends('..layouts.app')

@section('content')
<div id="seller-wrapper">
    <nav id="seller-sidebar" class="navbar nav-special navbar-expand d-flex flex-column align-item-start">
        @include('..layouts.ssb')
    </nav>
    <div id="seller-main-content">
        <div id="seller-main-content-wrapper">
            <div class="seller-title">
                <h3>Thêm 1 sản phẩm mới</h3>
                <span class="note">Vui lòng nhập loại sản phẩm phù hợp với sản phẩm của bạn</span>
            </div>

            <form class="container" action="{{ route('seller.storeProduct') }}" method="post"
                enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="title">
                </div>

                 @error('title')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <div class="mb-3">
                    <label class="form-check-label" for="exampleCheck1" for="type">Loại sản phẩm</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="type">
                        <option value="rice">Cơm</option>
                        <option value="congee">Cháo</option>
                        <option value="noodles">Phở</option>
                        <option value="snack">Đồ ăn vặt</option>
                        <option value="others">Đồ ăn khác</option>
                        <option value="drink">Đồ uống</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Giá</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" id="image_product" name="image_product">
                </div>

                @if(session()->has('success'))
                <div class="alert add-success">
                    {{ session()->get('success') }}
                </div>
                @elseif(session()->has('error'))
                <div class="alert add-danger">
                    {{ session()->get('error') }}
                </div>
                @endif

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection

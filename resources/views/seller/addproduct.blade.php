@extends('..layouts.app')

@section('content')
<div class="seller-title">
    <h3>Thêm 1 sản phẩm mới</h3>
    <span class="note">Vui lòng nhập loại sản phẩm phù hợp với sản phẩm của bạn</span>
</div>

<form class="container" action="{{ route('seller.storeProduct') }}" method="post" enctype="multipart/form-data">
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
            @foreach($category as $item)
            <option value="{{$item->cate_name}}">{{ $item->cate_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Giá</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    @error('price')
    <p style="color: red">{{ $message }}</p>
    @enderror

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

@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
    <a href="#">Đến xem</a>
</div>
@endif
@endsection

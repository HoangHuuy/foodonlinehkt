@extends('..layouts.app')

@section('content')
    <div class="seller-title">
        <h3>Địa chỉ của bạn</h3>
        <span class="note">Thông tin địa chỉ</span>
    </div>

    <form class="container" action="{{ route('seller.addAddress') }}" method="get" enctype="multipart/form-data">
        @csrf
        <button type="submit" class="btn btn-primary" >Thêm địa chỉ mới</button>
        <div class="mb-3">
            <label for="title" class="form-label">Tên Shop</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="shopName" value="{{isset($seller[0]->shopName) ? old('shopName', $seller[0]->shopName) : ' '}}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="phoneNumber" value="{{isset($seller[0]->phoneNumber) ? old('phoneNumber', $seller[0]->phoneNumber) : ' '}}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Địa chỉ </label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="{{isset($seller[0]->address) ? old('address', $seller[0]->address) : ' '}}">
        </div>

    </form>

@endsection

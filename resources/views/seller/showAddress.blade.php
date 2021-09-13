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
            <label for="title" class="form-label">Họ tên</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="fullname" value="{{isset($seller[0]->fullname) ? old('fullname', $seller[0]->fullname) : ' '}}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="sđt" value="{{isset($seller[0]->sđt) ? old('sđt', $seller[0]->sđt) : ' '}}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Địa chỉ </label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="{{isset($seller[0]->address) ? old('address', $seller[0]->address) : ' '}}">
        </div>

    </form>

@endsection

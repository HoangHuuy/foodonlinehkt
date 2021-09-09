@extends('..layouts.app')

@section('content')
<div class="seller-title">
    <h3>Gian hàng của bạn</h3>
    <span class="note">Bạn có thể xem tất cả các sản phẩm bạn đang bán tại đây</span>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Giá</th>
            <th colspan="2">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $item)
        <tr>
            <td>
                <img src="{{ asset('uploads/product/' .$item->image_product )}}" width="160px" height="120px"
                    alt="Image">
            </td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->price }}</td>
            <td>
                <button class="btn btn-primary"><a href="{{ route('seller.editProduct', ['id' => $item->id]) }}"
                        class="link-btn link-btn-action">Sửa</a></button>
            </td>
            <td>
                <button class="btn btn-danger"><a href="{{ route('seller.deleteProduct', ['id' => $item->id])}}"
                        class="link-btn link-btn-action">Xóa</a></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

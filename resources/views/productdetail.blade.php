
@extends("..layouts.app")
@section("content")
<h3>Thông tin sản phẩm</h3>
<span class="note">Bạn có thể xem thông tin tại đây</span>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Nhà bán hàng</th>
        <th>Giá</th>
        <th>Loại sản phẩm</th>
        <th>Số lượng</th>
        <th >Thao tác</th>
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
            <td>{{ $item->username }}</td>
            <td>{{ $item->price }}đ</td>
            <td>{{ $item->type }}</td>
            <td>
               <input type = "number" value = "1">
            </td>
            <td>
                <button class="btn btn-success center-items"><a >Thêm vào giỏ hàng</a></button>
                <button class="btn btn-success center-items" ><a>Mua hàng</a></button>
                <button class="btn btn-danger center-items"><a >Xóa</a></button>
            </td>




        </tr>

    @endforeach
    </tbody>
</table>
<h3>Thông tin người bán</h3>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Nhà bán hàng</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th >Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($seller as $item)
        <tr>
            <td>{{ $item->username }}</td>
            <td>{{ $item->address }}đ</td>
            <td>{{ $item->sđt }}</td>
            <td>
                <button class="btn btn-success">Gọi</button>
            </td>




        </tr>

    @endforeach
    </tbody>
</table>

@endsection

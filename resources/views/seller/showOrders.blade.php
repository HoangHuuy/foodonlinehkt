@extends('..layouts.app')

@section('content')
<div class="seller-title">
    @if(session()->has('success'))
    <div class="alert add-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <h3>Gian hàng của bạn</h3>
    <span class="note">Bạn có thể xem tất cả các sản phẩm bạn đang bán tại đây</span>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Người Mua</th>
            <th>SĐT</th>
            <th>Địa Chỉ</th>
            <th>Ảnh</th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Tổng Giá</th>
            <th>Cập Nhập Trạng Thái</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($order))

        @foreach ($order as $key => $value)
        {{-- <form action="{{route('seller.changeStatus', ['id' => $value['id']])}}" method="post"> --}}
            {{-- @csrf --}}
            @if($key == 0 || $value['order_code'] != $order[$key-1]['order_code'])
            <tr>
                <td>
                    {{$value['order_code']}}
                </td>
                <td>
                    {{$value['buyer_name']}}
                </td>
                <td>
                    {{$value['phoneNumber']}}
                </td>
                <td>
                    {{$value['address']}}
                </td>
                
                <td>
                    <img src="{{ asset('uploads/product/' . \App\Models\Product::where('id', $value['id_product'])->get()[0]->image_product )}}" width="130px" height="90px"
                    alt="Image">
                </td>
                <td>{{ \App\Models\Product::where('id', $value['id_product'])->get()[0]->title }}</td>
                <td>{{ $value['qty'] }}</td>
                <td>{{ number_format($value['qty'] * \App\Models\Product::where('id', $value['id_product'])->get()[0]->price) }}đ</td>
                <td>
                    <select data-id="{{$value['id']}}" class="status">
                        <option {{ (isset($value['status']) && $value['status'] == "1") ? "selected" : ""}} value="1">
                            Chưa Xác Nhận
                        </option>
                        <option {{ (isset($value['status']) && $value['status'] == "2") ? "selected" : ""}} value="2">
                            Đã Xác Nhận
                        </option>
                        <option {{ (isset($value['status']) && $value['status'] == "3") ? "selected" : ""}} value="3">
                            Đã Hủy
                        </option>
                        <option {{ (isset($value['status']) && $value['status'] == "4") ? "selected" : ""}} value="4">
                            Đã Thanh Toán
                        </option>
                    </select>
                </td>
            </tr>
            @endif
            @if($key != 0 && $order[$key-1]['order_code'] == $value['order_code'])
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
                <td>
                    <img src="{{ asset('uploads/product/' . \App\Models\Product::where('id', $value['id_product'])->get()[0]->image_product )}}" width="130px" height="90px"
                    alt="Image">
                </td>
                <td>{{ \App\Models\Product::where('id', $value['id_product'])->get()[0]->title }}</td>
                <td>{{ $value['qty'] }}</td>
                <td>{{ number_format($value['qty'] * \App\Models\Product::where('id', $value['id_product'])->get()[0]->price) }}đ</td>
                <td>
                    <select data-id="{{$value['id']}}" class="status">
                        <option {{ (isset($value['status']) && $value['status'] == "1") ? "selected" : ""}} value="1">
                            Chưa Xác Nhận
                        </option>
                        <option {{ (isset($value['status']) && $value['status'] == "2") ? "selected" : ""}} value="2">
                            Đã Xác Nhận
                        </option>
                        <option {{ (isset($value['status']) && $value['status'] == "3") ? "selected" : ""}} value="3">
                            Đã Hủy
                        </option>
                        <option {{ (isset($value['status']) && $value['status'] == "4") ? "selected" : ""}} value="4">
                            Đã Thanh Toán
                        </option>
                    </select>
                </td>
            </tr>
            @endif
            {{-- </form> --}}
            
        @endforeach
        @endif
    </tbody>
</table>
@endsection

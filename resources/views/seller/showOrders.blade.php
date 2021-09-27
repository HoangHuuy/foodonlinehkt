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
        @if(isset($array))

        @foreach ($array as $item)
        @foreach ($item as $key => $value)
        <form id="changeStatusForm" action="{{route('seller.changeStatus', ['id' => $value['id']])}}" method="post">
            @csrf
            <tr>
                <td>
                    {{ 
                            \App\User::where('id', \App\Models\Orders::where('order_code', $value['order_code'])->get()[0]->buyer_id)->get()[0]->fullname
                        }}
                </td>
                <td>
                    {{ 
                            \App\User::where('id', \App\Models\Orders::where('order_code', $value['order_code'])->get()[0]->buyer_id)->get()[0]->phoneNumber
                        }}
                </td>
                <td>
                    {{ 
                            \App\User::where('id', \App\Models\Orders::where('order_code', $value['order_code'])->get()[0]->buyer_id)->get()[0]->address
                        }}
                </td>
                <td>
                    <img src="{{ asset('uploads/product/' .$value[0]['image_product'] )}}" width="130px" height="90px"
                        alt="Image">
                </td>
                <td>{{ $value[0]['title'] }}</td>
                <td>{{ $value['qty'] }}</td>
                <td>{{ $value['qty'] * $value[0]['price'] }}đ</td>
                <td>
                    <select name="status" class="status">
                        <option {{ (isset($value['status']) && $value['status'] == "1") ? "selected" : ""}} value="1">
                            Chưa Xác Nhận
                        </option>
                        <option {{ (isset($value['status']) && $value['status'] == "2") ? "selected" : ""}} value="2">
                            Đã Xác Nhận
                        </option>
                        <option {{ (isset($value['status']) && $value['status'] == "3") ? "selected" : ""}} value="3">
                            Đã Hủy
                        </option>
                    </select>
                </td>
            </tr>
        </form>

        @endforeach
        @endforeach
        @endif
    </tbody>
</table>
@endsection

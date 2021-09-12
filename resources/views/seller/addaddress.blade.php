{{--@include('..layouts.ssb')--}}
@section('content')
    <div class="seller-title">
        <h3>Địa chỉ của bạn</h3>
        <span class="note">Thêm địa chỉ</span>
    </div>

    <form class="container" action="{{ route('seller.updateAddress',['id'=>isset($seller[0]->id) ? $seller[0]->id : ' '])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Họ tên</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="fullname">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="sđt">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tỉnh</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="province">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Quận/Huyện</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="district">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Địa chỉ cụ thể</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="address">
        </div>

        <div class="mb-3">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

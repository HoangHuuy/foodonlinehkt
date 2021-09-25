
<div class="seller-title">
    <h3>Sửa thông tin người dùng</h3>
    <span class="note">Bạn có thể sửa đổi người dùng</span>
</div>
<form class="container" action="/admin/user/update/{{$user[0]->id}}" method="post" >
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="username"
               value="{{isset($user[0]->username) ? old('title', $user[0]->username) : ' '}}">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Ngày sinh</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="doB"
               value="{{isset($user[0]->doB) ? ( $user[0]->doB) : ' '}}">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Email</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="email"
               value="{{isset($user[0]->email) ? old('email', $user[0]->email) : ' '}}">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="phoneNumber"
               value="{{isset($user[0]->phoneNumber) ? old('phoneNumber', $user[0]->phoneNumber) : ' '}}">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Giới tính</label>
        <select aria-selected="{{isset($user[0]->gender) ? old('gender', $user[0]->gender) : ' '}}" name ="gender">
            <option value="Nam" >Nam</option>
            <option value="Nữ">Nữ</option>
            <option value="Khác">Khác</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="fullname"
               value="{{isset($user[0]->fullname) ? old('fullname', $user[0]->fullname) : ' '}}">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="address"
               value="{{isset($user[0]->address) ? old('address', $user[0]->address) : ' '}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>




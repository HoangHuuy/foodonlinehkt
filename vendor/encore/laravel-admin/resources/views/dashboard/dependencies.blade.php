<div class="center-items">
    <form  action="/admin/user/searchUser" method = "post">
        @csrf
        <input type="text" placeholder="Nhập tìm kiếm" name = "searchInput">
        <input type="submit" value = "Tìm kiếm người dùng" >
    </form>

</div>
@csrf
<h3>Quản lý người dùng </h3>
    <div class="table-content">
        <div >
            <table class="table table-striped">
                <tr>
                    <th>Username</th>
                    <th>Quyền hạn</th>
                    <th>Năm sinh</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Giới tính</th>
                    <th>Họ và tên</th>
                    <th>Địa chỉ</th>
                    <th colspan="2">Thao tác</th>
                </tr>
                @foreach($users as $user)
                    <tbody>
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->year }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phoneNumber }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->address }}</td>
                    <td ><button class="btn btn-primary"><a href="/admin/user/edit/{{$user->id}}"><span style = "color: black">Sửa</span></a></button></td>
                    <td> <button class="btn btn-danger"><a class = "button" href="/admin/user/delete/{{$user->id}}"><span style = "color: black">Xóa</span></a></button></td>
                </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
{{--</div>--}}

{{--<script>--}}
{{--    // $('.dependencies').slimscroll({height:'510px',size:'3px'});--}}
{{--</script>--}}

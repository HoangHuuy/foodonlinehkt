<form action="/admin/product/searchProduct" method = "post">
    @csrf
    <input type="text" placeholder="Nhập tìm kiếm" name = "searchProduct">
    <select name = "sltSearch" >
        <option value = "">Tất cả</option>
        <option value = "username">Tìm theo người bán</option>
        <option value = "title">Tìm theo tên sản phẩm</option>
        <option value = "type">Tìm theo loaị sản phẩm</option>
    </select>
    <select name = "priceSort">
        <option value="">Sắp xếp theo</option>
        <option value ="asc">Sắp xếp theo giá tăng dần</option>
        <option value = "desc">Sắp xếp theo giá giảm dần</option>
    </select>
    <input type = "submit" value="Tìm kiếm" >
</form>

<h3>Quản lý sản phẩm</h3>
<span class="note">Bạn có thể xem tất cả các sản phẩm tại đây</span>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Người bán</th>
        <th>Tên sản phẩm</th>
        <th>Ảnh</th>
        <th>Loại sản phẩm</th>
        <th>Giá</th>
        <th colspan="2">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $item)
        <tr>
            <td>{{ $item->username }}</td>
            <td>{{ $item->title }}</td>
            <td>
                <img src="{{ asset('uploads/product/' .$item->image_product )}}" width="160px" height="120px"
                     alt="Image">
            </td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->price }}đ</td>
            <td>
                <button class="btn btn-primary"><a href="/admin/product/edit/{{ $item->id }}"
                                                   class="link-btn link-btn-action"><span style = "color: black">Sửa</span></a></button>
            </td>
            <td>
                <button class="btn btn-danger"><a href="/admin/product/delete/{{ $item->id }}"
                                                  class="link-btn link-btn-action"><span style = "color: black">Xóa</span></a></button>
            </td>
        </tr>

    @endforeach

    </tbody>
</table>

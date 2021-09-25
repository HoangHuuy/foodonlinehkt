<div class="seller-title">
        <h3>Sửa sản phẩm</h3>
        <span class="note">Bạn có thể sửa đổi thông tin sản phẩm cho phù hợp</span>
    </div>
    <form class="container" action="/admin/product/update/{{$product[0]->id}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="title"
                   value="{{isset($product[0]->title) ? old('title', $product[0]->title) : ' '}}">
        </div>
        <div class="mb-3">
            <label class="form-check-label" for="exampleCheck1" for="type">Loại sản phẩm</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="type"
                    value="{{isset($product[0]->type) ? old('type', $product[0]->type) : ' '}}">
                <option value="rice">Cơm</option>
                <option value="congee">Cháo</option>
                <option value="noodles">Phở</option>
                <option value="snack">Đồ ăn vặt</option>
                <option value="drink">Đồ ăn khác</option>
                <option value="drink">Đồ uống</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Giá</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="price"
                   value="{{isset($product[0]->price) ? old('price', $product[0]->price) : ' '}}">
        </div>

        <div class="mb-3">

            <label for="title" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="image_product" value="{{ isset($product[0]->image_product) ? old('image_product', $product[0]->image_product) : 'imagedefault.jpg' }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


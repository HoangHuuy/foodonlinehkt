<div class="col-lg-12 col-md-12 col-sm-12 col-12" id="list-cart">
    {{-- hien thi gio hang              --}}
    @if(Session::has('cart'))
    <form>
        @csrf
        <div class="table-content table-responsive cart-table-content">
            <table>
                <thead>
                    <tr>
                        <th>Hình Ảnh</th>
                        <th>Tên</th>
                        <th>Đơn Giá</th>
                        <th>Số Lượng</th>
                        <th>Số Tiền</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="product-thumbnail">
                            <a  href="#">
                                <img class="img-responsive" src="{{ asset('uploads/product/' .$product['item']['image_product'] )}}" alt="{{ $product['item']['title'] }}" />
                            </a>
                        </td>
                        <td class="product-name">
                            <a href="#">{{ $product['item']['title'] }}</a>
                        </td>
                        <td class="product-price-cart"><span class="amount">
                            {{ number_format($product['item']['price']) }} &#8363;
                        </span></td>
                        <td class="product-quantity">
                            <div class="cart-plus-minus">
                                <input id="quanty-item-{{ $product['item']->id }}" class="cart-plus-minus-box" 
                                type="text" name="qtybutton" value="{{ $product['qty'] }}" />
                            </div>
                        </td>
                        <td class="product-subtotal">
                            {{ number_format($product['price']) }} &#8363;
                        </td>
                        <td class="product-remove">
                            <a href="#" onclick="SaveItemCart({{ $product['item']['id'] }});"><i class="icon-pencil"></i></a>
                        </td>
                        <td class="product-remove">
                            <a href="#" onclick="DeleteSingleItemCart({{ $product['item']['id'] }});"><i class="icon-close"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
    <div style="justify-content: right;" class="row">
        {{-- <div class="col-lg-4 col-md-6 mb-lm-30px">
            <div class="cart-tax">
                <div class="title-wrap">
                    <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                </div>
                <div class="tax-wrapper">
                    <p>Enter your destination to get a shipping estimate.</p>
                    <div class="tax-select-wrapper">
                        <div class="tax-select">
                            <label>
                                * Country
                            </label>
                            <select class="email s-email s-wid">
                                <option>Bangladesh</option>
                                <option>Albania</option>
                                <option>Åland Islands</option>
                                <option>Afghanistan</option>
                                <option>Belgium</option>
                            </select>
                        </div>
                        <div class="tax-select">
                            <label>
                                * Region / State
                            </label>
                            <select class="email s-email s-wid">
                                <option>Bangladesh</option>
                                <option>Albania</option>
                                <option>Åland Islands</option>
                                <option>Afghanistan</option>
                                <option>Belgium</option>
                            </select>
                        </div>
                        <div class="tax-select mb-25px">
                            <label>
                                * Zip/Postal Code
                            </label>
                            <input type="text" />
                        </div>
                        <button class="cart-btn-2" type="submit">Get A Quote</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-lm-30px">
            <div class="discount-code-wrapper">
                <div class="title-wrap">
                    <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                </div>
                <div class="discount-code">
                    <p>Enter your coupon code if you have one.</p>
                    <form>
                        <input type="text" required="" name="name" />
                        <button class="cart-btn-2" type="submit">Apply Coupon</button>
                    </form>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-4 col-md-12 mt-md-30px">
            <div class="grand-totall">
                <h4 class="grand-totall-title">Tổng <span>{{ $totalPrice }} &#8363;</span></h4>
                <a href="{{ route('checkout') }}">Tiến hành thanh toán</a>
            </div>
        </div>
    </div>
    @else
    <div>
        <h2>Không có sản phẩm trong giỏ hàng</h2>
    </div>
    @endif

    {{-- ket thuc hien thi gio hang --}}
</div>


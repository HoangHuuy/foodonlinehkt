@if(Session::has('cart') != null)

<div class="inner" id="change-item-cart">
    <div class="head">
        <span class="title">Giỏ hàng</span>
        <button class="offcanvas-close">×</button>
    </div>
    <div class="body customScroll">
        <ul class="minicart-product-list">
            @foreach(Session::get('cart')->items as $item)
            <li>
                <a href="single-product.html" class="image"><img
                        src="{{ asset('uploads/product/' . $item['item']->image_product )}}"
                        alt="{{$item['item']->title}}"></a>
                <div class="content">
                    <a href="single-product.html" class="title">{{$item['item']->title}}</a>
                    <span class="quantity-price">
                        {{$item['qty']}} x <span class="amount">{{number_format($item['item']->price)}}</span>
                    </span>
                    <a href="javascript:" data-id="{{$item['item']->id}}" class="remove remove-cart">×</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="foot">
        <div class="sub-total">
            <strong>Tổng :</strong>
            <span class="amount">{{number_format(Session::get('cart')->totalPrice)}}&#8363;</span>
            <input hidden id="total-quanty-cart" type="number" value="{{Session::get('cart')->totalQty}}">
        </div>
        <div class="buttons">
            <a href="{{route('shoppingCart')}}" class="btn btn-dark btn-hover-primary mb-30px">Xem giỏ hàng</a>
            <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
        </div>
    </div>
</div>

@endif


<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from template.hasthemes.com/rozer/rozer/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:27:29 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Rozer – Electronics eCommerce HTML Template</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />

        <!-- CSS
  ============================================ -->

            <!-- Vendor CSS (Bootstrap & Icon Font) -->
        <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css"> -->

            <!-- Plugins CSS (All Plugins Files) -->
         <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/plugins/swiper.css">  -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
        <link rel="stylesheet" href="assets/css/style.min.css">

        <!-- Main Style CSS -->
        <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
    </head>

    <body>
        <!-- Header Section Start From Here -->
        <header class="header-wrapper">
            <!-- Header Nav Start -->
            <div class="header-nav">
                <div class="container">
                    <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                        <div class="header-static-nav">
                           
                        </div>
                        <div class="header-menu-nav">
    
                            {{-- dang nhap, dang ki, hien thi ten tai khoan --}}
                            <ul class="menu-nav">
    
                                <!-- Authentication Links -->
                                @guest
                                <li>
                                    <a href="{{ route('login') }}">Đăng nhập</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="pr-0">
                                    <a href="{{ route('register') }}">Đăng kí</a>
                                </li>
                                @endif
                                @else
                                <li class="pr-0">
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>&#160; {{ Auth::user()->username }} <i
                                                class="ion-ios-arrow-down"></i></button>
    
                                        <ul class="dropdown-menu animation slideDownIn"
                                            aria-labelledby="dropdownMenuButton">
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    Đăng xuất
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                            <li><a href="{{ route('user.showprofile') }}" >
                                                Tài khoản của tôi
                                                </a>
                                            </li>
                                            <li><a href="{{ route('user.showOrders') }}" >
                                                Đơn mua
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
    
                        {{-- ket thuc phan xac thuc: dang nhap, dang ki, ten tai khoan --}}
    
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            <div class="header-top bg-white ptb-30px d-xl-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="logo">
                                <a href="/"><img class="img-responsive" src="assets/images/logo/logo.png"
                                        alt="logo.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-md-10 align-self-center">
                            <div class="header-right-element d-flex"> 
                                <div class="search-element media-body">
                                    <form class="d-flex" action="#">
                                        <input type="text" placeholder="Nhập sản phẩm bạn cần tìm ..." />
                                        <button><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                                <!--Cart info Start -->
                                <div class="header-tools d-flex">
                                    <div class="cart-info d-flex align-self-center">
                                        {{-- <a href="compare.html" class="shuffle" data-number="3"><i class="icon-shuffle"></i></a> --}}
                                        @if(Session::has('cart') != null)
                                        <a href="#offcanvas-cart" 
                                            class="bag offcanvas-toggle" 
                                            data-number="{{Session::get('cart')->totalQty}}"><i
                                            class="icon-bag"
                                            id="total-quanty-show"></i><span>{{number_format(Session::get('cart')->totalPrice)}}&#8363;</span></a>
                                        @else
                                        <a href="#offcanvas-cart" 
                                            class="bag offcanvas-toggle" 
                                            data-number="0"><i
                                            class="icon-bag"
                                            id="total-quanty-show"></i><span></span></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--Cart info End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            <div class="header-menu bg-blue sticky-nav d-xl-block d-none padding-0px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 custom-col-2">
                            <div class="header-menu-vertical">
                                <h4 class="menu-title">Danh mục</h4>
                                <ul class="menu-content display-none">
                                    <li class="menu-item"><a href="/product/rice">Cơm </a></li>
                                    <li class="menu-item"><a href="/product/congee">Cháo </a></li>
                                    <li class="menu-item"><a href="/product/noodles">Phở</a></li>
                                    <li class="menu-item"><a href="/product/snack">Đồ ăn vặt</a></li>
                                    <li class="menu-item"><a href="/product/drink">Đồ uống</a></li>
                                    <li class="menu-item"><a href="/product/others">Đồ ăn khác</a></li>
                                </ul>
                                <!-- menu content -->
                            </div>
                            <!-- header menu vertical -->
                        </div>
                        <div class="col-lg-9 custom-col-2">
                            <div class="header-horizontal-menu">
                                <ul class="menu-content">
                                    <li class="active menu-dropdown">
                                        <a href="/">Trang chủ</a>
                                    </li><li class="active menu-dropdown">
                                        <a href="/product/com">Cơm</a>
                                    </li><li class="active menu-dropdown">
                                        <a href="/product/do-an-dang-soi">Đồ ăn dạng sợi</a>
                                    </li><li class="active menu-dropdown">
                                        <a href="/product/do-an-chien-ran/">Đồ ăn chiên rán</a>
                                    </li><li class="active menu-dropdown">
                                        <a href="/product/kem">Kem</a>
                                    </li>
                                    <li class="active menu-dropdown">
                                        <a href="/product/do-uong">Đồ Uống</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- header horizontal menu -->
                            {{-- <div class="intro-text-shipping text-end">
                                    <div class="free-ship">Free Shipping on Orders $50+</div>
                                </div>  --}}
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- header menu -->
        </header>
        <!-- Header Section End Here -->    

        <!-- Mobile Header Section Start -->
    <div class="mobile-header d-xl-none sticky-nav bg-white ptb-10px">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="/"><img class="img-responsive" src="assets/images/logo/logo.png" alt="logo.jpg" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="cart-info d-flex align-self-center">
                            <a href="compare.html" class="shuffle d-xs-none" data-number="3"><i class="icon-shuffle"></i></a>
                            <a href="#offcanvas-wishlist" class="heart offcanvas-toggle d-xs-none" data-number="3"><i class="icon-heart"></i></a>
                            <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="3"><i class="icon-bag"></i><span>$20.00</span></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/7.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/9.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/8.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">$144.00</span>
                </div>
                <div class="buttons">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <div class="offcanvas-overlay"></div>
    <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="/">Trang chủ</a></li>
                                <li>Thanh toán</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Area End-->
            <!-- checkout area start -->
            <div class="checkout-area mt-60px mb-40px">
                <div class="container">
                    <form action="{{ route('postCheckout') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="billing-info-wrap">
                                    <h3>Chi tiết đơn hàng</h3>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20px">
                                                <label>Họ Tên</label>
                                                <input name="fullname" type="text" value="{{isset($account[0]->fullname) ? old('fullname', $account[0]->fullname) : ' '}}"/>
                                                @error('fullname')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20px">
                                                <label>Số Điện Thoại</label>
                                                <input name="phoneNumber" type="text" value="{{isset($account[0]->phoneNumber) ? old('phoneNumber', $account[0]->phoneNumber) : ' '}}"/>
                                                @error('phoneNumber')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20px">
                                                <label>Nhập địa chỉ chi tiết của bạn</label>
                                                <input name="address" class="billing-address" placeholder="Số nhà, tên đường" type="text"
                                                value="{{isset($account[0]->address) ? old('phoneNumber', $account[0]->address) : ' '}}" />
                                                @error('address')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="checkout-account mb-30px">
                                        <input class="checkout-toggle2" type="checkbox" />
                                        <label>Create an account?</label>
                                    </div> --}}
                                    {{-- <div class="checkout-account-toggle open-toggle2 mb-30">
                                        <input placeholder="Email address" type="email" />
                                        <input placeholder="Password" type="password" />
                                        <button class="btn-hover checkout-btn" type="submit">register</button>
                                    </div> --}}
                                    {{-- <div class="additional-info-wrap">
                                        <h4>Thêm lưu ý cho người bán</h4>
                                        <div class="additional-info">
                                            <textarea name="note" placeholder="Thêm lưu ý cho người bán, ví dụ như bánh mì không dưa chuột, phở không hành,..." name="message"></textarea>
                                        </div>
                                    </div> --}}
                                    
                                </div>
                            </div>
                            <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                                <div class="your-order-area">
                                    <h3>Hóa đơn</h3>
                                    <div class="your-order-wrap gray-bg-4">
                                        <div class="your-order-product-info">
                                            <div class="your-order-top">
                                                <ul>
                                                    <li>Sản phẩm</li>
                                                    <li>Tổng</li>
                                                </ul>
                                            </div>
                                            <div class="your-order-middle">
                                                <ul>
                                                    @if(Session::has('cart') ? Session::get('cart') : null)
                                                    @foreach($products as $product)
                                                    <li>
                                                        <span class="order-middle-left">{{ $product['item']->title }} X {{ $product['qty'] }}</span>
                                                        <span class="order-price">{{ $product['item']->price * $product['qty'] }} &#8363; </span>
                                                        <input 
                                                            name="id_product[]" 
                                                            type="hidden" 
                                                            value="{{ $product['item']->id }}"
                                                        />
                                                        <input 
                                                            name="qty[]" 
                                                            type="hidden" 
                                                            value="{{ $product['qty'] }}"
                                                        />
                                                        <input name="seller_id[]" type="hidden" value="{{ $product['item']->username }}"/>
                                                    </li>
                                                    @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="your-order-bottom">
                                                <ul>
                                                    <li class="your-order-shipping">Shipping</li>
                                                    <li>Free shipping</li>
                                                </ul>
                                            </div>
                                            <div class="your-order-total">
                                                <ul>
                                                    <li class="order-total">Tổng</li>
                                                    <li>{{ number_format($totalPrice) }} &#8363;</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="payment-method">
                                            <div class="payment-accordion element-mrg">
                                                <div class="panel-group" id="accordion">
                                                    <div class="panel payment-accordion">
                                                        <div class="panel-heading" id="method-one">
                                                            <h4 class="panel-title">
                                                                <a data-bs-toggle="collapse" data-parent="#accordion" href="#method1">
                                                                    Phương thức thanh toán
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="method1" class="panel-collapse collapse show">
                                                            <div class="panel-body">
                                                                <p>Thanh toán khi nhận hàng</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="panel payment-accordion">
                                                        <div class="panel-heading" id="method-two">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#method2">
                                                                    Check payments
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="method2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel payment-accordion">
                                                        <div class="panel-heading" id="method-three">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#method3">
                                                                    Cash on delivery
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="method3" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Place-order mt-25">
                                        <a onclick="this.closest('form').submit();return false;" class="btn-hover" href="#">Đặt hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input name="totalPrice" type="hidden" value="{{ $totalPrice }}">
                    </form>
                </div>
            </div>
            <!-- checkout area end -->
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Về công ty</h4>
                                    <p class="text-infor">Công ty được thành lập từ 2016, có kinh nghiệm về mua bán online,
                                        giúp
                                        khách hàng có một trải nghiệm mua hàng một cách tốt nhất
                                    </p>
                                    <div class="need-help">
                                        <p class="phone-info">
                                            Số điện thoại hỗ trợ
                                            <span>
                                                0123456789 <br />
                                                0123456789
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6 col-lg-6 ">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Liên lạc bằng email</h4>
                                    <div class="subscrib-text">
                                        <p>Hãy góp ý cho chúng tôi để nâng cao trải nghiệm khi sử dụng <span
                                                style="font-weight: bold;">foodTHK</span></p>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                                            name="mc-embedded-subscribe-form" method="post"
                                            action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Viết đóng góp .."
                                                    name="EMAIL" value="" />
                                                <div class="mc-news" aria-hidden="true"
                                                    style="position: absolute; left: -5000px;">
                                                    <input type="text" value="" tabindex="-1"
                                                        name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                                </div>
                                                <div class="clear">
                                                    <input id="mc-embedded-subscribe" class="button" type="submit"
                                                        name="subscribe" value="Gửi" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="icon-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->



        <!-- Modal end -->
        <!-- JS
============================================ -->

            <!-- Vendors JS -->
        <!-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

            <!-- Plugins JS -->
         <!-- <script src="assets/js/plugins/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/swiper.min.js"></script>
        <script src="assets/js/plugins/countdown.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/elevateZoom.js"></script> -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <script src="assets/js/vendor/vendor.min.js"></script>
        <script src="assets/js/plugins/plugins.min.js"></script>

        <!-- Main Activation JS -->
        <script src="assets/js/main.js"></script>
        
    </body>

<!-- Mirrored from template.hasthemes.com/rozer/rozer/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:27:29 GMT -->
</html>

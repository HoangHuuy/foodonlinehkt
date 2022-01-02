<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/rozer/rozer/blog-list-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:28:42 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Rozer – Electronics eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon/favicon.png" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
        rel="stylesheet" />

    <!-- CSS
  ============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/vendor/ionicons.min.css">
        <link rel="stylesheet" href="/assets/css/vendor/simple-line-icons.css">
        <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css"> -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="/assets/css/plugins/animate.css">
        <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="/assets/css/plugins/swiper.css">  -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="/assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="/assets/css/style.min.css">
    
    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="/assets/css/style.css" /> -->

    <style>
        .billing-info-wrap h3 {
            margin-bottom: 10px;
        }
        .billing-info-wrap p {
            margin-bottom: 20px;
        }
        .myTd {
            color: white !important;
        }
    </style>

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
                            <a href="/"><img class="img-responsive" src="/assets/images/logo/logo.png"
                                    alt="logo.jpg" /></a>
                        </div>
                    </div>
                    <div class="col-md-10 align-self-center">
                        <div class="header-right-element d-flex">
                            <div class="search-element media-body">
                                <form class="d-flex" action="#">
                                    <input type="text" placeholder="Nhập tên sản phẩm bạn cần tìm ... " />
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
                        <a href="single-product.html" class="image"><img src="/assets/images/product-image/7.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="/assets/images/product-image/9.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="/assets/images/product-image/8.jpg"
                                alt="Cart product Image"></a>
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
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primarypx">view wishlist</a>
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
                        <a href="single-product.html" class="image"><img src="/assets/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="/assets/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="/assets/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
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
    <!-- Shop Category Area End -->
    <div class="shop-category-area blog-grid mtb-60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 order-lg-last col-md-12 order-md-first">
                    <div class="billing-info-wrap">
                        <h3>Đơn Mua</h3>
                        <p>Quản lý thông tin đơn hàng</p>
                        <hr>
                        <div class="cart-main-area mtb-60px">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12" id="list-cart">
                                        <form action="">
                                            <input type="hidden" name="_token" value="sZNYVtEC8uN3Hgsa6XqfOP1C4cyYI68VQw2ojtRb">
                                            <div class="table-content table-responsive cart-table-content">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="col-lg-2">Hình Ảnh</th>
                                                            <th class="col-lg-5">Tên</th>
                                                            <th class="col-lg-2">Số Lượng</th>
                                                            <th class="col-lg-2">Đơn Giá</th>
                                                            <th class="col-lg-2">Trạng Thái</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- @if(isset($array)) --}}
                                                        @foreach($order as $key => $value)
                                                        @if($value['status'] == 1)
                                                        <tr style="background-color: #204d7426;">
                                                            <td class="product-thumbnail">
                                                                <img class="img-responsive" src="{{ asset('uploads/product/' .\App\Models\Product::where('id', $value['id_product'])->get()[0]->image_product )}}" alt="Cánh gà rán">
                                                            </td>
                                                            <td class="product-name">
                                                                <span class="amount">{{\App\Models\Product::where('id', $value['id_product'])->get()[0]->title}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">{{$value['qty']}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">{{\App\Models\Product::where('id', $value['id_product'])->get()[0]->price}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">Chưa Xác Nhận</span>
                                                            </td>
                                                        </tr>
                                                        @endif

                                                        @if($value['status'] == 2)
                                                        <tr style="background-color: #c3b61f52">
                                                            <td class="product-thumbnail">
                                                                <img class="img-responsive" src="{{ asset('uploads/product/' .\App\Models\Product::where('id', $value['id_product'])->get()[0]->image_product )}}" alt="Cánh gà rán">
                                                            </td>
                                                            <td class="product-name">
                                                                <span class="amount">{{\App\Models\Product::where('id', $value['id_product'])->get()[0]->title}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">{{$value['qty']}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">{{\App\Models\Product::where('id', $value['id_product'])->get()[0]->price}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">Chờ Nhận Hàng</span>
                                                            </td>
                                                        </tr>
                                                        @endif

                                                        @if($value['status'] == 3)
                                                        <tr style="background-color: #ac292536;">
                                                            <td class="product-thumbnail">
                                                                <img class="img-responsive" src="{{ asset('uploads/product/' .\App\Models\Product::where('id', $value['id_product'])->get()[0]->image_product )}}" alt="Cánh gà rán">
                                                            </td>
                                                            <td class="product-name">
                                                                <span class="amount">{{\App\Models\Product::where('id', $value['id_product'])->get()[0]->title}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">{{$value['qty']}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">{{\App\Models\Product::where('id', $value['id_product'])->get()[0]->price}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">Đã Hủy</span>
                                                            </td>
                                                        </tr>
                                                        @endif

                                                        @if($value['status'] == 4)
                                                        <tr style="background-color: #39843952;">
                                                            <td class="product-thumbnail">
                                                                <img class="img-responsive" src="{{ asset('uploads/product/' .\App\Models\Product::where('id', $value['id_product'])->get()[0]->image_product )}}" alt="Cánh gà rán">
                                                            </td>
                                                            <td class="product-name">
                                                                <span class="amount">{{\App\Models\Product::where('id', $value['id_product'])->get()[0]->title}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">{{$value['qty']}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">{{\App\Models\Product::where('id', $value['id_product'])->get()[0]->price}}</span>
                                                            </td>
                                                            <td class="product-price-cart">
                                                                <span class="amount">Đã Thanh Toán</span>
                                                            </td>
                                                        </tr>
                                                        @endif

                                                        @endforeach
                                                        {{-- @endif --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-2 order-lg-first col-md-12 order-md-last mt-lm-50px mt-md-50px">
                    <div class="left-sidebar shop-sidebar-wrap">
                        <div class="sidebar-widget mt-40px">
                            <h3 class="sidebar-title"><a style="color: black;" href="#">Tài Khoản Của Tôi</a></h3>
                            <div class="category-post">
                                <ul>
                                    <li><a href="{{ route('user.showprofile')}}">Hồ sơ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-40px">
                            <h3 class="sidebar-title"><a style="color: black;" href="{{ route('user.showOrders')}}">Đơn Mua</a></h3>
                            {{-- <div class="category-post">
                                <ul>
                                    <li><a href="#">Dresses (20)</a></li>
                                    <li><a href="#">Jackets &amp; Coats (9)</a></li>
                                    <li><a href="#">Sweaters (5)</a></li>
                                    <li><a href="#">Jeans (11)</a></li>
                                    <li><a href="#">Blouses &amp; Shirts (3)</a></li>
                                    <li><a href="#">Electronic Cigarettes (6)</a></li>
                                    <li><a href="#">Bags &amp; Cases (4)</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </div>
    <!-- Shop Category Area End -->
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
    <!-- <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="/assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="/assets/js/plugins/jquery-ui.min.js"></script>
        <script src="/assets/js/plugins/swiper.min.js"></script>
        <script src="/assets/js/plugins/countdown.js"></script>
        <script src="/assets/js/plugins/scrollup.js"></script>
        <script src="/assets/js/plugins/elevateZoom.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="/assets/js/vendor/vendor.min.js"></script>
    <script src="/assets/js/plugins/plugins.min.js"></script>

    <!-- Main Activation JS -->
    <script src="/assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/6ea5a547fb.js" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from template.hasthemes.com/rozer/rozer/blog-list-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:28:42 GMT -->

</html>

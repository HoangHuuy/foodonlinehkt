<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/rozer/rozer/shop-4-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:27:46 GMT -->

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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
        rel="stylesheet" />

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

    <!-- CSS Alert-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />


    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
    <style>
        .minicart-product-list li .content .remove {
            font-size: 30px;
        }

        .header-menu .header-menu-vertical .menu-content {
            min-width: 170px !important;
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
                        <p>Chào mừng đến với foodTHK!</p>
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
                            <li>
                                <a href="{{ route('seller.home') }}">Trang người bán</a>
                            </li>
                            <li class="pr-0">
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>&#160;
                                        {{ Auth::user()->username }} <i class="ion-ios-arrow-down"></i></button>

                                    <ul class="dropdown-menu animation slideDownIn"
                                        aria-labelledby="dropdownMenuButton">
                                        <li><a href="login.html" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Đăng xuất
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                        <li><a href="{{ route('user.showprofile') }}">
                                                Tài khoản của tôi
                                            </a>
                                        </li>
                                        <li><a href="{{ route('user.showOrders') }}">
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
                    <div style="padding-left: 60px;" class="col-md-3">
                        <div class="logo">
                            <a href="/"><img class="img-responsive" src="assets/images/logo/logo.png"
                                    alt="logo.jpg" /></a>
                        </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                        <div class="header-right-element d-flex">
                            <div class="search-element media-body" method="get">
                                <form class="d-flex" method="get" action="" onsubmit="function searchProduct1() {
                                    var sP  = document.getElementById('searchProduct').value;
                                    if(sP.length < 3)
                                    {
                                        alert('Phải nhập ít nhất 3 kí tự');
                                        return false;
                                    }
                                    return true;
                                    }
                                    return searchProduct1()">
                                    <input type="text" id="searchProduct" name="searchProduct"
                                        placeholder="Nhập sản phẩm cần tìm ... " />
                                    <button><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                            <!--Cart info Start -->
                            <div class="header-tools d-flex">
                                <div class="cart-info d-flex align-self-center">
                                    {{-- <a href="compare.html" class="shuffle" data-number="3"><i class="icon-shuffle"></i></a> --}}
                                    @if(Session::has('cart') != null)
                                    <a href="#offcanvas-cart" class="bag offcanvas-toggle"
                                        data-number="{{Session::get('cart')->totalQty}}"><i class="icon-bag"
                                            id="total-quanty-show"></i><span>{{number_format(Session::get('cart')->totalPrice)}}&#8363;</span></a>
                                    @elseif(Session::has('cart') == null)
                                    <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="0"><i
                                            class="icon-bag" id="total-quanty-show"></i><span></span></a>
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
                                @foreach($category as $item)
                                <li class="menu-item"><a href="/product/{{$item->slug}}">{{$item->cate_name}}</a></li>
                                @endforeach
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
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- header menu -->
    </header>
    <!-- Header Section End Here -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner" id="change-item-cart">
            @if(Session::has('cart') != null)
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
                </div>
                <div class="buttons">
                    <a href="{{route('shoppingCart')}}" class="btn btn-dark btn-hover-primary mb-30px">xem giỏ hàng</a>
                    <a href="/check-out" class="btn btn-outline-dark current-btn">Thanh Toán</a>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <div class="offcanvas-overlay"></div>
    <!-- Shop Category Area End -->
    <div class="shop-category-area mt-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <div class="shop-tab nav d-flex">
                            <a class="active" href="#shop-1" data-bs-toggle="tab">
                                <i class="fa fa-th"></i>
                            </a>
                            <a href="#shop-2" data-bs-toggle="tab">
                                <i class="fa fa-list"></i>
                            </a>
                            <p>Có tất cả {{ $count }} sản phẩm</p>
                        </div>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    {{-- <div class="feature-area single-product-responsive mt-60px mb-30px">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h2 class="section-heading">You Might Also Like</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-slider-two slider-nav-style-1 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                <div class="feature-slider-wrapper swiper-wrapper" id="swiper-wrapper-2f65a0e15a0db4f3" aria-live="polite" style="transform: translate3d(-312px, 0px, 0px); transition-duration: 0ms;">
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide swiper-slide-prev" role="group" aria-label="1 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide swiper-slide-active" role="group" aria-label="2 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/7.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/8.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price">€23.90</li>
                                                        <li class="current-price">€21.51</li>
                                                        <li class="discount-price">-10%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide swiper-slide-next" role="group" aria-label="3 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/9.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/10.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="4 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/12.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/13.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="5 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/14.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/15.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="6 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/16.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/17.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="7 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/18.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/19.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="8 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/20.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/21.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="9 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/22.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/23.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="10 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/24.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/25.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="11 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/26.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/27.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="12 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/28.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/29.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="13 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/6.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/7.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="14 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/8.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/9.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="15 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/10.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/11.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="16 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/12.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/13.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Single Item -->
                                    <div class="feature-slider-item swiper-slide" role="group" aria-label="17 / 17" style="width: 312px;">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="assets/images/product-image/14.jpg" alt="">
                                                    <img class="second-img" src="assets/images/product-image/15.jpg" alt="">
                                                </a>
                                                <div class="quick-view">
                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="icon-magnifier icons"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">New</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="old-price not-cut">€18.90</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-32b2e1fc610090c59" aria-disabled="false"></div>
                                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-32b2e1fc610090c59" aria-disabled="false"></div>
                                </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div> --}}

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area mt-35">
                        <!-- Shop Tab Content Start -->
                        <div class="tab-content jump">
                            <!-- Tab One Start -->
                            <div id="shop-1" class="tab-pane active">
                                <div class="row responsive-md-class">
                                    @foreach($product as $item)

                                    <div class="col-xl-3 col-md-4 col-sm-6 ">
                                        <article class="list-product">
                                            <div class="img-block">
                                                <a href="{{ route('product.detail', ['id' => $item->id]) }}"
                                                    class="thumbnail">
                                                    {{-- <a href="{{ dd('$item[]') }}" class="thumbnail"> --}}
                                                    <img class="first-img"
                                                        src="{{ asset('uploads/product/' . $item->image_product )}}"
                                                        height="160px" alt="{{$item->title}}" />
                                                </a>
                                            </div>
                                            <ul class="product-flag">
                                                <li class="new">Mới</li>
                                            </ul>
                                            <div class="product-decs">
                                                <a class="inner-link"
                                                    href="shop-4-column.html"><span>{{$item->title}}</span></a>
                                                
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="current-price">
                                                            &#8363;{{ number_format($item->price) }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li class="cart">
                                                        <a class="cart-btn" onclick="add({{$item->id}})"
                                                            href="javascript:">THÊM VÀO GIỎ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Tab One End -->
                            <!-- Tab Two Start -->
                            <div id="shop-2" class="tab-pane">
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/7.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/8.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">Fila
                                                                    Locker Room Varsity Jacket</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/9.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/10.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/11.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/12.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">New
                                                                    Balance Fresh Foam LAZR v1 Sport</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/13.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/14.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">Juicy
                                                                    Couture Solid Sleeve Puffer Jacket</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/15.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/16.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">New
                                                                    Balance Fresh Foam Kaymin</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/17.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/18.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">Water
                                                                    and Wind Resistant Insulated Jacket</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/19.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/20.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html"
                                                                    class="product-link">Trans-Weight Hooded Wind and
                                                                    Water Resistant Shell</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/21.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/22.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html"
                                                                    class="product-link">Madden by Steve Madden Cale
                                                                    6</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/23.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/24.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html"
                                                                    class="product-link">Calvin Klein Jeans Reflective
                                                                    Logo Full Zip</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/25.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/26.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">New
                                                                    Balance Fresh Foam Arishi Sport</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/27.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/28.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO
                                                                    DESIGN</span></a>
                                                            <h2><a href="single-product.html" class="product-link">Juicy
                                                                    Couture Juicy Quilted Terry Track Jacket</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/29.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/17.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">Fila
                                                                    Locker Room Varsity Jacket</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/11.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/12.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">Fila
                                                                    Locker Room Varsity Jacket</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/17.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/18.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">Fila
                                                                    Locker Room Varsity Jacket</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/13.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/14.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">Fila
                                                                    Locker Room Varsity Jacket</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                                <div class="shop-list-wrap scroll-zoom">
                                    <div class="row list-product m-0px">
                                        <div class="col-md-12 padding-0px">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <div class="left-img">
                                                        <div class="img-block">
                                                            <a href="single-product.html" class="thumbnail">
                                                                <img class="first-img"
                                                                    src="assets/images/product-image/15.jpg" alt="" />
                                                                <img class="second-img"
                                                                    src="assets/images/product-image/16.jpg" alt="" />
                                                            </a>
                                                            <div class="quick-view">
                                                                <a class="quick_view" href="#"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="ion-ios-search-strong"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                                    <div class="product-desc-wrap">
                                                        <div class="product-decs">
                                                            <a class="inner-link"
                                                                href="shop-4-column.html"><span>GRAPHIC
                                                                    CORNER</span></a>
                                                            <h2><a href="single-product.html" class="product-link">Fila
                                                                    Locker Room Varsity Jacket</a></h2>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                            <div class="product-intro-info">
                                                                <p>Create a cool and sporty look with the FILA® Locker
                                                                    Room Varsity Jacket.</p>
                                                                <p>Comfortable cotton-blend fabrication.</p>
                                                                <p>Classic varsity jacket features brand details
                                                                    throughout.</p>
                                                                <p>Flat knit collar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="box-inner">
                                                            <div class="in-stock">Availability: <span>299 In
                                                                    Stock</span></div>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price not-cut">€9.90</li>
                                                                </ul>
                                                            </div>
                                                            <div class="add-to-link">
                                                                <ul>
                                                                    <li class="cart"><a title="Add to cart"
                                                                            class="cart-btn" href="#">ADD TO CART </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="wishlist.html"
                                                                            title="Add to wishlist"><i
                                                                                class="icon-heart"></i> Add to
                                                                            Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="compare.html" title="Add to compare"><i
                                                                                class="icon-shuffle"></i> Add to
                                                                            Compare</a>
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
                            </div>
                            <!-- Tab Two End -->
                        </div>
                        <!-- Shop Tab Content End -->
                        <!--  Pagination Area Start -->
                        <div style="display:flex; justify-content:center; margin: 30px; margin-bottom: 30px;">
                            <div>
                                {{ $product->links() }}
                            </div>
                        </div> 
                        
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/11.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/pro   duct-image/12.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/13.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/14.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/11.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/12.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/13.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/14.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Originals Kaval Windbr</h2>
                                <p class="reference">Reference:<span> demo_17</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€18.90</li>
                                    </ul>
                                </div>
                                <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm
                                    tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis
                                    nostrud exercitation ullamco</p>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <a href="#"> + Add To Cart</a>
                                    </div>
                                </div>
                                <div class="pro-details-wish-com">
                                    <div class="pro-details-wishlist">
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to
                                            wishlist</a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                    </div>
                                </div>
                                <div class="pro-details-social-info">
                                    <span>Share</span>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
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
    </div>
    <!-- Modal end -->
    <!-- JS
============================================ -->
    <!-- Vendors JS -->
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>

    <!-- JavaScript Alert-->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        function add(id) {
            $.ajax({
                url: 'add-to-cart/' + id,
                type: 'GET',
            }).done(function (response) {
                RenderCart(response);
                alertify.success('Thêm giỏ hàng thành công');
            });
        }
        $("#change-item-cart").on('click', '.content .remove-cart', function () {
            console.log($(this).data("id"));
            $.ajax({
                url: 'delete-item-cart/' + $(this).data("id"),
                type: 'GET',
            }).done(function (response) {
                RenderCart(response);
                alertify.warning('Xóa sản phẩm thành công');
            });
        });
        function wishlist(id, status){
            $.ajax({
                url: 'wishlist/' + id,
                type: 'GET',
            });
        }

        function RenderCart(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            $("#total-quanty-show").text($("#total-quanty-cart").val());
        }

    </script>
</body>

<!-- Mirrored from template.hasthemes.com/rozer/rozer/shop-4-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:27:46 GMT -->

</html>

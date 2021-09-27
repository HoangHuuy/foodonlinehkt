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
                                    <div class="search-category">
                                        <select name="" id=""></select>
                                    </div>
                                    <input type="text" placeholder="Enter your search key ... " />
                                    <button><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                            <!--Cart info Start -->
                            <div class="header-tools d-flex">
                                <div class="cart-info d-flex align-self-center">
                                    {{-- <a href="compare.html" class="shuffle" data-number="3"><i class="icon-shuffle"></i></a> --}}
                                    <a href="#offcanvas-wishlist" class="heart offcanvas-toggle" data-number="3"><i
                                            class="icon-heart"></i></a>
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
                                </li>
                                {{-- <li class="menu-dropdown">
                                        <a href="#">Shop <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="mega-menu-wrap">
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Shop Grid</a></li>
                                                    <li><a href="shop-3-column.html">Shop Grid 3 Column</a></li>
                                                    <li><a href="shop-4-column.html">Shop Grid 4 Column</a></li>
                                                    <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Shop List</a></li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Shop Single</a></li>
                                                    <li><a href="single-product.html">Shop Single</a></li>
                                                    <li><a href="single-product-variable.html">Shop Variable</a></li>
                                                    <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                                    <li><a href="single-product-group.html">Shop Group</a></li>
                                                    <li><a href="single-product-tabstyle-2.html">Shop Tab 2</a></li>
                                                    <li><a href="single-product-tabstyle-3.html">Shop Tab 3</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Shop Single</a></li>
                                                    <li><a href="single-product-slider.html">Shop Slider</a></li>
                                                    <li><a href="single-product-gallery-left.html">Shop Gallery Left</a></li>
                                                    <li><a href="single-product-gallery-right.html">Shop Gallery Right</a></li>
                                                    <li><a href="single-product-sticky-left.html">Shop Sticky Left</a></li>
                                                    <li><a href="single-product-sticky-right.html">Shop Sticky Right</a></li>
                                                </ul>
                                            </li>
                                            <li class="w-100">
                                                <ul class="banner-megamenu-wrapper d-flex">
                                                    <li class="banner-wrapper mr-30px">
                                                        <a href="single-product.html"><img src="/assets/images/menu-image/banner-menu2.jpg" alt="" /></a>
                                                    </li>
                                                    <li class="banner-wrapper">
                                                        <a href="single-product.html"><img src="/assets/images/menu-image/banner-menu3.jpg" alt="" /></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="main-sub-menu">
                                            <li><a href="about.html">About Page</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="/check-out">Thanh Toán Page</a></li>
                                            <li><a href="compare.html">Compare Page</a></li>
                                            <li><a href="login.html">Login & Register Page</a></li>
                                            <li><a href="my-account.html">Account Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                            <li><a href="thank-you-page.html">Thank You Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="#">Blog <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="main-sub-menu">
                                            <li class="menu-dropdown position-static">
                                                <a href="#">Blog Grid <i class="ion-ios-arrow-right"></i></a>
                                                <ul class="main-sub-menu main-sub-menu-2">
                                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-dropdown position-static">
                                                <a href="#">Blog List <i class="ion-ios-arrow-right"></i></a>
                                                <ul class="main-sub-menu main-sub-menu-2">
                                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-dropdown position-static">
                                                <a href="#">Blog Single <i class="ion-ios-arrow-right"></i></a>
                                                <ul class="main-sub-menu main-sub-menu-2">
                                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}
                                <li><a href="#">Danh sách món ưa thích</a></li>
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
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <div class="billing-info-wrap">
                        <h3>Hồ Sơ Của Tôi</h3>
                        <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                        <hr>
                        <form action="{{route('user.storeAccount', ['id' => $account->id])}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Họ Tên</label>
                                        <input name="fullname" type="text" value="{{ isset($account->fullname) ? $account->fullname : ""}}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Email</label>
                                        <input name="email" type="text" value="{{ isset($account->email) ? $account->email : ""}}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Số Điện Thoại</label>
                                        <input name="phoneNumber" type="text" value="{{ isset($account->phoneNumber) ? $account->phoneNumber : ""}}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-20px">
                                        <label>Giới Tính</label>
                                        <br>
                                        <br>
                                        <input style="margin: 0 10px 0 10px;" name="gender" type="radio" value="Nam" {{ (isset($account->gender) && $account->gender == "Nam") ? "checked" : ""}}/>Nam 
                                        <input style="margin: 0 10px 0 10px;" name="gender" type="radio" value="Nữ" {{ (isset($account->gender) && $account->gender == "Nữ") ? "checked" : ""}}/>Nữ 
                                        <input style="margin: 0 10px 0 10px;" name="gender" type="radio" value="Khác" {{ (isset($account->gender) && $account->gender == "Khác") ? "checked" : ""}}/>Khác
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="billing-select mb-20px">
                                        <label>Ngày sinh</label>
                                        <select name="day" id="day">
                                            <option {{ (isset($account->day) && $account->day == "1") ? "selected" : ""}} value="1">1</option>
                                            <option {{ (isset($account->day) && $account->day == "2") ? "selected" : ""}} value="2">2</option>
                                            <option {{ (isset($account->day) && $account->day == "3") ? "selected" : ""}} value="3">3</option>
                                            <option {{ (isset($account->day) && $account->day == "4") ? "selected" : ""}} value="4">4</option>
                                            <option {{ (isset($account->day) && $account->day == "5") ? "selected" : ""}} value="5">5</option>
                                            <option {{ (isset($account->day) && $account->day == "6") ? "selected" : ""}} value="6">6</option>
                                            <option {{ (isset($account->day) && $account->day == "7") ? "selected" : ""}} value="7">7</option>
                                            <option {{ (isset($account->day) && $account->day == "8") ? "selected" : ""}} value="8">8</option>
                                            <option {{ (isset($account->day) && $account->day == "9") ? "selected" : ""}} value="9">9</option>
                                            <option {{ (isset($account->day) && $account->day == "10") ? "selected" : ""}} value="10">10</option>
                                            <option {{ (isset($account->day) && $account->day == "11") ? "selected" : ""}} value="11">11</option>
                                            <option {{ (isset($account->day) && $account->day == "12") ? "selected" : ""}} value="12">12</option>
                                            <option {{ (isset($account->day) && $account->day == "13") ? "selected" : ""}} value="13">13</option>
                                            <option {{ (isset($account->day) && $account->day == "14") ? "selected" : ""}} value="14">14</option>
                                            <option {{ (isset($account->day) && $account->day == "15") ? "selected" : ""}} value="15">15</option>
                                            <option {{ (isset($account->day) && $account->day == "16") ? "selected" : ""}} value="16">16</option>
                                            <option {{ (isset($account->day) && $account->day == "17") ? "selected" : ""}} value="17">17</option>
                                            <option {{ (isset($account->day) && $account->day == "18") ? "selected" : ""}} value="18">18</option>
                                            <option {{ (isset($account->day) && $account->day == "19") ? "selected" : ""}} value="19">19</option>
                                            <option {{ (isset($account->day) && $account->day == "20") ? "selected" : ""}} value="20">20</option>
                                            <option {{ (isset($account->day) && $account->day == "21") ? "selected" : ""}} value="21">21</option>
                                            <option {{ (isset($account->day) && $account->day == "22") ? "selected" : ""}} value="22">22</option>
                                            <option {{ (isset($account->day) && $account->day == "23") ? "selected" : ""}} value="23">23</option>
                                            <option {{ (isset($account->day) && $account->day == "24") ? "selected" : ""}} value="24">24</option>
                                            <option {{ (isset($account->day) && $account->day == "25") ? "selected" : ""}} value="25">25</option>
                                            <option {{ (isset($account->day) && $account->day == "26") ? "selected" : ""}} value="26">26</option>
                                            <option {{ (isset($account->day) && $account->day == "27") ? "selected" : ""}} value="27">27</option>
                                            <option {{ (isset($account->day) && $account->day == "28") ? "selected" : ""}} value="28">28</option>
                                            <option {{ (isset($account->day) && $account->day == "29") ? "selected" : ""}} value="29">29</option>
                                            <option {{ (isset($account->day) && $account->day == "30") ? "selected" : ""}} value="30">30</option>
                                            <option {{ (isset($account->day) && $account->day == "31") ? "selected" : ""}} value="31">31</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="billing-select mb-20px">
                                        <label></label>
                                        <select name="month" id="month">
                                            <option {{ (isset($account->month) && $account->month == "1") ? "selected" : ""}} value="1">Tháng 1</option>
                                            <option {{ (isset($account->month) && $account->month == "2") ? "selected" : ""}} value="2">Tháng 2</option>
                                            <option {{ (isset($account->month) && $account->month == "3") ? "selected" : ""}} value="3">Tháng 3</option>
                                            <option {{ (isset($account->month) && $account->month == "4") ? "selected" : ""}} value="4">Tháng 4</option>
                                            <option {{ (isset($account->month) && $account->month == "5") ? "selected" : ""}} value="5">Tháng 5</option>
                                            <option {{ (isset($account->month) && $account->month == "6") ? "selected" : ""}} value="6">Tháng 6</option>
                                            <option {{ (isset($account->month) && $account->month == "7") ? "selected" : ""}} value="7">Tháng 7</option>
                                            <option {{ (isset($account->month) && $account->month == "8") ? "selected" : ""}} value="8">Tháng 8</option>
                                            <option {{ (isset($account->month) && $account->month == "9") ? "selected" : ""}} value="9">Tháng 9</option>
                                            <option {{ (isset($account->month) && $account->month == "10") ? "selected" : ""}} value="10">Tháng 10</option>
                                            <option {{ (isset($account->month) && $account->month == "11") ? "selected" : ""}} value="11">Tháng 11</option>
                                            <option {{ (isset($account->month) && $account->month == "12") ? "selected" : ""}} value="12">Tháng 12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="billing-select mb-20px">
                                        <label></label>
                                        <select name="year" id="year">
                                            <option {{ (isset($account->year) && $account->year == "2021") ? "selected" : ""}} value="2021">2021</option>
                                            <option {{ (isset($account->year) && $account->year == "2020") ? "selected" : ""}} value="2020">2020</option>
                                            <option {{ (isset($account->year) && $account->year == "2019") ? "selected" : ""}} value="2019">2019</option>
                                            <option {{ (isset($account->year) && $account->year == "2018") ? "selected" : ""}} value="2018">2018</option>
                                            <option {{ (isset($account->year) && $account->year == "2017") ? "selected" : ""}} value="2017">2017</option>
                                            <option {{ (isset($account->year) && $account->year == "2016") ? "selected" : ""}} value="2016">2016</option>
                                            <option {{ (isset($account->year) && $account->year == "2015") ? "selected" : ""}} value="2015">2015</option>
                                            <option {{ (isset($account->year) && $account->year == "2014") ? "selected" : ""}} value="2014">2014</option>
                                            <option {{ (isset($account->year) && $account->year == "2013") ? "selected" : ""}} value="2013">2013</option>
                                            <option {{ (isset($account->year) && $account->year == "2012") ? "selected" : ""}} value="2012">2012</option>
                                            <option {{ (isset($account->year) && $account->year == "2011") ? "selected" : ""}} value="2011">2011</option>
                                            <option {{ (isset($account->year) && $account->year == "2010") ? "selected" : ""}} value="2010">2010</option>
                                            <option {{ (isset($account->year) && $account->year == "2009") ? "selected" : ""}} value="2009">2009</option>
                                            <option {{ (isset($account->year) && $account->year == "2008") ? "selected" : ""}} value="2008">2008</option>
                                            <option {{ (isset($account->year) && $account->year == "2007") ? "selected" : ""}} value="2007">2007</option>
                                            <option {{ (isset($account->year) && $account->year == "2006") ? "selected" : ""}} value="2006">2006</option>
                                            <option {{ (isset($account->year) && $account->year == "2005") ? "selected" : ""}} value="2005">2005</option>
                                            <option {{ (isset($account->year) && $account->year == "2004") ? "selected" : ""}} value="2004">2004</option>
                                            <option {{ (isset($account->year) && $account->year == "2003") ? "selected" : ""}} value="2003">2003</option>
                                            <option {{ (isset($account->year) && $account->year == "2002") ? "selected" : ""}} value="2002">2002</option>
                                            <option {{ (isset($account->year) && $account->year == "2001") ? "selected" : ""}} value="2001">2001</option>
                                            <option {{ (isset($account->year) && $account->year == "2000") ? "selected" : ""}} value="2000">2000</option>
                                            <option {{ (isset($account->year) && $account->year == "1999") ? "selected" : ""}} value="1999">1999</option>
                                            <option {{ (isset($account->year) && $account->year == "1998") ? "selected" : ""}} value="1998">1998</option>
                                            <option {{ (isset($account->year) && $account->year == "1997") ? "selected" : ""}} value="1997">1997</option>
                                            <option {{ (isset($account->year) && $account->year == "1996") ? "selected" : ""}} value="1996">1996</option>
                                            <option {{ (isset($account->year) && $account->year == "1995") ? "selected" : ""}} value="1995">1995</option>
                                            <option {{ (isset($account->year) && $account->year == "1994") ? "selected" : ""}} value="1994">1994</option>
                                            <option {{ (isset($account->year) && $account->year == "1993") ? "selected" : ""}} value="1993">1993</option>
                                            <option {{ (isset($account->year) && $account->year == "1992") ? "selected" : ""}} value="1992">1992</option>
                                            <option {{ (isset($account->year) && $account->year == "1991") ? "selected" : ""}} value="1991">1991</option>
                                            <option {{ (isset($account->year) && $account->year == "1990") ? "selected" : ""}} value="1990">1990</option>
                                            <option {{ (isset($account->year) && $account->year == "1989") ? "selected" : ""}} value="1989">1989</option>
                                            <option {{ (isset($account->year) && $account->year == "1988") ? "selected" : ""}} value="1988">1988</option>
                                            <option {{ (isset($account->year) && $account->year == "1987") ? "selected" : ""}} value="1987">1987</option>
                                            <option {{ (isset($account->year) && $account->year == "1986") ? "selected" : ""}} value="1986">1986</option>
                                            <option {{ (isset($account->year) && $account->year == "1985") ? "selected" : ""}} value="1985">1985</option>
                                            <option {{ (isset($account->year) && $account->year == "1984") ? "selected" : ""}} value="1984">1984</option>
                                            <option {{ (isset($account->year) && $account->year == "1983") ? "selected" : ""}} value="1983">1983</option>
                                            <option {{ (isset($account->year) && $account->year == "1982") ? "selected" : ""}} value="1982">1982</option>
                                            <option {{ (isset($account->year) && $account->year == "1981") ? "selected" : ""}} value="1981">1981</option>
                                            <option {{ (isset($account->year) && $account->year == "1980") ? "selected" : ""}} value="1980">1980</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Địa Chỉ</label>
                                        <input name="address" type="text" value="{{ isset($account->address) ? $account->address : ""}}">
                                    </div>
                                </div>
                                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                                    <div class="your-order-area">
                                        <div class="Place-order mt-25">
                                            <a onclick="this.closest('form').submit();return false;" class="btn-hover" href="#">Lưu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                        <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">ABOUT US</h4>
                                <p class="text-infor">We are a team of designers and developers that create high quality
                                    HTML template</p>
                                <div class="need-help">
                                    <p class="phone-info">
                                        NEED HELP?
                                        <span>
                                            0123456789 <br />
                                            0123456789
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Information</h4>
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="#">Delivery</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Secure Payment</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">Stores</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 mb-sm-30px mb-lm-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">CUSTOM LINKS</h4>
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="#">Legal Notice</a></li>
                                        <li><a href="#">Prices Drop</a></li>
                                        <li><a href="#">New Products</a></li>
                                        <li><a href="#">Best Sales</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 ">
                            <div class="single-wedge">
                                <h4 class="footer-herading">NEWSLETTER</h4>
                                <div class="subscrib-text">
                                    <p>You may unsubscribe at any moment. For that purpose, please find our contact info
                                        in the legal notice.</p>
                                </div>
                                <div id="mc_embed_signup" class="subscribe-form">
                                    <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                                        name="mc-embedded-subscribe-form" method="post"
                                        action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input class="email" type="email" required=""
                                                placeholder="Enter your email here.." name="EMAIL" value="" />
                                            <div class="mc-news" aria-hidden="true"
                                                style="position: absolute; left: -5000px;">
                                                <input type="text" value="" tabindex="-1"
                                                    name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                            </div>
                                            <div class="clear">
                                                <input id="mc-embedded-subscribe" class="button" type="submit"
                                                    name="subscribe" value="Sign Up" />
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
                                        <li>
                                            <a href="#"><i class="icon-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <p class="copy-text"> © 2021 <strong>Rozer</strong> Made With <i class="fa fa-heart"
                                    style="color: red;" aria-hidden="true"></i> By <a class="company-name"
                                    href="https://hasthemes.com/">
                                    <strong> HasThemes</strong></a>.</p>
                        </div>
                        <div class="col-md-6 text-end">
                            <img class="payment-img" src="/assets/images/icons/payment.png" alt="" />
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

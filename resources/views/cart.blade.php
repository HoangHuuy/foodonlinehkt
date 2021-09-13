<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from template.hasthemes.com/rozer/rozer/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:28:10 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Rozer – Electronics eCommerce HTML Template</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/assets/images/favicon/favicon.png" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />

        <!-- CSS
  ============================================ -->

            <!-- Vendor CSS (Bootstrap & Icon Font) -->
        <!-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/ionicons.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/simple-line-icons.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/font-awesome.min.css"> -->

            <!-- Plugins CSS (All Plugins Files) -->
         <!-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/animate.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/swiper.css">  -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/vendor.min.css" />
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/plugins.min.css" />
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.min.css">

        <!-- Main Style CSS -->
        <!-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.css" /> -->
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
                                <li class="pr-0">
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username }} <i
                                                class="ion-ios-arrow-down"></i></button>
    
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
                                <a href="/"><img class="img-responsive" src="assets/images/logo/logo.png" alt="logo.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-md-10 align-self-center">
                            <div class="header-right-element d-flex">
                                <div class="search-element media-body">
                                    <form class="d-flex" action="#">
                                        <div class="search-category">
                                            <select>
                                                <option value="0">All categories</option>
                                                <option value="12">Laptop</option>
                                                <option value="13">- - Hot Categories</option>
                                                <option value="19">- - - - Dresses</option>
                                                <option value="20">- - - - Jackets &amp; Coats</option>
                                                <option value="21">- - - - Sweaters</option>
                                                <option value="22">- - - - Jeans</option>
                                                <option value="23">- - - - Blouses &amp; Shirts</option>
                                                <option value="14">- - Outerwear &amp; Jackets</option>
                                                <option value="24">- - - - Basic Jackets</option>
                                                <option value="25">- - - - Real Fur</option>
                                                <option value="26">- - - - Down Coats</option>
                                                <option value="27">- - - - Blazers</option>
                                                <option value="28">- - - - Trench Coats</option>
                                                <option value="15">- - Weddings &amp; Events</option>
                                                <option value="29">- - - - Wedding Dresses</option>
                                                <option value="30">- - - - Evening Dresses</option>
                                                <option value="31">- - - - Prom Dresses</option>
                                                <option value="32">- - - - Bridesmaid Dresses</option>
                                                <option value="33">- - - - Wedding Accessories</option>
                                                <option value="16">- - Bottoms</option>
                                                <option value="34">- - - - Skirts</option>
                                                <option value="35">- - - - Leggings</option>
                                                <option value="36">- - - - Pants &amp; Capris</option>
                                                <option value="37">- - - - Wide Leg Pants</option>
                                                <option value="38">- - - - Shorts</option>
                                                <option value="17">- - Tops &amp; Sets</option>
                                                <option value="39">- - - - Tank Tops</option>
                                                <option value="40">- - - - Suits &amp; Sets</option>
                                                <option value="41">- - - - Jumpsuits</option>
                                                <option value="42">- - - - Rompers</option>
                                                <option value="43">- - - - Sleep &amp; Lounge</option>
                                                <option value="18">- - Accessories</option>
                                                <option value="44">- - - - Eyewear &amp; Accessories</option>
                                                <option value="45">- - - - Hats &amp; Caps</option>
                                                <option value="46">- - - - Belts &amp; Cummerbunds</option>
                                                <option value="47">- - - - Scarves &amp; Wraps</option>
                                                <option value="48">- - - - Gloves &amp; Mittens</option>
                                                <option value="49">Computer</option>
                                                <option value="50">- - Bottoms</option>
                                                <option value="53">- - - - Skirts</option>
                                                <option value="54">- - - - Leggings</option>
                                                <option value="55">- - - - Jeans</option>
                                                <option value="56">- - - - Pants &amp; Capris</option>
                                                <option value="57">- - - - Shorts</option>
                                                <option value="51">- - Outerwear &amp; Jackets</option>
                                                <option value="58">- - - - Trench</option>
                                                <option value="59">- - - - Genuine Leather</option>
                                                <option value="60">- - - - Parkas</option>
                                                <option value="61">- - - - Down Jackets</option>
                                                <option value="62">- - - - Wool &amp; Blends</option>
                                                <option value="52">- - Underwear &amp; Loungewear</option>
                                                <option value="63">- - - - Boxers</option>
                                                <option value="64">- - - - Briefs</option>
                                                <option value="65">- - - - Long Johns</option>
                                                <option value="66">- - - - Men's Sleep &amp; Lounge</option>
                                                <option value="67">- - - - Pajama Sets</option>
                                                <option value="68">Smartphone</option>
                                                <option value="69">- - Accessories &amp; Parts</option>
                                                <option value="75">- - - - Cables &amp; Adapters</option>
                                                <option value="76">- - - - Batteries</option>
                                                <option value="77">- - - - Chargers</option>
                                                <option value="78">- - - - Bags &amp; Cases</option>
                                                <option value="79">- - - - Electronic Cigarettes</option>
                                                <option value="70">- - Audio &amp; Video</option>
                                                <option value="80">- - - - Televisions</option>
                                                <option value="81">- - - - TV Receivers</option>
                                                <option value="82">- - - - Projectors</option>
                                                <option value="83">- - - - Audio Amplifier Boards</option>
                                                <option value="84">- - - - TV Sticks</option>
                                                <option value="71">- - Camera &amp; Photo</option>
                                                <option value="85">- - - - Digital Cameras</option>
                                                <option value="86">- - - - Camcorders</option>
                                                <option value="87">- - - - Camera Drones</option>
                                                <option value="88">- - - - Action Cameras</option>
                                                <option value="89">- - - - Photo Studio Supplies</option>
                                                <option value="72">- - Portable Audio &amp; Video</option>
                                                <option value="90">- - - - Headphones</option>
                                                <option value="91">- - - - Speakers</option>
                                                <option value="92">- - - - MP3 Players</option>
                                                <option value="93">- - - - VR/AR Devices</option>
                                                <option value="94">- - - - Microphones</option>
                                                <option value="73">- - Smart Electronics</option>
                                                <option value="95">- - - - Wearable Devices</option>
                                                <option value="96">- - - - Smart Home Appliances</option>
                                                <option value="97">- - - - Smart Remote Controls</option>
                                                <option value="98">- - - - Smart Watches</option>
                                                <option value="99">- - - - Smart Wristbands</option>
                                                <option value="74">- - Video Games</option>
                                                <option value="100">- - - - Handheld Game Players</option>
                                                <option value="101">- - - - Game Controllers</option>
                                                <option value="102">- - - - Joysticks</option>
                                                <option value="103">- - - - Stickers</option>
                                                <option value="104">Game Consoles</option>
                                                <option value="105">Mp3 &amp; headphone</option>
                                                <option value="106">Tv &amp; Video</option>
                                                <option value="107">Watches</option>
                                                <option value="108">Washing Machine</option>
                                                <option value="109">Camera</option>
                                                <option value="110">Audio &amp; Theater</option>
                                                <option value="111">Accessories</option>
                                                <option value="112">Games &amp; Consoles</option>
                                            </select>
                                        </div>
                                        <input type="text" placeholder="Nhập tên sản phẩm (tối thiểu 3 kí tự) ..." />
                                        <button><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                                <!--Cart info Start -->
                                <div class="header-tools d-flex">
                                    <div class="cart-info d-flex align-self-center">
                                        <a href="#offcanvas-wishlist" class="heart offcanvas-toggle" data-number="3"><i class="icon-heart"></i></a>
                                        <a href="#offcanvas-cart" data-number="3"><i class="icon-bag"></i></a>
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
                                <h4 class="menu-title">All Cattegories</h4>
                                <ul class="menu-content display-none">
                                    <li class="menu-item">
                                        <a href="#">Electronics <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu flex-wrap">
                                            <li>
                                                <a href="#">
                                                    <span> <strong> Accessories & Parts</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Cables & Adapters</a></li>
                                                    <li><a href="#">Batteries</a></li>
                                                    <li><a href="#">Chargers</a></li>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Electronic Cigarettes</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><strong>Camera & Photo</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Camcorders</a></li>
                                                    <li><a href="#">Camera Drones</a></li>
                                                    <li><a href="#">Action Cameras</a></li>
                                                    <li><a href="#">Photo Studio Supplie</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><strong>Smart Electronics</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Wearable Devices</a></li>
                                                    <li><a href="#">Smart Home Appliances</a></li>
                                                    <li><a href="#">Smart Remote Controls</a></li>
                                                    <li><a href="#">Smart Watches</a></li>
                                                    <li><a href="#">Smart Wristbands</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><strong>Audio & Video</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Televisions</a></li>
                                                    <li><a href="#">TV Receivers</a></li>
                                                    <li><a href="#">Projectors</a></li>
                                                    <li><a href="#">Audio Amplifier Boards</a></li>
                                                    <li><a href="#">TV Sticks</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><strong>Portable Audio & Video</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Headphones</a></li>
                                                    <li><a href="#">Speakers</a></li>
                                                    <li><a href="#">MP3 Players</a></li>
                                                    <li><a href="#">VR/AR Devices</a></li>
                                                    <li><a href="#">Microphones</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <img src="http://127.0.0.1:8000/assets/images/menu-image/banner-mega1.jpg" alt="" />
                                            </li>
                                        </ul>
                                        <!-- sub menu -->
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Video Games <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Handheld Game Players</a></li>
                                                    <li><a href="#">Game Controllers</a></li>
                                                    <li><a href="#">Joysticks</a></li>
                                                    <li><a href="#">Stickers</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- sub menu -->
                                    </li>
                                    <li class="menu-item"><a href="#">Televisions</a></li>
                                    <li class="menu-item"><a href="#">Digital Cameras</a></li>
                                    <li class="menu-item"><a href="#">Headphones</a></li>
                                    <li class="menu-item"><a href="#"> Wearable Devices</a></li>
                                    <li class="menu-item"><a href="#"> Smart Watches</a></li>
                                    <li class="menu-item"><a href="#"> Game Controllers</a></li>
                                    <li class="menu-item"><a href="#"> Smart Home Appliances</a></li>
                                </ul>
                                <!-- menu content -->
                            </div>
                            <!-- header menu vertical -->
                        </div>
                        <div class="col-lg-9 custom-col-2">
                            <div class="header-horizontal-menu">
                                <ul class="menu-content">
                                    <li class="active menu-dropdown">
                                        <a href="#">Home <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="main-sub-menu">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                            <li><a href="index-4.html">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown">
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
                                                        <a href="single-product.html"><img src="http://127.0.0.1:8000/assets/images/menu-image/banner-menu2.jpg" alt="" /></a>
                                                    </li>
                                                    <li class="banner-wrapper">
                                                        <a href="single-product.html"><img src="http://127.0.0.1:8000/assets/images/menu-image/banner-menu3.jpg" alt="" /></a>
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
                                            <li><a href="checkout.html">Checkout Page</a></li>
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
                                    </li>
                                    <li><a href="contact.html">contact Us</a></li>
                                </ul>
                            </div>
                            <!-- header horizontal menu -->
                            <div class="intro-text-shipping text-end">
                                <div class="free-ship">Free Shipping on Orders $50+</div>
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

    <!-- Search Category Start -->
    <div class="mobile-search-area d-xl-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-element media-body">
                        <form class="d-flex" action="#">
                            <div class="search-category">
                                <select>
                                    <option value="0">All categories</option>
                                    <option value="12">Laptop</option>
                                    <option value="13">- - Hot Categories</option>
                                    <option value="19">- - - - Dresses</option>
                                    <option value="20">- - - - Jackets &amp; Coats</option>
                                    <option value="21">- - - - Sweaters</option>
                                    <option value="22">- - - - Jeans</option>
                                    <option value="23">- - - - Blouses &amp; Shirts</option>
                                    <option value="14">- - Outerwear &amp; Jackets</option>
                                    <option value="24">- - - - Basic Jackets</option>
                                    <option value="25">- - - - Real Fur</option>
                                    <option value="26">- - - - Down Coats</option>
                                    <option value="27">- - - - Blazers</option>
                                    <option value="28">- - - - Trench Coats</option>
                                    <option value="15">- - Weddings &amp; Events</option>
                                    <option value="29">- - - - Wedding Dresses</option>
                                    <option value="30">- - - - Evening Dresses</option>
                                    <option value="31">- - - - Prom Dresses</option>
                                    <option value="32">- - - - Bridesmaid Dresses</option>
                                    <option value="33">- - - - Wedding Accessories</option>
                                    <option value="16">- - Bottoms</option>
                                    <option value="34">- - - - Skirts</option>
                                    <option value="35">- - - - Leggings</option>
                                    <option value="36">- - - - Pants &amp; Capris</option>
                                    <option value="37">- - - - Wide Leg Pants</option>
                                    <option value="38">- - - - Shorts</option>
                                    <option value="17">- - Tops &amp; Sets</option>
                                    <option value="39">- - - - Tank Tops</option>
                                    <option value="40">- - - - Suits &amp; Sets</option>
                                    <option value="41">- - - - Jumpsuits</option>
                                    <option value="42">- - - - Rompers</option>
                                    <option value="43">- - - - Sleep &amp; Lounge</option>
                                    <option value="18">- - Accessories</option>
                                    <option value="44">- - - - Eyewear &amp; Accessories</option>
                                    <option value="45">- - - - Hats &amp; Caps</option>
                                    <option value="46">- - - - Belts &amp; Cummerbunds</option>
                                    <option value="47">- - - - Scarves &amp; Wraps</option>
                                    <option value="48">- - - - Gloves &amp; Mittens</option>
                                    <option value="49">Computer</option>
                                    <option value="50">- - Bottoms</option>
                                    <option value="53">- - - - Skirts</option>
                                    <option value="54">- - - - Leggings</option>
                                    <option value="55">- - - - Jeans</option>
                                    <option value="56">- - - - Pants &amp; Capris</option>
                                    <option value="57">- - - - Shorts</option>
                                    <option value="51">- - Outerwear &amp; Jackets</option>
                                    <option value="58">- - - - Trench</option>
                                    <option value="59">- - - - Genuine Leather</option>
                                    <option value="60">- - - - Parkas</option>
                                    <option value="61">- - - - Down Jackets</option>
                                    <option value="62">- - - - Wool &amp; Blends</option>
                                    <option value="52">- - Underwear &amp; Loungewear</option>
                                    <option value="63">- - - - Boxers</option>
                                    <option value="64">- - - - Briefs</option>
                                    <option value="65">- - - - Long Johns</option>
                                    <option value="66">- - - - Men's Sleep &amp; Lounge</option>
                                    <option value="67">- - - - Pajama Sets</option>
                                    <option value="68">Smartphone</option>
                                    <option value="69">- - Accessories &amp; Parts</option>
                                    <option value="75">- - - - Cables &amp; Adapters</option>
                                    <option value="76">- - - - Batteries</option>
                                    <option value="77">- - - - Chargers</option>
                                    <option value="78">- - - - Bags &amp; Cases</option>
                                    <option value="79">- - - - Electronic Cigarettes</option>
                                    <option value="70">- - Audio &amp; Video</option>
                                    <option value="80">- - - - Televisions</option>
                                    <option value="81">- - - - TV Receivers</option>
                                    <option value="82">- - - - Projectors</option>
                                    <option value="83">- - - - Audio Amplifier Boards</option>
                                    <option value="84">- - - - TV Sticks</option>
                                    <option value="71">- - Camera &amp; Photo</option>
                                    <option value="85">- - - - Digital Cameras</option>
                                    <option value="86">- - - - Camcorders</option>
                                    <option value="87">- - - - Camera Drones</option>
                                    <option value="88">- - - - Action Cameras</option>
                                    <option value="89">- - - - Photo Studio Supplies</option>
                                    <option value="72">- - Portable Audio &amp; Video</option>
                                    <option value="90">- - - - Headphones</option>
                                    <option value="91">- - - - Speakers</option>
                                    <option value="92">- - - - MP3 Players</option>
                                    <option value="93">- - - - VR/AR Devices</option>
                                    <option value="94">- - - - Microphones</option>
                                    <option value="73">- - Smart Electronics</option>
                                    <option value="95">- - - - Wearable Devices</option>
                                    <option value="96">- - - - Smart Home Appliances</option>
                                    <option value="97">- - - - Smart Remote Controls</option>
                                    <option value="98">- - - - Smart Watches</option>
                                    <option value="99">- - - - Smart Wristbands</option>
                                    <option value="74">- - Video Games</option>
                                    <option value="100">- - - - Handheld Game Players</option>
                                    <option value="101">- - - - Game Controllers</option>
                                    <option value="102">- - - - Joysticks</option>
                                    <option value="103">- - - - Stickers</option>
                                    <option value="104">Game Consoles</option>
                                    <option value="105">Mp3 &amp; headphone</option>
                                    <option value="106">Tv &amp; Video</option>
                                    <option value="107">Watches</option>
                                    <option value="108">Washing Machine</option>
                                    <option value="109">Camera</option>
                                    <option value="110">Audio &amp; Theater</option>
                                    <option value="111">Accessories</option>
                                    <option value="112">Games &amp; Consoles</option>
                                </select>
                            </div>
                            <input type="text" placeholder="Enter your search key ... " />
                            <button><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Category End -->
    <div class="mobile-category-nav d-xl-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!--=======  category menu  =======-->
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                <li class="menu-item-has-children menu-item-has-children-1">
                                    <a href="#">Accessories & Parts<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-1">
                                        <li><a href="#">Cables & Adapters</a></li>
                                        <li><a href="#">Batteries</a></li>
                                        <li><a href="#">Chargers</a></li>
                                        <li><a href="#">Bags & Cases</a></li>
                                        <li><a href="#">Electronic Cigarettes</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-2">
                                    <a href="#">Camera & Photo<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-2">
                                        <li><a href="#">Digital Cameras</a></li>
                                        <li><a href="#">Camcorders</a></li>
                                        <li><a href="#">Camera Drones</a></li>
                                        <li><a href="#">Action Cameras</a></li>
                                        <li><a href="#">Photo Studio Supplies</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-3">
                                    <a href="#">Smart Electronics <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-3">
                                        <li><a href="#">Wearable Devices</a></li>
                                        <li><a href="#">Smart Home Appliances</a></li>
                                        <li><a href="#">Smart Remote Controls</a></li>
                                        <li><a href="#">Smart Watches</a></li>
                                        <li><a href="#">Smart Wristbands</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-4">
                                    <a href="#">Audio & Video <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-4">
                                        <li><a href="#">Televisions</a></li>
                                        <li><a href="#">TV Receivers</a></li>
                                        <li><a href="#">Projectors</a></li>
                                        <li><a href="#">Audio Amplifier Boards</a></li>
                                        <li><a href="#">TV Sticks</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-5">
                                    <a href="#">Portable Audio & Video <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-5">
                                        <li><a href="#">Headphones</a></li>
                                        <li><a href="#">Speakers</a></li>
                                        <li><a href="#">MP3 Players</a></li>
                                        <li><a href="#">VR/AR Devices</a></li>
                                        <li><a href="#">Microphones</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-6">
                                    <a href="#">Video Game <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-6">
                                        <li><a href="#">Handheld Game Players</a></li>
                                        <li><a href="#">Game Controllers</a></li>
                                        <li><a href="#">Joysticks</a></li>
                                        <li><a href="#">Stickers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Televisions</a></li>
                                <li><a href="#">Digital Cameras</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Wearable Devices</a></li>
                                <li><a href="#">Smart Watches</a></li>
                                <li><a href="#">Game Controllers</a></li>
                                <li><a href="#"> Smart Home Appliances</a></li>
                                <li class="hidden"><a href="#">Projectors</a></li>
                                <li>
                                    <a href="#" id="more-btn"><i class="ion-ios-plus-empty" aria-hidden="true"></i> More Categories</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of category menu =======-->
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
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
                        <a href="single-product.html" class="image"><img src="http://127.0.0.1:8000/assets/images/product-image/7.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="http://127.0.0.1:8000/assets/images/product-image/9.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="http://127.0.0.1:8000/assets/images/product-image/8.jpg" alt="Cart product Image"></a>
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
                        <a href="single-product.html" class="image"><img src="http://127.0.0.1:8000/assets/images/product-image/1.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="http://127.0.0.1:8000/assets/images/product-image/2.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="http://127.0.0.1:8000/assets/images/product-image/3.jpg" alt="Cart product Image"></a>
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

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="head">
                <span class="title">&nbsp;</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                            <li> <a href="index-3.html"><span class="menu-text">Home 3</span></a></li>
                            <li><a href="index-4.html"><span class="menu-text">Home 4</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Grid</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop Grid 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop Grid 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Shop List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Shop Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Shop Single</a></li>
                                    <li><a href="single-product-variable.html">Shop Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                    <li><a href="single-product-group.html">Shop Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Shop Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Shop Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Shop Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider.html">Shop Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Shop Gallery Left</a></li>
                                    <li><a href="single-product-gallery-right.html">Shop Gallery Right</a></li>
                                    <li><a href="single-product-sticky-left.html">Shop Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Shop Sticky Right</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Page</a></li>
                            <li><a href="cart.html">Cart Page</a></li>
                            <li><a href="checkout.html">Checkout Page</a></li>
                            <li><a href="compare.html">Compare Page</a></li>
                            <li><a href="login.html">Login & Register Page</a></li>
                            <li><a href="my-account.html">Account Page</a></li>
                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                            <li><a href="thank-you-page.html">Thank You Page</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="menu-text">Blog Grid</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="offcanvas-buttons mt-30px">
                <div class="header-tools d-flex">
                    <div class="cart-info d-flex align-self-center">
                        <a href="my-account.html" class="user"><i class="icon-user"></i></a>
                        <a href="wishlist.html" data-number="3"><i class="icon-heart"></i></a>
                        <a href="cart.html" data-number="3"><i class="icon-bag"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-social mt-30px">
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
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>
    <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="index.html">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Area End-->
            <!-- cart area start -->
            <div class="cart-main-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <form action="#">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Hình Ảnh</th>
                                                <th>Tên</th>
                                                <th>Đơn Giá</th>
                                                <th>Số Lượng</th>
                                                <th>Số Tiền</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($data_order as $key => $row)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a  href="#"><img class="img-responsive" src="{{ asset('uploads/product/' .$data_product[$key]->image_product )}}" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">{{ $data_product[$key]->title }}</a></td>
                                                <td class="product-price-cart"><span class="amount">{{ $data_product[$key]->price }}</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="{{ $row['quantity'] }}" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">{{ $row['quantity'] * $data_product[$key]->price }}</td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-shiping-update">
                                                <a href="#">Continue Shopping</a>
                                            </div>
                                            <div class="cart-clear">
                                                <button>Update Shopping Cart</button>
                                                <a href="#">Clear Shopping Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-lm-30px">
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
                                </div>
                                <div class="col-lg-4 col-md-12 mt-md-30px">
                                    <div class="grand-totall">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                        </div>
                                        <h5>Total products <span>$260.00</span></h5>
                                        <div class="total-shipping">
                                            <h5>Total shipping</h5>
                                            <ul>
                                                <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                                <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                            </ul>
                                        </div>
                                        <h4 class="grand-totall-title">Grand Total <span>$260.00</span></h4>
                                        <a href="#">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart area end -->
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">ABOUT US</h4>
                                    <p class="text-infor">We are a team of designers and developers that create high quality HTML template</p>
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
                                        <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form
                                            id="mc-embedded-subscribe-form"
                                            class="validate"
                                            novalidate=""
                                            target="_blank"
                                            name="mc-embedded-subscribe-form"
                                            method="post"
                                            action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                        >
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="" />
                                                <div class="mc-news" aria-hidden="true" style="position: absolute; left: -5000px;">
                                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                                </div>
                                                <div class="clear">
                                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Sign Up" />
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
                                
								<p class="copy-text"> © 2021 <strong>Rozer</strong> Made With <i class="fa fa-heart" style="color: red;" aria-hidden="true"></i> By <a class="company-name" href="https://hasthemes.com/">
                                <strong> HasThemes</strong></a>.</p>
                            </div>
                            <div class="col-md-6 text-end">
                                <img class="payment-img" src="http://127.0.0.1:8000/assets/images/icons/payment.png" alt="" />
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
        <!-- <script src="http://127.0.0.1:8000/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

            <!-- Plugins JS -->
         <!-- <script src="http://127.0.0.1:8000/assets/js/plugins/jquery-ui.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/plugins/swiper.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/plugins/countdown.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/plugins/scrollup.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/plugins/elevateZoom.js"></script> -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <script src="http://127.0.0.1:8000/assets/js/vendor/vendor.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/plugins/plugins.min.js"></script>

        <!-- Main Activation JS -->
        <script src="http://127.0.0.1:8000/assets/js/main.js"></script>
    </body>

<!-- Mirrored from template.hasthemes.com/rozer/rozer/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:28:10 GMT -->
</html>

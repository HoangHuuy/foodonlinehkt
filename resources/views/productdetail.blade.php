<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/rozer/rozer/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:27:47 GMT -->

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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
        rel="stylesheet" />

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
                            <a href="/"><img class="img-responsive"
                                    src="http://127.0.0.1:8000/assets/images/logo/logo.png" alt="logo.jpg" /></a>
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
                                    <input type="text" placeholder="Enter your search key ... " />
                                    <button><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                            <!--Cart info Start -->
                            <div class="header-tools d-flex">
                                <div class="cart-info d-flex align-self-center">
                                    <a href="#offcanvas-wishlist" class="heart offcanvas-toggle" data-number="3"><i
                                            class="icon-heart"></i></a>
<<<<<<< Updated upstream
                                    <a href="/cart" data-number="4"><i class="icon-bag"></i></a>
=======
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
>>>>>>> Stashed changes
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
                                <li><a href="#">Danh sách món ưa thích</a></li>
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
                        <a href="single-product.html" class="image"><img
                                src="http://127.0.0.1:8000/assets/images/product-image/7.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img
                                src="http://127.0.0.1:8000/assets/images/product-image/9.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img
                                src="http://127.0.0.1:8000/assets/images/product-image/8.jpg"
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
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
<<<<<<< Updated upstream
        <div class="inner">
=======
        <div class="inner" id="change-item-cart">
            @if(Session::has('cart') != null)
>>>>>>> Stashed changes
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img
                                src="http://127.0.0.1:8000/assets/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img
                                src="http://127.0.0.1:8000/assets/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img
                                src="http://127.0.0.1:8000/assets/images/product-image/3.jpg"
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
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a href="/">Home</a></li>
                            <li>Single Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- Shop details Area start -->
    <section class="product-details-area mtb-60px">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-img product-details-tab">
                        <img class="img-responsive" src="{{ asset('uploads/product/' . $product[0]->image_product )}}"
                            alt="{{$product[0]->title}}" />
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h2>{{$product[0]->title}}</h2>
                        {{-- <p class="reference">Reference:<span> demo_17</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                </div> --}}
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">&#8363;{{$product[0]->price}}</li>
                            </ul>
                        </div>
<<<<<<< Updated upstream
=======

                        @if(isset($seller) && $seller != $seller->isEmpty() )
>>>>>>> Stashed changes
                        <div class="pro-details-list">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et
                                dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <ul>
                                <li>- 0.5 mm Dail</li>
                                <li>- Inspired vector icons</li>
                                <li>- Very modern style</li>
                            </ul>
                        </div>

                        {{-- bat dau form tao don hang --}}
                            <input type="hidden" name="user_username" value="{{ Auth::user()->username }}" />
                            <input type="hidden" name="id_product" value="{{ $product[0]->id }}">
                            <div class="pro-details-quality mt-0px">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="quantity" value="1" />
                                </div>

                                <div class="pro-details-cart btn-hover">
                                    <a href="{{ route('addToCart', ['id' => $product[0]->id])}}">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        {{-- ket thuc form tao don hang --}}

                        <div class="pro-details-wish-com">
                            <div class="pro-details-wishlist">
                                <a href="#"><i class="icon-heart"></i>Yêu thích</a>
                            </div>
                        </div>
                        <div class="pro-details-social-info">
                            <span>Chia sẻ với bạn bè của bạn</span>
                            <div class="social-info">
                                <ul>
                                    <li>
                                        <a title="Facebook" href="#"><i class="ion-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="Twitter" href="#"><i class="ion-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="Google+" href="#"><i class="ion-social-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div >
                       <form action="" id = "FormFB" method = "post">
                        @csrf
                            <input type="hidden" name = "id_product" value="{{$product[0]->id}}">
                            <input type="hidden" name = "id_user" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                            <input type="hidden" name = "feba" id = "feba" value = "">
                        <input type = "button"class="btn btn-danger" onclick="FeedBack()" value = "Báo cáo sản phẩm">
                            <script>
                                function FeedBack() {
                                    document.getElementById('feba').value = prompt('Hãy nhập vấn đề của bạn');
                                    alert("Phản hồi của bạn đã được gửi");
                                    $("#FormFB").submit();
                                }

                            </script>
                       </form>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Shop details Area End -->
    <!-- product details description area start -->
    <div class="description-review-area mb-60px">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a class="active" data-bs-toggle="tab" href="#des-details2">Cửa hàng</a>
                    <a data-bs-toggle="tab" href="#des-details3">Bình luận và đánh giá</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane active">
                        <div class="product-anotherinfo-wrapper">
                            <ul>
                                <li><span>Tên</span> Shop ăn vặt</li>
                                <li><span>Địa chỉ</span> 121 Chiến Thắng Văn Quán Hà Đông</li>
                                <li><span>Trạng thái</span> <i class="fas fa-circle" style="color:#00ff00;"></i> đang mở
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane">
                        <div class="product-description-wrapper">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            </p>
                            <p>
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in
                                reprehend in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt
                            </p>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="review-wrapper">
<<<<<<< Updated upstream
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="http://127.0.0.1:8000/assets/images/review-image/1.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                    cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper
                                                    euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review child-review">
=======
                                    @if(isset($comment))
                                    @foreach($comment as $item)
                                    <div class="single-review">
>>>>>>> Stashed changes
                                        <div class="review-img">
                                            <img src="http://127.0.0.1:8000/assets/images/review-image/2.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                    cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper
                                                    euismod vehicula.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">
                                    <h3>Add a Review</h3>
                                    <div class="ratting-form">
                                        <form action="#">
                                            <div class="star-box">
                                                <span>Your rating:</span>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="rating-form-style mb-10">
                                                        <input placeholder="Name" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style mb-10">
                                                        <input placeholder="Email" type="email" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="Your Review" placeholder="Message"></textarea>
                                                        <input type="submit" value="Submit" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end -->
    <!-- Feature Area start -->
    <div class="feature-area single-product-responsive mt-60px mb-30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="section-heading">You Might Also Like</h2>
                    </div>
                </div>
            </div>
            <div class="feature-slider-two slider-nav-style-1">
                <div class="feature-slider-wrapper swiper-wrapper">
                    <!-- Single Item -->
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/6.jpg"
                                        alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/7.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/7.jpg"
                                        alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/8.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/9.jpg"
                                        alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/10.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/12.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/13.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/14.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/15.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/16.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/17.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/18.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/19.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/20.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/21.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/22.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/23.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/24.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/25.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/26.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/27.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/28.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/29.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/6.jpg"
                                        alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/7.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/8.jpg"
                                        alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/9.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/10.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/11.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/12.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/13.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/14.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/15.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->
    <!-- Feature Area start -->
    <div class="feature-area single-product-responsive  mb-30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="section-heading">16 Other Products In The Same Category:</h2>
                    </div>
                </div>
            </div>
            <div class="feature-slider-two slider-nav-style-1">
                <div class="feature-slider-wrapper swiper-wrapper">
                    <!-- Single Item -->
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/6.jpg"
                                        alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/7.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/7.jpg"
                                        alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/8.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/9.jpg"
                                        alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/10.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/12.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/13.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/14.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/15.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/16.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/17.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/18.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/19.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/20.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/21.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/22.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/23.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/24.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/25.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/26.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/27.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/28.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/29.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/6.jpg"
                                        alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/7.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="http://127.0.0.1:8000/assets/images/product-image/8.jpg"
                                        alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/9.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/10.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/11.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/12.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/13.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="feature-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/14.jpg" alt="" />
                                    <img class="second-img"
                                        src="http://127.0.0.1:8000/assets/images/product-image/15.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a>
                                </h2>
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
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->
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
                            <img class="payment-img" src="http://127.0.0.1:8000/assets/images/icons/payment.png"
                                alt="" />
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
                                        <img class="img-responsive m-auto"
                                            src="http://127.0.0.1:8000/assets/images/product-image/11.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="http://127.0.0.1:8000/assets/images/product-image/12.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="http://127.0.0.1:8000/assets/images/product-image/13.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="http://127.0.0.1:8000/assets/images/product-image/14.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="http://127.0.0.1:8000/assets/images/product-image/11.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="http://127.0.0.1:8000/assets/images/product-image/12.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="http://127.0.0.1:8000/assets/images/product-image/13.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="http://127.0.0.1:8000/assets/images/product-image/14.jpg" alt="">
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
    <script src="https://kit.fontawesome.com/6ea5a547fb.js" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from template.hasthemes.com/rozer/rozer/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:28:08 GMT -->

</html>
               

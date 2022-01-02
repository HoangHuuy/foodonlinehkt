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

    <style>
        .minicart-product-list li .content .remove {
            font-size: 30px;
        }

        .header-menu .header-menu-vertical .menu-content {
            min-width: 170px;
        }

        .description-review-bottom {
            padding-left: 200px;
            padding-right: 200px;
        }

        .single-review {
            width: 100%;
        }

        .single-review .review-content {
            width: 100% !important;
        }

    </style>

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
                                    <input type="text" placeholder="Nhập sản phẩm bạn cần tìm ... " />
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
                                    @else
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
    <!-- Breadcrumb Area Start -->
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
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">&#8363;{{$product[0]->price}}</li>
                            </ul>
                        </div>
                        @if(isset($seller))
                        <div class="pro-details-list">
                            <ul>
                                <li style="color: black;font-size: 15px;"><span style="font-weight: bold;">- Tên
                                        Shop:</span> {{$seller[0]->shopName}}</li>
                                <li style="color: black;font-size: 15px;"><span style="font-weight: bold;">- Số Điện
                                        Thoại:</span> {{$seller[0]->phoneNumber}}</li>
                                <li style="color: black;font-size: 15px;"><span style="font-weight: bold;">- Địa
                                        Chỉ:</span> {{$seller[0]->address}}</li>
                            </ul>
                        </div>
                        @endif

                        {{-- bat dau form tao don hang --}}
                        @if(!isset(Auth::user()->username))

                        <div class="pro-details-quality mt-0px">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="quantity" value="1" />
                            </div>

                            <div class="pro-details-cart btn-hover">
                                <a href="/login">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                        
                        @elseif(isset(Auth::user()->username))
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
                        @endif
                        {{-- ket thuc form tao don hang --}}

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
                        <div>
                            @if(isset(Auth::user()->id))
                            <form action="" id = "FormFB" method = "post">
                                @csrf
                                    <input type="hidden" name = "id_product" value="{{$product[0]->id}}">
                                    <input type="hidden" name = "id_user" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                    <input type="hidden" name = "report" id = "report">
                                    <input type = "button" class="btn btn-danger" onclick="FeedBack()" value = "Báo cáo sản phẩm">
                                    <script>
                                        function FeedBack() {
                                            document.getElementById("report").value = "";
                                            var report = prompt('Hãy nhập vấn đề của bạn');
                                            document.getElementById("report").value = report ;
                                            if(report.length == 0 )
                                            {
                                                alert("Bạn chưa nhập gì");
                                                return false;
                                            }
                                            else if(report == null){
                                                return false;
                                            }
                                            alert("Phản hồi của bạn đã được gửi");
                                            $("#FormFB").submit();
                                        }
        
                                    </script>
                               </form>
        
                            @endif
                        </div>
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
                    <a class="active" data-bs-toggle="tab" href="#des-details3">Bình luận</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details3" class="tab-pane active">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="review-wrapper">
                                    {{-- <div class="single-review">
                                        <div class="review-img">
                                            <img src="http://127.0.0.1:8000/assets/images/review-image/1.png" alt="" />
                                        </div>

                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
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
                                    </div> --}}
                                    @if(isset($comment))
                                    @foreach($comment as $item)
                                    <div class="single-review">

                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>{{isset(\App\User::where('id', $item['id_user'])->get()[0]->fullname) ? \App\User::where('id', $item['id_user'])->get()[0]->fullname : "user".$item['id_user']}}
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    {{$item['comment']}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <form action="{{route('product.storeComment', ['id' => $product[0]->id])}}" method="POST">
                                @csrf
                                <div class="checkout-area mt-60px mb-40px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="billing-info-wrap">
                                                    <div class="additional-info-wrap">
                                                        <div class="additional-info">
                                                            <textarea placeholder="Nhập bình luận... "
                                                                name="comment"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Bình luận</button>
                                                    </div>
                                                </div>
                                            </div>
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
    <!-- product details description area end -->
    <!-- Feature Area start -->
    <!-- Feature Area End -->
    <!-- Feature Area start -->
    <!-- Feature Area End -->
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

        function RenderCart(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            $("#total-quanty-show").text($("#total-quanty-cart").val());
        }

    </script>
</body>

<!-- Mirrored from template.hasthemes.com/rozer/rozer/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:28:08 GMT -->

</html>

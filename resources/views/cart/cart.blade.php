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
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/simple-line-icons.css"> -->
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/font-awesome.min.css">

            <!-- Plugins CSS (All Plugins Files) -->
         <!-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/animate.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/swiper.css">  -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/vendor/vendor.min.css" />
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/plugins/plugins.min.css" />
        <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.min.css">

        <!-- CSS Alert-->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />


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

    <div class="offcanvas-overlay"></div>
    <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="/"><i class="fas fa-home"></i> Trang Chủ</a></li>
                                <li>Giỏ hàng</li>
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12" id="list-cart">
                            {{-- hien thi gio hang              --}}
                            @if(Session::has('cart'))   
                            <form action="">
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
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-shiping-update">
                                                <a href="#">Tiếp tục mua hàng</a>
                                            </div>
                                            <div class="cart-clear">
                                                <button class="update-all">Cập nhập giỏ hàng</button>
                                                <a class="delete-all" href="#">Xóa giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
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
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gary-cart">Tổng tiền</h4>
                                        </div>
                                        <h5>Tổng sản phẩm <span>{{ $totalPrice }} &#8363;</span></h5>
                                        <div class="total-shipping">
                                            <h5>Total shipping</h5>
                                            <ul>
                                                <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                                <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                            </ul>
                                        </div>
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

        <!-- JavaScript Alert-->
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

        <!-- Main Activation JS -->
        <script src="http://127.0.0.1:8000/assets/js/main.js"></script>
        <script>
            function DeleteSingleItemCart(id){
                console.log(id);
                $.ajax({
                    url: '/delete-single-item-cart/' + id,
                    type: 'GET',
                }).done(function (response) {
                    RenderListCart(response);
                    alertify.warning('Xóa thành công');
                });
            };

            function SaveItemCart(id){
                $.ajax({
                    url: '/save-item-cart/'+id+'/'+$("#quanty-item-"+id).val(),
                    type: 'GET',
                }).done(function (response) {
                    RenderListCart(response);
                    alertify.success('Sửa thành công');
                });
            }

            function RenderListCart(response){
                $("#list-cart").empty();
                $("#list-cart").html(response);

                var CartPlusMinus = $(".cart-plus-minus");
                CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
                CartPlusMinus.append('<div class="inc qtybutton">+</div>');
                $(".qtybutton").on("click", function () {
                    var $button = $(this);
                    var oldValue = $button.parent().find("input").val();
                    if ($button.text() === "+") {
                        var newVal = parseFloat(oldValue) + 1;
                    } else {
                        if (oldValue > 1) {
                            var newVal = parseFloat(oldValue) - 1;
                        } else {
                            newVal = 1;
                        }
                    }
                    $button.parent().find("input").val(newVal);
                });
            }
            
        </script>
    </body>

<!-- Mirrored from template.hasthemes.com/rozer/rozer/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 11:28:10 GMT -->
</html>

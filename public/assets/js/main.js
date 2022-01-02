$(function () {
    "use strict";
    var $window = $(window),
        $body = $("body");
    $('.dropdown').on('show.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });
    $('.dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
    $(window).scroll(function () {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 250) {
            $(".sticky-nav").addClass("menu_fixed animated fadeInDown");
        } else {
            $(".sticky-nav").removeClass("menu_fixed animated fadeInDown");
        }
    });
    $(".header-menu-vertical .menu-title").on("click", function (event) {
        $(".header-menu-vertical .menu-content").slideToggle(500);
    });
    $(".menu-content").each(function () {
        var $ul = $(this),
            $lis = $ul.find(".menu-item:gt(7)"),
            isExpanded = $ul.hasClass("expanded");
        $lis[isExpanded ? "show" : "hide"]();
        if ($lis.length > 0) {
            $ul.append($('<li class="expand">' +
                (isExpanded ? '<a href="javascript:;"><span><i class="ion-android-remove"></i>Thu Gọn</span></a>' : '<a href="javascript:;"><span><i class="ion-android-add"></i>More Categories</span></a>') +
                "</li>").click(function (event) {
                var isExpanded = $ul.hasClass("expanded");
                event.preventDefault();
                $(this).html(isExpanded ? '<a href="javascript:;"><span><i class="ion-android-add"></i>Xem Thêm</span></a>' : '<a href="javascript:;"><span><i class="ion-android-remove"></i>Close Categories</span></a>');
                $ul.toggleClass("expanded");
                $lis.toggle(300);
            }));
        }
    });
    (function () {
        var $offCanvasToggle = $(".offcanvas-toggle"),
            $offCanvas = $(".offcanvas"),
            $offCanvasOverlay = $(".offcanvas-overlay"),
            $mobileMenuToggle = $(".mobile-menu-toggle");
        $offCanvasToggle.on("click", function (e) {
            e.preventDefault();
            var $this = $(this),
                $target = $this.attr("href");
            $body.addClass("offcanvas-open");
            $($target).addClass("offcanvas-open");
            $offCanvasOverlay.fadeIn();
            if ($this.parent().hasClass("mobile-menu-toggle")) {
                $this.addClass("close");
            }
        });
        $(".offcanvas-close, .offcanvas-overlay").on("click", function (e) {
            e.preventDefault();
            $body.removeClass("offcanvas-open");
            $offCanvas.removeClass("offcanvas-open");
            $offCanvasOverlay.fadeOut();
            $mobileMenuToggle.find("a").removeClass("close");
        });
    })();

    function mobileOffCanvasMenu() {
        var $offCanvasNav = $(".offcanvas-menu, .overlay-menu"),
            $offCanvasNavSubMenu = $offCanvasNav.find(".sub-menu");
        $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"></span>');
        $offCanvasNav.on("click", "li a, .menu-expand", function (e) {
            var $this = $(this);
            if ($this.attr("href") === "#" || $this.hasClass("menu-expand")) {
                e.preventDefault();
                if ($this.siblings("ul:visible").length) {
                    $this.parent("li").removeClass("active");
                    $this.siblings("ul").slideUp();
                    $this.parent("li").find("li").removeClass("active");
                    $this.parent("li").find("ul:visible").slideUp();
                } else {
                    $this.parent("li").addClass("active");
                    $this.closest("li").siblings("li").removeClass("active").find("li").removeClass("active");
                    $this.closest("li").siblings("li").find("ul:visible").slideUp();
                    $this.siblings("ul").slideDown();
                }
            }
        });
    }
    mobileOffCanvasMenu();
    var swiper = new Swiper(".hero-slider", {
        spaceBetween: 30,
        speed: 750,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var swiper = new Swiper(".category-slider", {
        slidesPerView: 5,
        spaceBetween: 30,
        speed: 750,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            478: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            },
        },
    });
    var swiper = new Swiper(".feature-slider", {
        slidesPerView: 5,
        spaceBetween: 0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            478: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            },
        },
    });
    var swiper = new Swiper(".feature-slider-two", {
        slidesPerView: 6,
        spaceBetween: 0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            478: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            },
            1300: {
                slidesPerView: 6,
            },
        },
    });
    var swiper = new Swiper(".deal-slider", {
        slidesPerView: 2,
        spaceBetween: 30,
        speed: 750,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 1,
            },
            1200: {
                slidesPerView: 2,
            },
        },
    });
    var swiper = new Swiper(".feature-slider-2", {
        slidesPerView: 4,
        spaceBetween: 0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            478: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 4,
            },
        },
    });
    var swiper = new Swiper(".brand-slider", {
        slidesPerView: 5,
        spaceBetween: 30,
        speed: 750,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            478: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            },
        },
    });
    var swiper = new Swiper(".recent-slider", {
        slidesPerView: 4,
        spaceBetween: 30,
        speed: 750,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            478: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            },
        },
    });
    var swiper = new Swiper(".recent-slider-two", {
        slidesPerView: 3,
        spaceBetween: 0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            478: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            992: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            },
        },
    });
    var swiper = new Swiper(".single-product-slider", {
        slidesPerView: 4,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            478: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 4,
            },
        },
    });
    $(".category-toggle").click(function () {
        $(".category-menu").slideToggle("slow");
    });
    $(".menu-item-has-children-1").click(function () {
        $(".category-mega-menu-1").slideToggle("slow");
    });
    $(".menu-item-has-children-2").click(function () {
        $(".category-mega-menu-2").slideToggle("slow");
    });
    $(".menu-item-has-children-3").click(function () {
        $(".category-mega-menu-3").slideToggle("slow");
    });
    $(".menu-item-has-children-4").click(function () {
        $(".category-mega-menu-4").slideToggle("slow");
    });
    $(".menu-item-has-children-5").click(function () {
        $(".category-mega-menu-5").slideToggle("slow");
    });
    $(".menu-item-has-children-6").click(function () {
        $(".category-mega-menu-6").slideToggle("slow");
    });
    $(".category-menu li.hidden").hide();
    $("#more-btn").on("click", function (e) {
        e.preventDefault();
        $(".category-menu li.hidden").toggle(500);
        var htmlAfter = '<i class="ion-ios-minus-empty" aria-hidden="true"></i> Less Categories';
        var htmlBefore = '<i class="ion-ios-plus-empty" aria-hidden="true"></i> More Categories';
        if ($(this).html() == htmlBefore) {
            $(this).html(htmlAfter);
        } else {
            $(this).html(htmlBefore);
        }
    });
    $("[data-countdown]").each(function () {
        var $this = $(this),
            finalDate = $(this).data("countdown");
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<span class="cdown day">%-D <p>Days</p></span> <span class="cdown hour">%-H <p>Hours</p></span> <span class="cdown minutes">%M <p>Mins</p></span> <span class="cdown second">%S <p>Sec</p></span>'));
        });
    });
    $.scrollUp({
        scrollText: '<i class="ion-android-arrow-up"></i>',
        easingType: "linear",
        scrollSpeed: 900,
        animation: "fade",
    });
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
    $(".zoompro").elevateZoom({
        gallery: "gallery",
        galleryActiveClass: "active",
        zoomWindowWidth: 300,
        zoomWindowHeight: 100,
        scrollZoom: false,
        zoomType: "inner",
        cursor: "crosshair",
        easing: true,
        responsive: true,
    });
    var swiper = new Swiper(".product-dec-slider-2", {
        slidesPerView: 4,
        spaceBetween: 10,
        breakpoints: {
            0: {
                slidesPerView: 4,
            },
            478: {
                slidesPerView: 4,
            },
            576: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 4,
            },
            992: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 4,
            },
        },
    });
    var swiper = new Swiper(".product-dec-slider-3", {
        slidesPerView: 4,
        spaceBetween: 10,
        direction: 'vertical',
        breakpoints: {
            0: {
                slidesPerView: 4,
            },
            478: {
                slidesPerView: 4,
            },
            576: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 4,
            },
            992: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 4,
            },
        },
    });
    var swiper = new Swiper(".blog-gallery", {
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    $(".checkout-toggle2").on("click", function () {
        $(".open-toggle2").slideToggle(1000);
    });
    $(".checkout-toggle").on("click", function () {
        $(".open-toggle").slideToggle(1000);
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 0,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        }
    });
});

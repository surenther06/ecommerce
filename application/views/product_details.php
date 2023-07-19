<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/zaya/zaya/product-single.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 18 Jul 2023 18:00:52 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ZAYA Multipurpose Fashion HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.png" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet" />

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/lastudioicon.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dlicon.css" />

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select2.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" />
</head>


<body>
    <!-- Header Start -->
    <header class="header bg-white header-height">
        <!-- Header Top Start -->
        <div class="header-2__top">
            <div class="container-fluid custom-container">
                <div class="header-2__top--wrapper">
                    <div class="header-2__top--left d-none d-md-block">
                        <ul class="header-2__top--items">
                            <li>
                                <a href="mailto:info.expmale@mail.com">
                                    <i class="lastudioicon-mail-2"></i>
                                    <span>surenthiran0604.com</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+(867)195-6696">
                                    <i class="lastudioicon-phone-call"></i>
                                    <span>(750)260-2076</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="lastudioicon-pin-3-1"></i>
                                    <span>Bengaluru</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-2__top--right">
                        <ul class="header-2__top--items">
                            <li>
                                <a href="login-register.html">
                                    <i class="lastudioicon-single-01-1"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="term-of-use.html">
                                    <i class="lastudioicon-b-meeting-2"></i>
                                    <span>Help Center</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Main Start -->
        <div class="header__main header-shadow d-flex align-items-center">
            <div class="container-fluid custom-container">
                <div class="row align-items-center position-relative">
                    <div class="col-md-4 col-3 d-xl-none">
                        <button class="header__main--toggle header__main--toggle-dark" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                            <i class="lastudioicon-menu-8-1"></i>
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <div class="header__main--logo">
                            <a class="justify-content-center justify-content-xl-start" href="index.html"><img src="<?= base_url(); ?>assets/images/logo.svg" alt="Logo" /></a>
                        </div>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="header__main--menu">
                            <nav class="navbar-menu">
                                <!-- Menu Item List Start -->
                                <ul class="menu-items-list menu-items-list--dark d-flex justify-content-center">

                                </ul>
                                <!-- Menu Item List End -->
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-3">
                        <div class="header__main--meta header__main--dark d-flex justify-content-end align-items-center">
                            <!-- Meta Item List Start -->
                            <ul class="meta-items-list meta-items-list--dark d-flex justify-content-end align-items-center">
                                <li class="search d-none d-lg-block">
                                    <form action="#">
                                        <div class="meta-search meta-search--dark">
                                            <input type="text" placeholder="Search category…" />
                                            <button>
                                                <i class="lastudioicon-zoom-1"></i>
                                            </button>
                                        </div>
                                    </form>
                                </li>
                                <li class="wishlist">
                                    <a href="wishlist.html">
                                        <i class="lastudioicon lastudioicon-heart-1"></i>
                                        <span class="badge">03</span>
                                    </a>
                                </li>
                                <li class="cart">
                                    <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">
                                        <i class="lastudioicon-shopping-cart-1"></i><span class="badge">03</span>
                                    </button>
                                </li>
                            </ul>
                            <button class="toggle-icon d-none d-xl-block" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
                                <span class="bar-icon"><i class="lastudioicon-menu-8-1"></i></span>
                            </button>
                            <!-- Meta Item List Start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Main End -->
    </header>

    <!-- Header End -->

    <!-- Cart Sidebar Start -->
    <!-- Cart Offcanvas Start -->
    <div class="offcanvas offcanvas-end cart-offcanvas" id="cartSidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">My Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas">
                <i class="lastudioicon-e-remove"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <ul class="offcanvas-cart-list">
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#"><img src="<?= base_url(); ?>assets/images/products/product-13.jpg" alt="product" /></a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Lace Body </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">1 × $69.99</span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#"><i class="lastudioicon-e-remove"></i></a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#"><img src="<?= base_url(); ?>assets/images/products/product-14.jpg" alt="product" /></a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Herringbone double-breasted </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">1 × $89.99</span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#"><i class="lastudioicon-e-remove"></i></a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#"><img src="<?= base_url(); ?>assets/images/products/product-17.jpg" alt="product" /></a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Floral jacquard mini dress </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">1 × $35.99</span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#"><i class="lastudioicon-e-remove"></i></a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
            </ul>
        </div>
        <div class="offcanvas-footer">
            <!-- Free Shipping Goal Start-->
            <div class="free-shipping-goal">
                <div class="free-shipping-goal__label text-center">
                    Buy $3.03 more to enjoy
                    <strong>FREE Shipping</strong>
                </div>
                <div class="free-shipping-goal__loading-bar">
                    <div class="load-percent" style="width: 98.49%"></div>
                </div>
            </div>
            <!-- Free Shipping Goal End-->

            <!-- Cart Meta Start-->
            <ul class="cart-meta">
                <li>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <path d="m9.5 2.5 3 3M1.5 10.5l3 3M11.5.5l3 3-10 10-4 1 1-4Z"></path>
                            </g>
                        </svg>
                        <span>Note</span></a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.313" height="16" viewBox="0 0 15.313 16">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m.656 3.5 7 3 7-3M7.656 15.5v-9"></path>
                                <path d="m.656 12.5 7 3 7-3v-9l-7-3-7 3Z"></path>
                            </g>
                        </svg>
                        <span>Shipping</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <path d="M5.5 4.5h5M5.5 9.5h5M13.5 7.5a2 2 0 0 1 2-2v-4a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1V5a2 2 0 0 1 0 4v3.5a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-3a2 2 0 0 1-2-2Z"></path>
                            </g>
                        </svg>
                        <span>Coupon</span>
                    </a>
                </li>
            </ul>
            <!-- Cart Meta End-->

            <!-- Cart Totals Table Start-->
            <div class="cart-totals-table">
                <table class="table">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td>
                                <span>$195.97</span>
                            </td>
                        </tr>

                        <tr class="cart-shipping-totals">
                            <th>Shipping</th>
                            <td>
                                <ul class="shipping-methods">
                                    <li class="single-form">
                                        <input type="radio" name="shipping" id="flat-rate" />
                                        <label for="flat-rate" class="single-form__label radio-label">
                                            <span></span>
                                            Flat rate:
                                            <strong class="price">$20.00</strong>
                                        </label>
                                    </li>
                                    <li class="single-form">
                                        <input type="radio" name="shipping" id="local-pickup" />
                                        <label for="local-pickup" class="single-form__label radio-label">
                                            <span></span>
                                            Local pickup</label>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total">
                                <strong><span>$215.97</span></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Cart Totals Table End-->

            <!-- Cart Buttons End-->
            <div class="cart-buttons">
                <a href="#" class="cart-buttons__btn-1 btn">Checkout</a>
                <a href="#" class="cart-buttons__btn-2 btn">View Cart</a>
            </div>
            <!-- Cart Buttons End-->
        </div>
    </div>
    <!-- Cart Offcanvas End -->

    <!-- Cart Sidebar End -->

    <!-- Search Start -->
    <div class="search-modal modal fade" id="SearchModal">
        <!-- Search Close Start -->
        <button class="search-modal__close" data-bs-dismiss="modal">
            <i class="lastudioicon-e-remove"></i>
        </button>
        <!-- Search Close End  -->

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Search Form Start  -->
                <div class="search-modal__form">
                    <form action="#">
                        <input type="text" placeholder="Search categorys…" />
                        <button class="">
                            <i class="lastudioicon-zoom-1"></i>
                        </button>
                    </form>
                </div>
                <!-- Search Form End  -->
            </div>
        </div>
    </div>

    <!-- Search End -->

    <!-- Offcanvas Menu Start -->
    <div class="offcanvas offcanvas-end offcanvas-sidebar" tabindex="-1" id="offcanvasSidebar">
        <button type="button" class="offcanvas-sidebar__close" data-bs-dismiss="offcanvas">
            <i class="lastudioicon-e-remove"></i>
        </button>
        <div class="offcanvas-body">
            <!-- Off Canvas Sidebar Menu Start -->
            <div class="offcanvas-sidebar__menu">
                <ul class="offcanvas-menu-list">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="blog.html">News & Events</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Menu End -->

            <!-- Off Canvas Sidebar Banner Start -->
            <div class="offcanvas-sidebar__banner" style="
                background-image: url(assets/images/shop-sidebar-banner.jpg);
            ">
                <h3 class="banner-title">NEW NOW</h3>
                <h4 class="banner-sub-title">WARM WOOL PREMIUM COAT</h4>
                <a href="#" class="banner-btn">Discover</a>
            </div>
            <!-- Off Canvas Sidebar Banner End -->

            <!-- Off Canvas Sidebar Info Start -->
            <div class="offcanvas-sidebar__info">
                <ul class="offcanvas-info-list">
                    <li><a href="tel:+61225315600">(+612) 2531 5600</a></li>
                    <li><a href="mailto:info@exmple.com">info@exmple.com</a></li>
                    <li>
                        <span>PO Box 1622 Colins Street West Victoria 8077
                            Australia</span>
                    </li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Info End -->

            <!-- Off Canvas Sidebar Social Start -->
            <div class="offcanvas-sidebar__social">
                <ul class="offcanvas-social">
                    <li>
                        <a href="#"><i class="lastudioicon-b-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lastudioicon-b-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lastudioicon-b-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Social End -->

            <!-- Off Canvas Sidebar Social End -->
            <div class="offcanvas-sidebar__copyright">
                <p>
                    &copy;
                    <script>
                        document.write(new Date().getFullYear() + " ")
                    </script>
                    <span> ZAYA </span> Made with by
                    <a href="https://hasthemes.com/">HasThemes</a>
                </p>
            </div>
            <!-- Off Canvas Sidebar Social End -->
        </div>
    </div>

    <!-- Offcanvas Menu End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
        <!-- offcanvas-header Start -->
        <div class="offcanvas-header">
            <button type="button" class="mobile-menu__close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="lastudioicon-e-remove"></i>
            </button>
        </div>
        <!-- offcanvas-header End -->

        <!-- offcanvas-body Start -->
        <div class="offcanvas-body">
            <nav class="navbar-mobile-menu">
                <ul class="mobile-menu-items">
                    <li>
                        <a href="#">Demos
                            <span class="menu-expand"><i class="lastudioicon-down-arrow"></i></span></a>
                        <ul class="mega-menu mega-menus-list">
                            <li><a href="index.html">01 Fashion Classic</a></li>
                            <li><a href="index-2.html">02 Fashion Classic</a></li>
                            <li><a href="index-3.html">03 Fashion Modern</a></li>
                            <li><a href="index-4.html">04 Fashion Trend</a></li>
                            <li><a href="index-5.html">05 Fashion Trend 02</a></li>
                            <li><a href="index-6.html">06 Fashion Modern 02</a></li>
                            <li><a href="index-7.html">07 Fashion Simple 01</a></li>
                            <li><a href="index-8.html">08 Fashion Simple 02</a></li>
                            <li><a href="#">09 Fashion Mega</a></li>
                            <li><a href="#">10 Cosmetic 01</a></li>
                            <li><a href="#">11 Cosmetic 02</a></li>
                            <li><a href="#">12 Candles 01</a></li>
                            <li><a href="#">13 Wines 01</a></li>
                            <li><a href="#">14 Baby Store</a></li>
                            <li><a href="#">15 Cake</a></li>
                            <li><a href="#">16 Burger Store</a></li>
                            <li><a href="#">17 Fashion Modern 03</a></li>
                            <li><a href="#">18 Fashion Big Size</a></li>
                            <li><a href="#">19 Furniture 01</a></li>
                            <li><a href="#">20 Furniture 02</a></li>
                            <li><a href="#">21 Furniture 03</a></li>
                            <li><a href="#">22 Plant 01</a></li>
                            <li><a href="#">23 Plant 02</a></li>
                            <li><a href="#">24 Organic 01</a></li>
                            <li><a href="#">25 Organic 02</a></li>
                            <li><a href="#">26 Watch 01</a></li>
                            <li><a href="#">27 Watch 02</a></li>
                            <li><a href="#">28 Watch 03</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages
                            <span class="menu-expand"><i class="lastudioicon-down-arrow"></i></span></a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="faqs.html">FAQ's</a></li>
                            <li><a href="term-of-use.html">term of use</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li>
                                <a href="login-register.html">Login & Register</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Shop
                            <span class="menu-expand"><i class="lastudioicon-down-arrow"></i></span></a>
                        <div class="mega-menu">
                            <div class="mega-menu-col">
                                <h5 class="mega-menu-title">Shop Layout</h5>
                                <ul class="">
                                    <li>
                                        <a href="shop-fullwidth.html">Shop Fullwidth</a>
                                    </li>
                                    <li>
                                        <a href="shop-sidebar.html">Shop Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop-masonry.html">Shop Masonry</a>
                                    </li>
                                    <li><a href="#">Shop Brands</a></li>
                                    <li><a href="#">Shop Carousel</a></li>
                                    <li><a href="#">Shop Carousel 02</a></li>
                                    <li><a href="#">Split Layout</a></li>
                                    <li><a href="#">Shop Collection</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="">
                                    <li><a href="#">Featured Banner</a></li>
                                    <li>
                                        <a href="shop-3-columns.html">Shop 03 Columns</a>
                                    </li>
                                    <li>
                                        <a href="shop-4-columns.html">Shop 04 Columns</a>
                                    </li>
                                    <li><a href="#">Shop 05 Columns</a></li>
                                    <h5 class="mega-menu-title">Hover Style</h5>
                                    <li><a href="#">Hover Style 01</a></li>
                                    <li><a href="#">Hover Style 02</a></li>
                                    <li><a href="#">Hover Style 03</a></li>
                                    <li><a href="#">Hover Style 04</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <h5 class="mega-menu-title">Shop Pages</h5>
                                <ul class="">
                                    <li>
                                        <a href="my-account.html">My Account</a>
                                    </li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li>
                                        <a href="order-tracking.html">Order Tracking</a>
                                    </li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li>
                                        <a href="empty-cart.html">Cart Empty</a>
                                    </li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="thank-you.html">Thank You</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <h5 class="mega-menu-title">Product Pages</h5>
                                <ul class="">
                                    <li>
                                        <a href="product-single.html">Product Simple</a>
                                    </li>
                                    <li>
                                        <a href="product-single-variable.html">Product Variable</a>
                                    </li>
                                    <li>
                                        <a href="product-single-carousel.html">Product Carousel</a>
                                    </li>
                                    <li>
                                        <a href="product-single-affiliate.html">Product Affiliate</a>
                                    </li>
                                    <li>
                                        <a href="product-single-countdown.html">Product CountDown</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Collections
                            <span class="menu-expand"><i class="lastudioicon-down-arrow"></i></span></a>
                        <div class="mega-menu">
                            <div class="mega-menu__banner">
                                <a href="#">
                                    <div class="mega-menu__banner--image">
                                        <img src="<?= base_url(); ?>assets/images/megamenu-fashion-01.jpg" alt="Fashion Banner" />
                                    </div>
                                    <div class="mega-menu__banner--caption">
                                        <h4 class="caption-title">New Arrival</h4>
                                        <p class="caption-desc">
                                            Non curabitur gravida
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="mega-menu__content">
                                <h4 class="mega-menu__content--title">
                                    Summer Collection 2023
                                </h4>
                                <div class="d-flex flex-wrap">
                                    <ul class="mega-menu__content--list">
                                        <li>
                                            <a href="#">Dresses and jumpsuits</a>
                                        </li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">T-shirts and tops</a></li>
                                        <li>
                                            <a href="#">Jackets and Suit Jackets</a>
                                        </li>
                                        <li>
                                            <a href="#">Cardigans and sweaters</a>
                                        </li>
                                        <li><a href="#">Sweatshirts</a></li>
                                        <li><a href="#">Coats</a></li>
                                    </ul>
                                    <ul class="mega-menu__content--list">
                                        <li><a href="#">Trousers</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Skirts</a></li>
                                        <li><a href="#">Shorts</a></li>
                                        <li>
                                            <a href="#">Bikinis and swimsuits</a>
                                        </li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li>
                                            <a href="#">Underwear and lingerie</a>
                                        </li>
                                        <li><a href="#">Pyjamas</a></li>
                                    </ul>
                                </div>
                                <div class="mt-auto">
                                    <ul class="mega-menu__info">
                                        <li><a href="#">info@exmple.com</a></li>
                                        <li><a href="#">(626)997-4298</a></li>
                                    </ul>
                                    <div class="mega-menu__social">
                                        <div class="mega-menu__social--lable">
                                            Connect with us
                                        </div>
                                        <ul class="mega-menu__social--social">
                                            <li>
                                                <a href="#"><i class="lastudioicon-b-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lastudioicon-b-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lastudioicon-b-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Blog
                            <span class="menu-expand"><i class="lastudioicon-down-arrow"></i></span></a>
                        <ul class="sub-menu">
                            <li><a href="#">Blog Right Sidebar</a></li>
                            <li><a href="#">Blog Left Sidebar</a></li>
                            <li><a href="#">Blog No Sidebar</a></li>
                            <li><a href="#">Grid 03 Columns</a></li>
                            <li><a href="#">Single Post</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- offcanvas-body end -->
    </div>

    <!-- Mobile Menu End -->

    <!-- Mobile Meta Start -->
    <div class="mobile-meta d-md-none">
        <ul class="mobile-meta-items">
            <li>
                <button data-bs-toggle="modal" data-bs-target="#SearchModal">
                    <i class="lastudioicon-zoom-1"></i>
                </button>
            </li>
            <li>
                <a href="wishlist.html">
                    <i class="lastudioicon-heart-1"></i>
                    <span class="badge">03</span>
                </a>
            </li>
            <li>
                <a href="compare.html">
                    <i class="lastudioicon-ic_compare_arrows_24px"> </i>
                    <span class="badge">03</span>
                </a>
            </li>
            <li>
                <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">
                    <i class="lastudioicon-shopping-cart-1"></i>
                    <span class="badge">03</span>
                </button>
            </li>
        </ul>
    </div>

    <!-- Mobile Meta End -->

    <main>
        <!-- Breadcrumbs Start -->
        <div class="single-breadcrumbs">
            <div class="container-fluid custom-container">
                <ul class="single-breadcrumbs-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Fashion </a></li>
                    <li><span>Product Simple</span></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Product Single Start -->
        <div class="product-single-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Product Single Wrapper Start -->
                <div class="product-single-wrapper">
                    <div class="product-single-col-1">
                        <!-- Product Single image Start -->
                        <div class="product-single-image">
                            <div class="product-single-slide navigation-arrows-style-2">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="<?= $item['image']; ?>" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next">
                                        <i class="lastudioicon-arrow-right"></i>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <i class="lastudioicon-arrow-left"></i>
                                    </div>
                                    <div class="product-single-zoom">
                                        <div class="zoom">
                                            <a class="product-glightbox" href="<?= base_url(); ?>assets/images/products/woman/product-03-a.jpg"></a>
                                            <a class="product-glightbox" href="<?= base_url(); ?>assets/images/products/woman/product-03-b.jpg"></a>
                                            <a class="product-glightbox" href="<?= base_url(); ?>assets/images/products/woman/product-03-c.jpg"></a>
                                            <a class="product-glightbox" href="<?= base_url(); ?>assets/images/products/woman/product-03-d.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Product Single image End -->
                    </div>

                    <div class="product-single-col-2">
                        <!-- Product Single content Start -->
                        <div class="product-single-content">
                            <h2 class="product-single-content__title">
                                <?= $item['title']; ?>
                            </h2>
                            <div class="product-single-content__price-stock">
                                <div class="product-single-content__price">
                                    <ins><?= $item['price']; ?></ins>
                                </div>
                                <div class="product-single-content__stock">
                                    <span class="stock-icon">
                                        <i class="dlicon ui-1_check-circle-08"></i>
                                    </span>
                                    <span class="stock-text">97 in stock</span>
                                </div>
                            </div>
                            <div class="product-single-content__short-description">
                                <p>
                                    <?= $item['description']; ?>
                                </p>
                            </div>
                            <div class="product-single-content__add-to-cart-wrapper">
                                <div class="product-single-content__quantity-add-to-cart">
                                    <div class="product-single-content__quantity product-quantity">
                                        <button type="button" class="decrease">
                                            <i class="lastudioicon-i-delete-2"></i>
                                        </button>
                                        <input class="quantity-input" type="text" value="1" />
                                        <button type="button" class="increase">
                                            <i class="lastudioicon-i-add-2"></i>
                                        </button>
                                    </div>
                                    <button class="product-single-content__add-to-cart btn">
                                        Add to cart
                                    </button>
                                </div>

                                <a href="#" class="product-add-compare">Add to Compare</a>
                                <a href="#" class="product-add-wishlist">Add to Wishlist</a>
                            </div>
                            <div class="product-single-content__meta">
                                <div class="product-single-content__meta--item">
                                    <div class="label">SKU:</div>
                                    <div class="content">REF. HT-5732</div>
                                </div>
                                <div class="product-single-content__meta--item">
                                    <div class="label">Categories:</div>
                                    <div class="content">
                                        <a href="#"><?= $item['category']; ?></a>
                                    </div>
                                </div>
                                <div class="product-single-content__meta--item">
                                    <div class="label">Rating:</div>
                                    <!-- <div class="content">
                                        <a href="#">Teen</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="product-single-content__social">
                                <div class="label">Share</div>
                                <ul class="socail-icon">
                                    <li>
                                        <a href="#"><i class="lastudioicon-b-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="lastudioicon-b-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="lastudioicon-b-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product Single content End -->
                    </div>
                </div>
                <!-- Product Single Wrapper End -->
            </div>
        </div>
        <!-- Product Single End -->

        <!-- Product Single Tabs Start -->
        <div class="product-single-tabs-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Product Single Tabs Start -->
                <div class="product-single-tabs">
                    <ul class="nav justify-content-center">
                        <li>
                            <button class="active" data-bs-toggle="pill" data-bs-target="#description" type="button">
                                Description
                            </button>
                        </li>
                        <li>
                            <button data-bs-toggle="pill" data-bs-target="#additionalInformation " type="button">
                                Additional information
                            </button>
                        </li>
                        <li>
                            <button data-bs-toggle="pill" data-bs-target="#reviews" type="button">
                                Reviews (03)
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-6">
                                    <!-- Product Single Tab Description Start -->
                                    <div class="product-single-tab-description">
                                        <!-- Product Single Tab Description Item Start -->
                                        <div class="product-single-tab-description-item">
                                            <h4 class="product-single-tab-description-item__title">
                                                + USEFUL INFORMATION
                                            </h4>
                                            <p>
                                                Cotton-blend fabric.
                                                Textured fabric. Long
                                                design. Evasé design. Wrap
                                                collar. Puffed short sleeve.
                                                Front slit. Knot detail. Bow
                                                closing on the back. Button
                                                fastening at back.
                                            </p>
                                        </div>
                                        <!-- Product Single Tab Description Item End -->

                                        <!-- Product Single Tab Description Item Start -->
                                        <div class="product-single-tab-description-item">
                                            <h4 class="product-single-tab-description-item__title">
                                                + MATERIAL AND WASHING
                                                INSTRUCTIONS
                                            </h4>
                                            <p>
                                                Composition: 70% viscose,30%
                                                cotton
                                            </p>
                                            <p>
                                                <img src="<?= base_url(); ?>assets/images/content-single-product-image-2.png" alt="Product Icon" />
                                            </p>
                                        </div>
                                        <!-- Product Single Tab Description Item End -->
                                    </div>
                                    <!-- Product Single Tab Description End -->
                                </div>
                                <div class="col-lg-5">
                                    <!-- Product Single Tab Image Start -->
                                    <div class="product-single-tab-image">
                                        <h5 class="product-single-tab-image__title">
                                            Video review product
                                        </h5>
                                        <div class="product-single-tab-image__image">
                                            <a class="glightbox" href="https://www.youtube.com/watch?v=I2P22HzEVjs&amp;ab_channel=LAStudio"></a>
                                            <img src="<?= base_url(); ?>assets/images/content-single-product-image-1.jpg" alt="product-image" />
                                        </div>
                                    </div>
                                    <!-- Product Single Tab Image End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="additionalInformation">
                            <!-- Product Single Table Start -->
                            <div class="product-single-table">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <tbody>
                                            <tr>
                                                <th>Color</th>
                                                <td>
                                                    <p>Blue, Green, Red</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Product Single Table End -->
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <!-- Product Single Review Start -->
                            <div class="product-single-review">
                                <!-- Product Comment Start -->
                                <div class="product-comment">
                                    <h3 class="comment-title">
                                        3 review for Product Simple
                                    </h3>

                                    <!-- Comment Items Start -->
                                    <ul class="comment-items">
                                        <!-- Comment Item Start -->
                                        <li class="comment-item">
                                            <div class="comment-item__author">
                                                <img src="<?= base_url(); ?>assets/images/user/user-1.jpg" alt="Author" />
                                            </div>
                                            <div class="comment-item__content">
                                                <div class="comment-item__rating">
                                                    <span class="star-rating">
                                                        <span style="
                                                                    width: 80%;
                                                                "></span>
                                                    </span>
                                                </div>
                                                <p class="comment-item__description">
                                                    Fringed jacquard
                                                    cardigan
                                                </p>
                                                <p class="comment-item__meta">
                                                    <strong>HasTheme</strong>
                                                    - June 3, 2024
                                                </p>
                                            </div>
                                        </li>
                                        <!-- Comment Item End -->

                                        <!-- Comment Item Start -->
                                        <li class="comment-item">
                                            <div class="comment-item__author">
                                                <img src="<?= base_url(); ?>assets/images/user/user-2.jpg" alt="Author" />
                                            </div>
                                            <div class="comment-item__content">
                                                <div class="comment-item__rating">
                                                    <span class="star-rating">
                                                        <span style="
                                                                    width: 80%;
                                                                "></span>
                                                    </span>
                                                </div>
                                                <p class="comment-item__description">
                                                    Fringed jacquard
                                                    cardigan
                                                </p>
                                                <p class="comment-item__meta">
                                                    <strong>HasTheme</strong>
                                                    - June 3, 2024
                                                </p>
                                            </div>
                                        </li>
                                        <!-- Comment Item End -->

                                        <!-- Comment Item Start -->
                                        <li class="comment-item">
                                            <div class="comment-item__author">
                                                <img src="<?= base_url(); ?>assets/images/user/user-3.jpg" alt="Author" />
                                            </div>
                                            <div class="comment-item__content">
                                                <div class="comment-item__rating">
                                                    <span class="star-rating">
                                                        <span style="
                                                                    width: 80%;
                                                                "></span>
                                                    </span>
                                                </div>
                                                <p class="comment-item__description">
                                                    Fringed jacquard
                                                    cardigan
                                                </p>
                                                <p class="comment-item__meta">
                                                    <strong>HasTheme</strong>
                                                    - June 3, 2024
                                                </p>
                                            </div>
                                        </li>
                                        <!-- Comment Item End -->
                                    </ul>
                                    <!-- Comment Items End -->
                                </div>
                                <!-- Product Comment End -->

                                <!-- Product Comment Form Start -->
                                <div class="product-comment-form">
                                    <h3 class="comment-title">
                                        Add a review
                                    </h3>

                                    <form action="#">
                                        <!-- comment Form Start -->
                                        <div class="comment-form">
                                            <div class="comment-form__notes">
                                                Your email address will not
                                                be published.
                                            </div>
                                            <div class="product-review-form__rating">
                                                <div class="label">
                                                    Your rating *
                                                </div>
                                                <span class="star-rating">
                                                    <span style="width: 80%"></span>
                                                </span>
                                            </div>
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label">Your review *</label>
                                                <textarea class="single-form__input"></textarea>
                                            </div>
                                            <!-- Single Form Start -->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- Single Form Start -->
                                                    <div class="single-form">
                                                        <label class="single-form__label">Name *
                                                        </label>
                                                        <input type="text" class="single-form__input" />
                                                    </div>
                                                    <!-- Single Form Start -->
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Single Form Start -->
                                                    <div class="single-form">
                                                        <label class="single-form__label">Email *</label>
                                                        <input type="email" class="single-form__input" />
                                                    </div>
                                                    <!-- Single Form Start -->
                                                </div>
                                            </div>

                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input type="checkbox" name="save" id="save" />
                                                <label class="single-form__label checkbox-label" for="save">
                                                    <span></span>
                                                    Save my name, email, and
                                                    website in this browser
                                                    for the next time I
                                                    comment.
                                                </label>
                                            </div>
                                            <!-- Single Form Start -->

                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <button class="single-form__btn btn">
                                                    Submit
                                                </button>
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                        <!-- comment Form End -->
                                    </form>
                                </div>
                                <!-- Product Comment Form End -->
                            </div>
                            <!-- Product Single Review End -->
                        </div>
                    </div>
                </div>
                <!-- Product Single Tabs End -->
            </div>
        </div>



        <!-- Newsletter Start -->
        <div class="newsletter-section-2 newsletter-section-4">
            <div class="newsletter-left" style="
                        background-image: url(assets/images/newsletter-bg-1.jpg);
                    ">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper-3 text-center">
                    <h4 class="newsletter-wrapper-3__title">
                        Follow us on
                    </h4>
                    <p>
                        Proin volutpat vitae libero at tincidunt. Maecenas
                        sapien lectus, vehicula vel euismod sed, vulputate
                    </p>

                    <div class="newsletter-social">
                        <ul class="newsletter-social__list">
                            <li>
                                <a href="#"><i class="lastudioicon-b-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="lastudioicon-b-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="lastudioicon-b-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="lastudioicon-b-vimeo"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="lastudioicon-envato"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Newsletter Wrapper End -->
            </div>
            <div class="newsletter-right" style="
                        background-image: url(assets/images/newsletter-bg-2.jpg);
                    ">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper-3 text-center">
                    <h4 class="newsletter-wrapper-3__title">
                        10% off when you sign up
                    </h4>
                    <p>
                        Proin volutpat vitae libero at tincidunt. Maecenas
                        sapien lectus, vehicula vel euismod sed, vulputate
                    </p>
                    <form action="#">
                        <div class="newsletter-form-style-1 newsletter-form-style-1--2">
                            <input type="text" placeholder="Enter your email address..." />
                            <button>Subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Newsletter Wrapper End -->
            </div>
        </div>
        <!-- Newsletter End -->
    </main>

    <!-- Footer Start -->
    <footer class="footer-section-2">
        <div class="container-fluid custom-container">
            <!-- Footer Main Start -->
            <div class="footer-main align-items-center">
                <div class="footer-left-2">
                    <div class="footer-about text-lg-start text-center">
                        <a class="logo justify-content-lg-start justify-content-center" href="#"><img src="<?= base_url(); ?>assets/images/logo-white.svg" alt="Logo" /></a>
                        <p>
                            Proin volutpat vitae libero at tincidunt. Maecenas sapie
                        </p>
                    </div>
                </div>
                <div class="footer-right-2">
                    <div class="footer-link-2">
                        <div class="footer-link__wrapper">
                            <h4 class="footer-title-2">Company links</h4>

                            <ul class="footer-link-2__list">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="shop-fullwidth.html">Shop</a></li>
                                <li><a href="term-of-use.html">Help Center</a></li>
                                <li>
                                    <a href="term-of-use.html">Policy & Privacy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-link__wrapper">
                            <h4 class="footer-title-2">Category</h4>

                            <ul class="footer-link-2__list">
                                <li><a href="shop-fullwidth.html">Man</a></li>
                                <li><a href="shop-fullwidth.html">Woman</a></li>
                                <li><a href="shop-fullwidth.html">Kids</a></li>
                                <li>
                                    <a href="shop-fullwidth.html">Accessories</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-link__wrapper">
                            <h4 class="footer-title-2">Contact</h4>

                            <ul class="footer-link-2__list">
                                <li>
                                    <span>4517 Washington Ave. Manchester, Kentucky
                                        39495</span>
                                </li>
                                <li>
                                    <a href="mailto:info@example.com">info@example.com</a>
                                </li>
                                <li>
                                    <a href="tel:626997-4298">(626)997-4298</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Main End -->

            <!-- Footer CopyRight Start -->
            <div class="footer-copyright-2">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="text-center text-md-start">
                            <p>
                                &copy;
                                <script>
                                    document.write(new Date().getFullYear() + " ")
                                </script>
                                <span> ZAYA </span> Made with
                                <i class="lastudioicon-heart-1"></i> by
                                <a href="https://hasthemes.com/">HasThemes</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="d-flex justify-content-center justify-content-md-end">
                            <li><a href="term-of-use.html">Term of user</a></li>
                            <li><a href="#">Payment refund</a></li>
                            <li><a href="#">Accessibility</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer CopyRight End -->
        </div>
    </footer>

    <!-- Footer End -->

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Bootstrap JS -->
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="<?= base_url(); ?>assets/js/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/masonry.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/nice-select2.js"></script>

    <!-- Activation JS -->
    <script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>


<!-- Mirrored from htmldemo.net/zaya/zaya/product-single.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 18 Jul 2023 18:00:54 GMT -->

</html>
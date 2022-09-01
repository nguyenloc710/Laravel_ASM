<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/fusta/fusta/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 05:40:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fusta - Best Furniture || Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS 
    ========================= -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
    <!-- header-area start -->
    <div class="header-area">
        <!-- header-top start -->
        
        <!-- header-top end -->
        <div class="header-bottom-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-5 col-5">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('assets/images/logo/logo.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="main-menu-area text-center">
                            <nav class="main-navigation">
                                <ul>
                                    <li  class="active"><a href="{{route('home')}}">Trang Chủ</a>
                                    </li>
                                        <li><a href="{{route('shop')}}">Sản Phẩm</a>
                                    </li>
                                    <li><a href="{{route('contact_us')}}">Liên Hệ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-7 col-7">
                        <div class="right-blok-box d-flex">
                            {{-- @if (isset($product)) --}}
                            <div class="search-wrap">
                                <a href="{{route('logout')}}"><i class="icon-magnifier"></i></a>
                            </div>
                            {{-- @endif --}}
                            

                            <div class="user-wrap">
                                @if (Auth::check())
                                {{Auth::user()->email}} | <a href="{{route('logout')}}">Logout</i></a>
                                @else
                                <a href="{{route('auth.getLogin')}}"><i class="icon-user"></i></a>
                                @endif
                            </div>
                            
                            <div class="shopping-cart-wrap">
                                <a href=""><i class="icon-handbag"></i> <span id="cart-total">2</span></a>
                                {{-- {{route('cart')}} --}}
                                <ul class="mini-cart">
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="single-product.html"><img alt="" src="{{asset('assets/images/product/1.jpg')}}"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="single-product.html"><h4>Product Name 01</h4></a>
                                            <span class="quantity">1 ×</span>
                                            <div class="price-box"><span class="new-price">$130.00</span></div>
                                            <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                        </div>
                                    </li>
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="single-product.html"><img alt="" src="{{asset('assets/images/product/3.jpg')}}"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="single-product.html"><h4>Product Name 03</h4></a>
                                            <span class="quantity">1 ×</span>
                                            <div class="price-box"><span class="new-price">$130.00</span></div>
                                            <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                        </div>
                                    </li>
                                    <li class="subtotal-titles">
                                        <div class="subtotal-titles"><h3>Sub-Total :</h3><span>$ 230.99</span></div>
                                    </li>
                                    <li class="mini-cart-btns">
                                        <div class="cart-btns">
                                            <a href="">View cart</a>
                                            {{-- {{route('cart')}} --}}
                                            <a href="#">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mobile-menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    
    <!-- main-search start -->
    <div class="main-search-active">
        <div class="sidebar-search-icon">
            <button class="search-close"><span class="icon-close"></span></button>
        </div>
        <div class="sidebar-search-input">
            <form>
                <div class="form-search">
                    <input id="search" class="input-text" value="" placeholder="Search entire store here ..." type="search">
                    <button class="search-btn" type="button">
                        <i class="icon-magnifier"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- main-search start -->
    
    <!-- Hero Slider Start -->
    <div class="hero-slider hero-slider-one">
        <!-- Single Slide Start -->
        <div class="single-slide" style="background-image: url(assets/images/slider/slide-bg-1.jpg)">
            <!-- Hero Content One Start -->
            <div class="hero-content-one container">
                <div class="row">
                    <div class="col-lg-6 col-md-8"> 
                        <div class="slider-text-info">
                            <h3 class="">Top Selling!</h3>
                            <h1>New Collection</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="shop.html" class="btn slider-btn uppercase"><span>SHOP NOW</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6"> 
                        <div class="slider-inner-image">
                            <img src="{{asset('assets/images/slider/slier-inner-1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Content One End -->
        </div>
        <!-- Single Slide End -->

        <!-- Single Slide Start -->
        <div class="single-slide" style="background-image: url(assets/images/slider/slide-bg-1.jpg)">
            <!-- Hero Content One Start -->
            <div class="hero-content-one container">
                <div class="row">
                    <div class="col-lg-6 col-md-8"> 
                        <div class="slider-text-info">
                            <h3 class="">Top Selling!</h3>
                            <h1>New Collection</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="shop.html" class="btn slider-btn uppercase"><span>SHOP NOW</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6"> 
                        <div class="slider-inner-image">
                            <img src="{{asset('assets/images/slider/slier-inner-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Content One End -->
        </div>
        <!-- Single Slide End -->
    </div>
    <!-- Hero Section End -->
    
    <!-- about-area start -->
    @yield('content')
    <!-- secton-area end -->
    
    <!-- our-brand-area start -->
    <div class="our-brand-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="our-brand-active">
                        <div class="single-brand">
                            <a href="#"><img src="{{asset('assets/images/brand/1.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="{{asset('assets/images/brand/2.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="{{asset('assets/images/brand/3.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="{{asset('assets/images/brand/4.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="{{asset('assets/images/brand/5.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="{{asset('assets/images/brand/3.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="{{asset('assets/images/brand/4.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our-brand-area end -->
    
    <!-- footer-area start -->
    <footer class="footer-area">
        <div class="footer-top pt--40 pb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>My Account</h3>
                            </div>
                            <ul class="footer-info-list">
                                <li>
                                    <i class="ion-ios-location-outline"></i> 184 Main Rd E, St Albans VIC 3021, Australia
                                </li>
                                <li>
                                    <i class="ion-ios-email-outline"></i> Mill Us : <a href="#">yourmail@gmail.com</a>
                                </li>
                                <li>
                                    <i class="ion-ios-telephone-outline"></i> Phone: + 00 254 254565 54
                                </li>
                            </ul>
                            <div class="payment-cart">
                                <img src="{{asset('assets/images/icon/1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>Categories</h3>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">Ecommerce</a></li>
                                <li><a href="#">Shopify</a></li>
                                <li><a href="#">Prestashop</a></li>
                                <li><a href="#">Opencart</a></li>
                                <li><a href="#">Magento</a></li>
                                <li><a href="#">Jigoshop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-4">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>Information</h3>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Returns & Exchanges</a></li>
                                <li><a href="#">Shipping & Delivery</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-4">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>Quick Links</h3>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Orders Tracking</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">Shopping Rates</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  col-md-6"><div class="copyright">
                        <p>Copyright ©All Right Reserved.</p>
                    </div></div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->
    
    <!-- Modal-wrapper start -->
    <div class="modal-wrapper">
        <div class="modal fade " id="exampleModalCenter" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- modal-inner-area start -->
                        <div class="modal-inner-area row">
                            <div class="col-xl-6 col-lg-7 col-md-6">
                                <div class="product-details-images">
                                    <div class="product_details_container">
                                        <!-- product_big_images start -->
                                        <div class="product_big_images-top">
                                            <div class="portfolio-full-image tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="img-tab-5">
                                                    <img src="{{asset('assets/images/product-details/big-img/w1.jpg')}}" alt="full-image">
                                                </div>
                                                <div role="tabpanel" class="tab-pane product-video-position" id="img-tab-6">
                                                    <img src="{{asset('assets/images/product-details/big-img/w2.jpg')}}" alt="full-image">
                                                </div>
                                                <div role="tabpanel" class="tab-pane product-video-position" id="img-tab-7">
                                                    <img src="{{asset('assets/images/product-details/big-img/w3.jpg')}}" alt="full-image">
                                                </div>
                                                <div role="tabpanel" class="tab-pane product-video-position" id="img-tab-8">
                                                    <img src="{{asset('assets/images/product-details/big-img/w4.jpg')}}" alt="full-image">
                                                </div>
                                                <div role="tabpanel" class="tab-pane product-video-position" id="img-tab-9">
                                                    <img src="{{asset('assets/images/product-details/big-img/w3.jpg')}}" alt="full-image">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product_big_images end -->

                                        <!-- Start Small images -->
                                        <ul class="product_small_images-bottom horizantal-product-active nav" role="tablist">
                                            <li role="presentation" class="pot-small-img active">
                                                <a href="#img-tab-5" role="tab" data-bs-toggle="tab">
                                                    <img src="{{asset('assets/images/product-details/small-img/1.jpg')}}" alt="small-image">
                                                </a>
                                            </li>
                                            <li role="presentation" class="pot-small-img">
                                                <a href="#img-tab-6" role="tab" data-bs-toggle="tab">
                                                    <img src="{{asset('assets/images/product-details/small-img/2.jpg')}}" alt="small-image">
                                                </a>
                                            </li>
                                            <li role="presentation" class="pot-small-img">
                                                <a href="#img-tab-7" role="tab" data-bs-toggle="tab">
                                                    <img src="{{asset('assets/images/product-details/small-img/3.jpg')}}" alt="small-image">
                                                </a>
                                            </li>
                                            <li role="presentation" class="pot-small-img">
                                                <a href="#img-tab-8" role="tab" data-bs-toggle="tab">
                                                    <img src="{{asset('assets/images/product-details/small-img/4.jpg')}}" alt="small-image">
                                                </a>
                                            </li>
                                            <li role="presentation" class="pot-small-img">
                                                <a href="#img-tab-9" role="tab" data-bs-toggle="tab">
                                                    <img src="{{asset('assets/images/product-details/small-img/3.jpg')}}" alt="small-image">
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End Small images -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 col-md-6">
                                <!-- product_details_info start -->
                                <div class="product_details_info">
                                    <h2>Black Clock</h2>
                                    <!-- pro_rating start -->
                                    <div class="pro_rating d-flex">
                                        <ul class="product-rating d-flex">
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                        </ul>
                                        <span class="rat_qun"> (Based on 0 Ratings) </span>
                                    </div>
                                    <!-- pro_rating end -->
                                    <!-- pro_details start -->
                                    <div class="pro_details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostr exercitation ullamco laboris nisi ut aliquip ex ea. </p>
                                    </div>
                                    <!-- pro_details end -->
                                    <!-- pro_dtl_prize start -->
                                    <ul class="pro_dtl_prize">
                                        <li class="old_prize">$15.21</li>
                                        <li> $10.00</li>
                                    </ul>
                                    <!-- pro_dtl_prize end -->
                                    <!-- pro_dtl_color start-->
                                    <div class="pro_dtl_color">
                                        <h2 class="title_2">Choose Colour</h2>
                                        <ul class="pro_choose_color">
                                            <li class="red"><a href="#"><i class="ion-record"></i></a></li>
                                            <li class="blue"><a href="#"><i class="ion-record"></i></a></li>
                                            <li class="perpal"><a href="#"><i class="ion-record"></i></a></li>
                                            <li class="yellow"><a href="#"><i class="ion-record"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- pro_dtl_color end-->
                                    <!-- pro_dtl_size start -->
                                    <div class="pro_dtl_size">
                                        <h2 class="title_2">Size</h2>
                                        <ul class="pro_choose_size">
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li>
                                        </ul>
                                    </div>
                                    <!-- pro_dtl_size end -->
                                    <!-- product-quantity-action start -->
                                    <div class="product-quantity-action">
                                        <div class="prodict-statas"><span>Quantity :</span></div>
                                        <div class="product-quantity">
                                            <form action="#">
                                                <div class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- product-quantity-action end -->
                                    <!-- pro_dtl_btn start -->
                                    <ul class="pro_dtl_btn">
                                        <li><a href="#"  class="buy_now_btn">buy now</a></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                    <!-- pro_dtl_btn end -->
                                    <!-- pro_social_share start -->
                                    <div class="pro_social_share d-flex">
                                        <h2 class="title_2">Share :</h2>
                                        <ul class="pro_social_link">
                                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- pro_social_share end -->
                                </div>
                                <!-- product_details_info end -->
                            </div>
                        </div>
                        <!-- modal-inner-area end -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <!-- Modal-wrapper end -->
    
</div>
<!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jquery -->		
<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>


</body>


<!-- Mirrored from htmldemo.net/fusta/fusta/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 05:41:00 GMT -->
</html>
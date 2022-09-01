@extends('layout.master')

@section('content')

    <div class="about-area section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image">
                        <a href="#"><img src="{{asset('assets/images/about/about-1.jpg')}}" alt=""></a>
                        <span class="text_left">Welcome To Furniture</span>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="about-contents">
                        <h3>Dining Table Set</h3>
                        <div class="price-box">
                            <span class="old-price">$330.00</span>
                            -
                            <span class="new-price"> $230.00</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius tem incidid ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitati ullamco laboris nisi ut aliquip ex ea commodo consequ. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepte sint occaecat cupidatat non proident, sunt in culpa qui.</p>
                        <button class="btn shop-btn-two">
                            SHOP NOW
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end -->

    <!-- product-area start -->
    <div class="product-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title start -->
                    <div class="section-title">
                        <h2>New Arrivals</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <!-- section-title end -->
                </div>
            </div>
            <!-- product-warpper start -->
            <div class="product-warpper">
                <div class="row">
                    @foreach ($products_list as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product-details.html"><img src="{{asset($product->thumbnail_url)}}" alt=""></a>
                                        <div class="product-action">
                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="{{route('details',$product->id)}}">{{$product->name}}</a></h3>
                                        <div class="price-box">
                                            {{-- <span class="old-price">140.00</span> --}}
                                            <span class="new-price">{{$product->price}}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                    @endforeach
                </div>
            </div>
            <!-- product-warpper start -->
        </div>
    </div>
    <!-- product-area end -->

    <!-- lg-banner-bg start -->
    <div class="lg-banner-area lg-banner-bg section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <div class="lg-banner-info">
                        <h2>Contrary to popular belief is not simply rand.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit <br> sed do eiusmod tempor incid</p>
                        <a href="#" class="btn more-product-btn">MORE PRODUCTS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- lg-banner-bg end -->

    <!-- product-area start -->
    <div class="product-area section-ptb">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title start -->
                    <div class="section-title">
                        <h2>Featured Products</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <!-- section-title end -->
                </div>
            </div>
            
            <!-- product-warpper start -->
            <div class="product-warpper">
                <div class="product-slider row">
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="product-details.html"><img src="{{asset('assets/images/product/9.jpg')}}" alt=""></a>
                                <div class="product-action">
                                    <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                    <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                    <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Products Name 009</a></h3>
                                <div class="price-box">
                                    <span class="old-price">150.00</span>
                                    <span class="new-price">125.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="product-details.html"><img src="{{asset('assets/images/product/10.jpg')}}" alt=""></a>
                                <div class="product-action">
                                    <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                    <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                    <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Products Name 003</a></h3>
                                <div class="price-box">
                                    <span class="old-price">144.00</span>
                                    <span class="new-price">124.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="product-details.html"><img src="{{asset('assets/images/product/11.jpg')}}" alt=""></a>
                                <div class="product-action">
                                    <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                    <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                    <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Products Name 005</a></h3>
                                <div class="price-box">
                                    <span class="old-price">130.00</span>
                                    <span class="new-price">120.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="product-details.html"><img src="{{asset('assets/images/product/12.jpg')}}" alt=""></a>
                                <div class="product-action">
                                    <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                    <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                    <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Products Name 012</a></h3>
                                <div class="price-box">
                                    <span class="new-price">120.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="product-details.html"><img src="{{asset('assets/images/product/3.jpg')}}" alt=""></a>
                                <div class="product-action">
                                    <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                    <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                    <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Products Name 001</a></h3>
                                <div class="price-box">
                                    <span class="old-price">140.00</span>
                                    <span class="new-price">120.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="product-details.html"><img src="{{asset('assets/images/product/7.jpg')}}" alt=""></a>
                                <div class="product-action">
                                    <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                    <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                    <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Products Name 001</a></h3>
                                <div class="price-box">
                                    <span class="old-price">140.00</span>
                                    <span class="new-price">120.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                </div>
            </div>
            <!-- product-warpper start -->
        </div>
    </div>
    <!-- product-area end -->

    <!-- banner-area start -->
    <div class="banner-area section-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <!-- single-banner start -->
                    <div class="single-banner">
                        <div class="banner-bg">
                            <a href="shop.html"><img src="{{asset('assets/images/banner/1.jpg')}}" alt=""></a>
                        </div>
                        <div class="banner-contet">
                            <p>30% Off</p>
                            <h3>Chair Collection </h3>
                            <a href="#" class="btn-3">SHOP NOW</a>
                        </div>
                    </div>
                    <!-- single-banner end -->
                </div>
                <div class="col-lg-6  col-md-6">
                    <!-- single-banner start -->
                    <div class="single-banner s-mt-30">
                        <div class="banner-bg">
                            <a href="shop.html"><img src="{{asset('assets/images/banner/2.jpg')}}" alt=""></a>
                        </div>
                        <div class="banner-contet">
                            <p>30% Off</p>
                            <h3>Chair Collection </h3>
                            <a href="#" class="btn-3">SHOP NOW</a>
                        </div>
                    </div>
                    <!-- single-banner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area end -->

    <!-- testimonial-area start -->
    <div class="testimonial-area testimonial-bg overlay section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-md-2 col-md-8 col-sm-12">
                    <div class="testimonial-slider">
                        <div class="testimonial-inner text-center">
                            <div class="test-cont">
                                <img src="{{asset('assets/images/icon/2.png')}}" alt="">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. There are many variations of passages.</p>
                            </div>
                            <div class="test-author">
                                <h4>Michelle Mitchell</h4>
                                <p>ui ux - Designer</p>
                            </div>
                        </div>
                        <div class="testimonial-inner text-center">
                            <div class="test-cont">
                                <img src="{{asset('assets/images/icon/2.png')}}" alt="">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. There are many variations of passages.</p>
                            </div>
                            <div class="test-author">
                                <h4>Michelle Mitchell</h4>
                                <p>ui ux - Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area end -->

    <!-- secton-area start -->
    <div class="secton-area section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="instagram-wrapper">
                        <div class="instaram-title text-center">
                            <h3>Follow us on Instagram <a href="#">@furniture</a></h3>
                        </div>
                        <div class="instagram-warp instagram-slider row">
                            <div class="col-lg-6">
                                <div class="single-instagram">
                                    <a href="#"><img src="{{asset('assets/images/instagram/1.jpg')}}" alt=""></a>
                                </div>    
                            </div>
                            <div class="col-lg-6">
                                <div class="single-instagram">
                                    <a href="#"><img src="{{asset('assets/images/instagram/2.jpg')}}" alt=""></a>
                                </div>    
                            </div>
                            <div class="col-lg-6">
                                <div class="single-instagram">
                                    <a href="#"><img src="{{asset('assets/images/instagram/1.jpg')}}" alt=""></a>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="subscribe-area">
                        <div class="subsctibe-title text-center">
                            <h3>Subscribe</h3>
                            <p>Lorem ipsum dolor sit amet consectetur elit.</p>
                        </div>
                        <div class="subscribe-content text-center">
                            <input class="input-field" type="email" placeholder="your mail address">
                            <button class=" btn subscribe-btn">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
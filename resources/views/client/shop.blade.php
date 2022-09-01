@extends('layout.master')
@section('content')
<div class="main-content-wrap shop-page section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-lg-1 order-2">
                <!-- shop-sidebar-wrap start -->
                <div class="shop-sidebar-wrap">
                    <!-- shop-sidebar start -->
                    <div class="shop-sidebar mb--30">
                        <h4 class="title">CATEGORIES</h4>
                        <ul>  
                            <li><a href="shop.html">Accessories <span>(18)</span></a></li>
                            <li><a href="shop.html">Kids <span>(16)</span></a></li>
                            <li><a href="shop.html">Men <span>(6)</span></a></li>
                            <li><a href="shop.html">Women <span>(11)</span></a></li>
                        </ul>
                    </div>
                    <!-- shop-sidebar end -->
                    
                    <!-- shop-sidebar start -->
                    <div class="shop-sidebar mb--30">
                        <h4 class="title">FILTER BY PRICE</h4>
                        <!-- filter-price-content start -->
                        <div class="filter-price-content">
                            <form action="#" method="post">
                                <div id="price-slider" class="price-slider"></div>
                                <div class="filter-price-wapper">
                                    <div class="filter-price-cont">
                                        <span>Price:</span> 
                                        <div class="input-type">
                                            <input type="text" id="min-price" readonly=""/>
                                        </div>
                                        <span>—</span>
                                        <div class="input-type">
                                            <input type="text" id="max-price" readonly=""/>
                                        </div>
                                        <a class="add-to-cart-button" href="#">
                                            <span>FILTER</span>
                                        </a>
                                    </div>
                                </div>
                            </form>  
                        </div>
                        <!-- filter-price-content end -->
                    </div>
                    <!-- shop-sidebar end -->
                    
                    <!-- shop-sidebar start -->
                    <div class="sidbar-product shop-sidebar mb--30">
                        <h4 class="title">best product</h4>
                        <!-- sidbar-product-inner start -->
                        <div class="sidbar-product-inner">
                            <div class="product-image">
                                <a href="product-details.html"><img src="{{asset('assets/images/product/10.jpg')}}" alt=""></a>
                            </div>
                            <div class="product-content text-start">
                                <h3><a href="product-details.html">Products Name 003</a></h3>
                                <div class="price-box">
                                    <span class="new-price">120.00</span>
                                    <span class="old-price">130.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- sidbar-product-inner end -->
                        <!-- sidbar-product-inner start -->
                        <div class="sidbar-product-inner">
                            <div class="product-image">
                                <a href="product-details.html"><img src="{{asset('assets/images/product/11.jpg')}}" alt=""></a>
                            </div>
                            <div class="product-content text-start">
                                <h3><a href="product-details.html">Products Name 011</a></h3>
                                <div class="price-box">
                                    <span class="new-price">140.00</span>
                                    <span class="old-price">103.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- sidbar-product-inner end -->
                        <!-- sidbar-product-inner start -->
                        <div class="sidbar-product-inner">
                            <div class="product-image">
                                <a href="product-details.html"><img src="{{asset('assets/images/product/5.jpg')}}" alt=""></a>
                            </div>
                            <div class="product-content text-start">
                                <h3><a href="product-details.html">Products Name 008</a></h3>
                                <div class="price-box">
                                    <span class="new-price">160.00</span>
                                    <span class="old-price">121.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- sidbar-product-inner end -->
                    </div>
                    <!-- shop-sidebar end -->
                    
                    <!-- shop-sidebar start -->
                    <div class="shop-sidebar mb--30">
                        <h4 class="title">SIZE</h4>
                        <ul>  
                            <li><a href="shop.html">S <span>(11)</span></a></li>
                            <li><a href="shop.html">M <span>(13)</span></a></li>
                            <li><a href="shop.html">L <span>(6)</span></a></li>
                            <li><a href="shop.html">XLL <span>(51)</span></a></li>
                            <li><a href="shop.html">XXL <span>(3)</span></a></li>
                        </ul>
                    </div>
                    <!-- shop-sidebar end -->
                    
                    
                    <!-- shop-sidebar start -->
                    <div class="shop-sidebar">
                        <h4 class="title">Hot Tags</h4>
                        <div class="sidebar-tag">
                            <a href="#">Women</a>
                            <a href="#">Bags</a>
                            <a href="#">Man</a>
                            <a href="#">Hot</a>
                            <a href="#">fashion</a>
                            <a href="#">digital</a>
                        </div>
                    </div>
                    <!-- shop-sidebar end -->
                </div>
                <!-- shop-sidebar-wrap end -->
            </div>
            <div class="col-lg-9 order-lg-2 order-1">
                <!-- shop-product-wrapper start -->
                <div class="shop-product-wrapper">
                    <div class="row">
                        <div class="col">
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar">
                                <!-- product-view-mode start -->
                                <div class="product-view-mode">
                                    <!-- shop-item-filter-list start -->
                                    <ul role="tablist" class="nav shop-item-filter-list">
                                        <li role="presentation" class="active"><a href="#grid" aria-controls="grid" role="tab" data-bs-toggle="tab" class="active show" aria-selected="true"><i class="ion-ios-keypad-outline"></i></a></li>
                                        <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-bs-toggle="tab"><i class="ion-ios-list-outline"></i> </a></li>
                                    </ul>
                                    <!-- shop-item-filter-list end -->
                                </div>
                                <!-- product-view-mode end -->
                                <!-- product-short start -->
                                <div class="product-short">
                                    <p>Sort By:</p>
                                    <select class="nice-select" name="sortby">
                                        <option value="trending">Relevance</option>
                                        <option value="sales">Name (A - Z)</option>
                                        <option value="sales">Name (Z - A)</option>
                                        <option value="rating">Price (Low > High)</option>
                                        <option value="date">Rating (Lowest)</option>
                                        <option value="price-asc">Model (A - Z)</option>
                                        <option value="price-asc">Model (Z - A)</option>
                                    </select>
                                </div>
                                <!-- product-short end -->
                            </div>
                            <!-- shop-top-bar end -->
                        </div>
                    </div>
                    
                    <!-- shop-products-wrap start -->
                    <div class="shop-products-wrap">
                        <div class="tab-content">
                            <div id="grid" class="tab-pane fade active show" role="tabpanel">
                                <div class="shop-product-wrap">
                                    <div class="row">
                                        @foreach ($products as $item)

                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="{{asset($item->thumbnail_url)}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="{{rote('details',$item->id)}}">{{$item->name}}</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">{{$item->price}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <!-- single-product-wrap end -->
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div id="list" class="tab-pane fade" role="tabpanel">
                                <div class="shop-product-list-wrap">
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="{{asset('assets/images/product/2.jpg')}}" alt=""></a>
                                                    <div class="product-action">
                                                        <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                        <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                        <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product-content text-start">
                                                <h3><a href="product-details.html">Products Name 002</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">120.00</span>
                                                    <span class="old-price">130.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
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
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product-content text-start">
                                                <h3><a href="product-details.html">Products Name 003</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">121.00</span>
                                                    <span class="old-price">132.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="{{asset('assets/images/product/4.jpg')}}" alt=""></a>
                                                    <div class="product-action">
                                                        <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                        <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                        <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product-content text-start">
                                                <h3><a href="product-details.html">Products Name 004</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">111.00</span>
                                                    <span class="old-price">162.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="{{asset('assets/images/product/6.jpg')}}" alt=""></a>
                                                    <div class="product-action">
                                                        <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                        <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                        <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product-content text-start">
                                                <h3><a href="product-details.html">Products Name 005</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">89.00</span>
                                                    <span class="old-price">99.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="{{asset('assets/images/product/8.jpg')}}" alt=""></a>
                                                    <div class="product-action">
                                                        <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                        <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                        <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product-content text-start">
                                                <h3><a href="product-details.html">Products Name 008</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">86.00</span>
                                                    <span class="old-price">97.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrap end -->
                    
                    <!-- paginatoin-area start -->
                    <div>
                        {{$products->links()}}
                    </div>
                    <!-- paginatoin-area end -->
                </div>
                <!-- shop-product-wrapper end -->
            </div>
        </div>
    </div>
</div>
@endsection
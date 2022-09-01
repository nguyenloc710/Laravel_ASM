
@extends('layout.master')

@section('content')
<!-- Main Wrapper Start -->
<div class="main-wrapper">
   
    <!-- header-area start -->
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
    
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="breadcrumb-title">Contact US</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Contact US</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-ptb contact-us-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info-wrapper">
                        <h2>Get in Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum earum eveniet dolorum suscipit nesciunt incidunt animi repudiandae ab at, tenetur distinctio voluptate vel illo similique.</p>
                        <ul class="contact-info-list">
                            <li> <strong>Address:</strong>  House 09, Road 32, mohammadpur, Dhaka 1212</li>
                            <li><strong>Phone:</strong>  +966 11 11 146</li>
                            <li><strong>Email:</strong> <a href="#"> yoursite@demo.com</a></li>
                        </ul>
                        <div class="contact-form-warp">
                            <form id="contact-form" action="https://htmldemo.net/fusta/fusta/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <input type="text" name="name" placeholder="Your Name*">
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="email" name="email" placeholder="Mail Address*">
                                    </div>
                                    <div class="col-lg-10">
                                        <textarea name="message" placeholder="Your Massage*"></textarea>
                                    </div>
                                </div>
                                <div class="contact-submit-btn">
                                    <button type="submit" class="submit-btn">Send Email</button>
                                    <p class="form-messege"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="google-map-area">
                        <div id="map-inner" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
    
    @endsection

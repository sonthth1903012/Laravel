@extends('layout')
@section('title',"Trang chủ")
@section('content')
    <main>

        <!-- slider Area Start -->
        <div class="slider-area ">
            <!-- Mobile Menu -->
                <div class="single-slider slider-height" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="assets/img/hero/hero_man.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
                                    <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
                                    <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                        <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- slider Area End-->
        <!-- Category Area Start-->
        <section class="category-area section-padding30">
            <div class="container-fluid">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-85">
                            <h2>Shop by Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img">
                                <img src="assets/img/categori/cat1.jpg" alt="">
                                <div class="category-caption">
                                    <h2>Owmen`s</h2>
                                    <span class="best"><a href="#">Best New Deals</a></span>
                                    <span class="collection">New Collection</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img text-center">
                                <img src="assets/img/categori/cat2.jpg" alt="">
                                <div class="category-caption">
                                    <span class="collection">Discount!</span>
                                    <h2>Winter Cloth</h2>
                                    <p>New Collection</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img">
                                <img src="assets/img/categori/cat3.jpg" alt="">
                                <div class="category-caption">
                                    <h2>Man`s Cloth</h2>
                                    <span class="best"><a href="#">Best New Deals</a></span>
                                    <span class="collection">New Collection</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Area End-->
        <h2 style="text-transform: uppercase; text-decoration: underline; padding-bottom: 30px">Latest products</h2>
        <div class="row" >
            @foreach ($newests as $p)
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="{{ $p->thumbnail }}" alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <a href="{{url("san-pham/{$p->id}")}}">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>quick view</p>
                                    </a>
                                </div>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>{{ $p->product_name}}</h6>
                            <p>{{ $p->price}}</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <h2 style="text-transform: uppercase; text-decoration: underline; padding-bottom: 30px">Cheapest products</h2>
        <div class="row">
            @foreach ($cheaps as $p)
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="{{ $p->thumbnail }}" alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <a href="{{url("san-pham/{$p->id}")}}">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>quick view</p>
                                    </a>
                                </div>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>{{ $p->product_name}}</h6>
                            <p>{{ $p->price}}</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <h2 style="text-transform: uppercase; text-decoration: underline; padding-bottom: 30px">Most expensive products</h2>
        <div class="row" style="padding-bottom: 80px">
            @foreach ($exs as $p)
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="{{ $p->thumbnail }}" alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <a href="{{url("san-pham/{$p->id}")}}">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>quick view</p>
                                    </a>
                                </div>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>{{ $p->product_name}}</h6>
                            <p>{{ $p->price}}</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- Best Product Start -->
        <div class="best-product-area lf-padding" >
            <div class="product-wrapper bg-height" style=" background-image: url('assets/img/categori/card.png')">
                <div class="container position-relative">
                    <div class="row justify-content-between align-items-end">
                        <div class="product-man position-absolute  d-none d-lg-block">
                            <img src="assets/img/categori/card-man.png" alt="">
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                            <div class="vertical-text">
                                <span>Manz</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="best-product-caption">
                                <h2>Find The Best Product<br> from Our Shop</h2>
                                <p>Designers who are interesten creating state ofthe.</p>
                                <a href="#" class="black-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="shape bounce-animate d-none d-md-block">
                <img src="assets/img/categori/card-shape.png" alt="">
            </div>
        </div>
        <!-- Best Product End-->
        <!-- Best Collection Start -->
        <div class="best-collection-area section-padding2">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-end">
                    <!-- Left content -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="best-left-cap">
                            <h2>Best Collection of This Month</h2>
                            <p>Designers who are interesten crea.</p>
                            <a href="#" class="btn shop1-btn">Shop Now</a>
                        </div>
                        <div class="best-left-img mb-30 d-none d-sm-block">
                            <img src="assets/img/collection/collection1.png" alt="">
                        </div>
                    </div>
                    <!-- Mid Img -->
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <div class="best-mid-img mb-30 ">
                            <img src="assets/img/collection/collection2.png" alt="">
                        </div>
                    </div>
                    <!-- Riht Caption -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="best-right-cap ">
                            <div class="best-single mb-30">
                                <div class="single-cap">
                                    <h4>Menz Winter<br> Jacket</h4>
                                </div>
                                <div class="single-img">
                                    <img src="assets/img/collection/collection3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="best-right-cap">
                            <div class="best-single mb-30">
                                <div class="single-cap active">
                                    <h4>Menz Winter<br>Jacket</h4>
                                </div>
                                <div class="single-img">
                                    <img src="assets/img/collection/collection4.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="best-right-cap">
                            <div class="best-single mb-30">
                                <div class="single-cap">
                                    <h4>Menz Winter<br> Jacket</h4>
                                </div>
                                <div class="single-img">
                                    <img src="assets/img/collection/collection5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Best Collection End -->
        <!-- Latest Offers Start -->
        <div class="latest-wrapper lf-padding" style="background-color: lightskyblue">
            <div class="latest-area latest-height d-flex align-items-center" data-background="assets/img/collection/latest-offer.png">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                            <div class="latest-caption">
                                <h2>Get Our<br>Latest Offers News</h2>
                                <p>Subscribe news latter</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6 ">
                            <div class="latest-subscribe">
                                <form action="#">
                                    <input type="email" placeholder="Your email here">
                                    <button>Shop Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- man Shape -->
                <div class="man-shape">
                    <img src="assets/img/collection/latest-man.png" alt="">
                </div>
            </div>
        </div>
        <!-- Latest Offers End -->
        <!-- Shop Method Start-->
        <div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>Free Shipping Method</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
        <!-- Gallery Start-->
        <div class="gallery-wrapper lf-padding">
            <div class="gallery-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="gallery-items">
                            <img src="assets/img/gallery/gallery1.jpg" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/gallery2.jpg" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/gallery3.jpg" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/gallery4.jpg" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/gallery5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery End-->

    </main>
@endsection

@section('popup')
{{-- day la noi dung chen vao vung popup--}}
@endsection

<!DOCTYPE html>
<html lang="en">


<!-- HRS/index-18.html  22 Nov 2019 10:00:41 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Heritage Rejsahi Silk</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="HRS - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    {{--    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">--}}
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="HRS">
    <meta name="application-name" content="HRS">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/demos/demo-18.css">
</head>

<body>
<div class="page-wrapper">
    <header class="header header-11">
        <div class="header-middle sticky-header">
            <div class="container">
                <div class="header-left">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="index.html">Home</a>
                            </li>

                            <li>
                                <a href="/productCategory">Products</a>
                            </li>

                            {{--                            <li><a href="#">Buy HRS</a></li>--}}
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->

                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>
                </div><!-- End .header-left -->

                <div class="header-center">
                    <a href="index.html" class="logo">
                        <img src="assets/images/demos/demo-18/logo.png" alt="HRS Logo" width="124" height="35">
                    </a>
                </div><!-- End .header-center -->

                <div class="header-right">
                    <div class="header-search header-search-extended header-search-visible">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <label for="q" class="sr-only">Search</label>
                                <input type="search" class="form-control" name="q" id="q"
                                       placeholder="Search product ..." required>
                                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->

                    <a href="wishlist.html" class="wishlist-link">
                        <i class="icon-heart-o"></i>
                        <span
                            class="wishlist-count">{{$count = \App\Wishlist::where([['creator', '=', Auth::user()->name]])->count()}}</span>
                    </a>


                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span
                                class="cart-count"> {{$count = \App\Cart::where([['creator', '=', Auth::user()->name]])->count()}}</span>

                            {{--                            <span--}}
                            {{--                                class="cart-count">--}}

                            {{--                                 @foreach ($cart as $val)--}}
                            {{--                                    {{$val->index()->count()}}--}}
                            {{--                                @endforeach--}}
                            {{--                            </span>--}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">

                            <div class="dropdown-cart-products">
                                @foreach($cart as $val)
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="">Product ID :{{$val->product_id}}</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">{{$val->quantity}}</span>
                                                x {{$val->price}}
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                @endforeach
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>
                                <span class="cart-total-price">{{$val->price*$val->quantity}}</span>

                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="cart.html" class="btn btn-primary">View Cart</a>
                                <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->

                        </div><!-- End .dropdown-menu -->

                    </div><!-- End .cart-dropdown -->

                    {{--                    <div class="dropdown-menu dropdown-menu-right">--}}
                    {{--                        <div class="dropdown-cart-products">--}}
                    {{--                            <div class="product">--}}
                    {{--                                <div class="product-cart-details">--}}
                    {{--                                    <h4 class="product-title">--}}
                    {{--                                        <a href="product.html">Beige knitted elastic runner shoes</a>--}}
                    {{--                                    </h4>--}}

                    {{--                                    <span class="cart-product-info">--}}
                    {{--                                                <span class="cart-product-qty">1</span>--}}
                    {{--                                                x $84.00--}}
                    {{--                                            </span>--}}
                    {{--                                </div><!-- End .product-cart-details -->--}}

                    {{--                                <figure class="product-image-container">--}}
                    {{--                                    <a href="product.html" class="product-image">--}}
                    {{--                                        <img src="categorypic/180017265_223184382940681_2960429593337635890_n.jpg" alt="product">--}}
                    {{--                                    </a>--}}
                    {{--                                </figure>--}}
                    {{--                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>--}}
                    {{--                            </div><!-- End .product -->--}}

                    {{--                            <div class="product">--}}
                    {{--                                <div class="product-cart-details">--}}
                    {{--                                    <h4 class="product-title">--}}
                    {{--                                        <a href="product.html">Blue utility pinafore denim dress</a>--}}
                    {{--                                    </h4>--}}

                    {{--                                    <span class="cart-product-info">--}}
                    {{--                                                <span class="cart-product-qty">1</span>--}}
                    {{--                                                x $76.00--}}
                    {{--                                            </span>--}}
                    {{--                                </div><!-- End .product-cart-details -->--}}

                    {{--                                <figure class="product-image-container">--}}
                    {{--                                    <a href="product.html" class="product-image">--}}
                    {{--                                        <img src="assets/images/products/cart/product-2.jpg" alt="product">--}}
                    {{--                                    </a>--}}
                    {{--                                </figure>--}}
                    {{--                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>--}}
                    {{--                            </div><!-- End .product -->--}}
                    {{--                        </div><!-- End .cart-product -->--}}

                    {{--                        <div class="dropdown-cart-total">--}}
                    {{--                            <span>Total</span>--}}

                    {{--                            <span class="cart-total-price">$160.00</span>--}}
                    {{--                        </div><!-- End .dropdown-cart-total -->--}}

                    {{--                        <div class="dropdown-cart-action">--}}
                    {{--                            <a href="/cart" class="btn btn-primary">View Cart</a>--}}
                    {{--                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i--}}
                    {{--                                    class="icon-long-arrow-right"></i></a>--}}
                    {{--                        </div><!-- End .dropdown-cart-total -->--}}

                    {{--                    </div><!-- End .dropdown-menu -->--}}
                    {{--                    <a href="wishlist.html" class="wishlist-link">--}}
                    {{--                        <i class="far fa-user"></i>--}}
                    {{--                        <span class="fi-account-login">{{Auth::user()->name}}</span>--}}
                    {{--                        <a class="dropdown-item" href="{{ route('logout') }}"--}}
                    {{--                           onclick="event.preventDefault();--}}
                    {{--                                                     document.getElementById('logout-form').submit();">--}}
                    {{--                            {{ __('Logout') }}--}}
                    {{--                        </a>--}}
                    {{--                    <a href="/login" class="icon-user">--}}

                    {{--                        <i class="icon-heart-o"></i><a href="{{ route('logout') }}"--}}
                    {{--                                                       onclick="event.preventDefault();--}}
                    {{--                                                     document.getElementById('logout-form').submit();">--}}
                    {{--                            <i class="icon-user"></i>--}}
                    {{--                        </a>--}}

                    {{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                    {{--                            @csrf--}}
                    {{--                        </form>--}}
                    {{--                    </a>--}}

                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->
    </header><!-- End .header -->

    <main class="main">
        <div class="intro-slider-container mb-3 mb-lg-5">
            <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
                 data-owl-options='{"dots": true, "nav": false}'>
                @foreach($slider as $val)
                    {{--                    <div class="intro-slide"--}}
                    {{--                         style="background-image: url(assets/images/demos/demo-18/slider/slide-1.jpg);">--}}
                    {{--                        <div class="container">--}}
                    {{--                            <div class="intro-content text-center">--}}
                    {{--                                <h3 class="intro-subtitle cross-txt text-primary">SEASONAL PICKS</h3>--}}
                    {{--                                <!-- End .h3 intro-subtitle -->--}}
                    {{--                                <h1 class="intro-title text-white">Heritage Rajsahi Silk</h1><!-- End .intro-title -->--}}
                    {{--                                <div class="intro-text text-white">up to 70% off</div><!-- End .intro-text -->--}}
                    {{--                                <div class="intro-action cross-txt">--}}
                    {{--                                    <a href="category.html" class="btn btn-outline-white">--}}
                    {{--                                        <span>Discover More</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div><!-- End .intro-content -->--}}
                    {{--                    </div><!-- End .intro-slide -->--}}

                    {{--                    <div class="intro-slide"--}}
                    {{--                         style="background-image: url(assets/images/demos/demo-18/slider/slide-2.jpg);">--}}
                    {{--                        <div class="container">--}}
                    {{--                            <div class="intro-content text-center">--}}
                    {{--                                <h3 class="intro-subtitle text-primary cross-txt">Women's Accessories</h3>--}}
                    {{--                                <!-- End .h3 intro-subtitle -->--}}
                    {{--                                <h1 class="intro-title text-white">Traditional Silk of Rajshahi</h1>--}}
                    {{--                                <!-- End .intro-title -->--}}
                    {{--                                <div class="intro-text text-white">30-50% off</div><!-- End .intro-text -->--}}
                    {{--                                <div class="intro-action cross-txt">--}}
                    {{--                                    <a href="category.html" class="btn btn-outline-white">--}}
                    {{--                                        <span>Discover More</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div><!-- End .intro-content -->--}}
                    {{--                    </div><!-- End .intro-slide -->--}}
                    {{--                    <div class="intro-slide">--}}
                    <div class="intro-slide"
                         style="background-image: url(categorypic/{{$val['slider_image']}});">
                        {{--                        <img src="categorypic/{{$val['slider_image']}}" alt="No image">--}}
                        <div class="container">
                            <div class="intro-content text-center">
                                <h3 class="intro-subtitle text-primary cross-txt">{{$val->type}}</h3>
                                <!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">{{$val->slider_name}}</h1>
                                <!-- End .intro-title -->
                                <div class="intro-text text-white">{{$val->discount}} off</div><!-- End .intro-text -->
                                <div class="intro-action cross-txt">
                                    <a href="category.html" class="btn btn-outline-white">
                                        <span>{{$val->slider_details}}</span>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                @endforeach
            </div><!-- End .intro-slider owl-carousel owl-simple -->

            <span class="slider-loader text-white"></span><!-- End .slider-loader -->
        </div><!-- End .intro-slider-container -->

        <div class="container banners">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner banner-hover">
                        <a href="#">
                            <img src="assets/images/demos/demo-18/banners/banner-1.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a href="#">Silk Katan Saree</a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-6 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="banner banner-hover">
                        <a href="#">
                            <img src="assets/images/demos/demo-18/banners/banner-2.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a href="#">Silk Dupiyan</a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-sm-6 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="banner banner-hover">
                        <a href="#">
                            <img src="assets/images/demos/demo-18/banners/banner-3.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a href="#">Pure Silk</a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->

                    <div class="banner banner-hover">
                        <a href="#">
                            <img src="assets/images/demos/demo-18/banners/banner-4.jpg" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h3 class="banner-title text-white"><a href="#">Accessories</a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-sm-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="title">Recent Arrivals</h2><!-- End .title -->
                    <div class="products-container mb-7">
                        <div class="row justify-content-center">
                            @foreach($product as $val)
                                <div class="col-6 col-md-4">
                                    <div class="product product-4">
                                        <figure class="product-media">
                                            <a href="/showproduct{{$val->id}}">
                                                <img src="categorypic/{{$val['product_image1']}}" alt="No image found"
                                                     class="product-image" width="277px" height="377px">
                                                <img src="categorypic/{{$val['product_image2']}}" alt="No image found"
                                                     class="product-image-hover" width="277px" height="377px">
                                            </a>

                                            <div class="product-action-vertical">
                                                <form action="/wishList{{$val->id}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$val->id}}">
                                                    <input type="hidden" name="price" value="{{$val->product_price}}">
                                                    <button class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span>
                                                    </button>
                                                </form>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                   title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action -->

                                            <form action="/addToCart{{$val->id}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$val->id}}">
                                                <input type="hidden" name="price" value="{{$val->product_price}}">
                                                <div class="product-action">
                                                    <button
                                                        class="btn-product btn-cart"><span>add to cart</span></button>
                                                </div><!-- End .product-action -->
                                            </form>
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Sarees</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">{{$val->product_name}}</a>
                                            </h3><!-- End .product-title -->
                                            <span class="old-price">Was {{$val->product_price}}</span>
                                            <div class="product-price">

                                             Now   {{$val->product_price-(($val->product_price*$val->discount)/100)}} tk
                                            </div><!-- End .product-price -->
                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #e5dcb1;"><span
                                                        class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #bacbd8;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 -->
                            @endforeach
                        </div><!-- End .row -->

                        <div class="more-container text-center mt-0 mb-0">
                            <a href="/productCategory" class="btn btn-outline-primary-2 btn-more">
                                <span>View more Products</span>
                            </a>
                        </div><!-- End .more-container -->
                    </div><!-- End .products -->
                </div><!-- End .col-lg-9 -->

                <aside class="col-lg-3">
                    <div class="sidebar sidebar-home">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <div class="widget widget-products">
                                    <h4 class="widget-title">Best Selling</h4><!-- End .widget-title -->
                                    @forelse($random2->slice(0, 5) as $val)
                                        <div class="products">
                                            <div class="product product-sm">
                                                <figure class="product-media">
                                                    <a href="/showproduct{{$val->id}}">
                                                        <img src="categorypic/{{$val['product_image2']}}"
                                                             alt="Product image" class="product-image">
                                                    </a>
                                                </figure>

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Clothing</a>
                                                    </div><!-- End .product-cat -->
                                                    <h5 class="product-title"><a
                                                            href="product.html">{{$val->product_name}}</a></h5>
                                                    <!-- End .product-title -->
                                                    <div class="product-price">

                                                        <span class="new-price">Now {{$val->product_price-(($val->product_price*$val->discount)/100)}} tk</span>
                                                        <span class="old-price">Was {{$val->product_price}}</span>
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product product-sm -->


                                        </div><!-- End .products -->
                                        @endforeach
                                </div><!-- End .widget widget-products -->
                            </div><!-- End .col-sm-6 col-lg-12 -->

                            {{--                                <div class="col-sm-6 col-lg-12">--}}
                            {{--                                    <div class="widget widget-subscribe" style="background-image: url(assets/images/demos/demo-18/bg-newsletter.jpg);">--}}
                            {{--                                        <h2 class="widget-title">Sign up for email <br>& get 25% off </h2><!-- End .widget-title -->--}}
                            {{--                                        <p>Subcribe to get information about products and coupons</p>--}}

                            {{--                                        <form action="#">--}}
                            {{--                                            <input type="email" class="form-control" placeholder="Enter your Email Address" required>--}}

                            {{--                                            <input type="submit" class="btn btn-outline-white" value="Subscribe">--}}
                            {{--                                        </form>--}}
                            {{--                                        --}}
                            {{--                                    </div><!-- End .widget widget-banner -->--}}
                            {{--                                </div><!-- End .col-sm-6 col-lg-12 -->--}}

                            <div class="col-sm-6 col-lg-12">
                                <div class="widget widget-banner">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="assets/images/demos/demo-18/banners/banner-5.jpg" alt="Banner">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle"><a href="#">Spring 2019</a></h4>
                                            <!-- End .banner-title -->
                                            <h3 class="banner-title"><a href="#">SAVE UP TO <br>50% OFF</a></h3>
                                            <!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now</a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .widget widget-banner -->
                            </div><!-- End .col-sm-6 col-lg-12 -->

                            <div class="col-sm-6 col-lg-12">
                                <div class="widget widget-posts">
                                    <h4 class="widget-title">New Blog Posts</h4><!-- End .widget-title -->

                                    <div class="owl-carousel owl-simple" data-toggle="owl"
                                         data-owl-options='{
                                                "nav":false,
                                                "dots": true,
                                                "loop": false,
                                                "autoHeight": true
                                            }'>
                                        <article class="entry">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="assets/images/demos/demo-18/blog/post-1.jpg"
                                                         alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->

                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                                </div><!-- End .entry-meta -->

                                                <h5 class="entry-title">
                                                    <a href="single.html">Sed adipiscing ornare.</a>
                                                </h5><!-- End .entry-title -->

                                                <div class="entry-content">
                                                    <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Donec
                                                        odio</p>
                                                    <a href="single.html" class="read-more">Read More</a>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </article><!-- End .entry -->

                                        <article class="entry">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="assets/images/demos/demo-18/blog/post-2.jpg"
                                                         alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->

                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                                </div><!-- End .entry-meta -->

                                                <h5 class="entry-title">
                                                    <a href="single.html">Aenean dignissim pellente sque felis.</a>
                                                </h5><!-- End .entry-title -->

                                                <div class="entry-content">
                                                    <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a,
                                                        pede ...</p>
                                                    <a href="single.html" class="read-more">Read More</a>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </article><!-- End .entry -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- End .widget widget-posts -->
                            </div><!-- End .col-sm-6 col-lg-12 -->
                        </div><!-- End .row -->
                    </div><!-- End .sidebar sidebar-home -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->

            <hr class="mt-0 mb-4">
            <h2 class="title text-center brands">Shop by Brands</h2><!-- End .title -->

            <div class="owl-carousel mt-3 mb-4 owl-simple" data-toggle="owl"
                 data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            },
                            "1200": {
                                "items":6,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                <a href="#" class="brand">
                    <img src="assets/images/brands/1.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/2.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/3.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/4.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/5.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/6.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/7.png" alt="Brand Name">
                </a>
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </main><!-- End .main -->

    <footer class="footer footer-dark">
        <div class="icon-boxes-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-rocket"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                <p>Orders $50 or more</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-rotate-left"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                <p>Within 30 days</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-info-circle"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                <p>When you sign up</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-life-ring"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                <p>24/7 amazing services</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .icon-boxes-container -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <img src="assets/images/demos/demo-18/logo-footer.png" class="footer-logo" alt="Footer Logo"
                                 width="124" height="35">
                            <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna
                                eros eu erat. </p>

                            <div class="social-icons">
                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                        class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                        class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                        class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" title="Youtube" target="_blank"><i
                                        class="icon-youtube"></i></a>
                                <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                        class="icon-pinterest"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="about.html">About HRS</a></li>
                                <li><a href="#">How to shop on HRS</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="{{url('/login')}}">Log in</a></li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <li><a href="{{route('logout')}}">Log Out</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back guarantee!</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="{{'/login'}}">Sign In</a></li>
                                <li><a href="cart.html">View Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">Copyright © 2019 HRS Store. All Rights Reserved.</p>
                <!-- End .footer-copyright -->
                <figure class="footer-payments">
                    <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                </figure><!-- End .footer-payments -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..."
                   required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active">
                    <a href="index.html">Home</a>


                </li>
                <li>

                    <ul>
                        <li><a href="category-list.html">Shop List</a></li>
                        <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                        <li><a href="category.html">Shop Grid 3 Columns</a></li>
                        <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                        <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                                        class="tip tip-hot">Hot</span></span></a></li>
                        <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                        <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                        <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                                        class="tip tip-new">New</span></span></a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="#">Lookbook</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html" class="sf-with-ul">Product</a>
                    <ul>
                        <li><a href="product.html">Default</a></li>
                        <li><a href="productview.blade.php">Centered</a></li>
                        <li><a href="product-extended.html"><span>Extended Info<span
                                        class="tip tip-new">New</span></span></a></li>
                        <li><a href="product-gallery.html">Gallery</a></li>
                        <li><a href="product-sticky.html">Sticky Info</a></li>
                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                        <li><a href="product-fullwidth.html">Full Width</a></li>
                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li>
                            <a href="about.html">About</a>

                            <ul>
                                <li><a href="about.html">About 01</a></li>
                                <li><a href="about-2.html">About 02</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>

                            <ul>
                                <li><a href="contact.html">Contact 01</a></li>
                                <li><a href="contact-2.html">Contact 02</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/login')}}">Login</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="404.html">Error 404</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog.html">Blog</a>

                    <ul>
                        <li><a href="blog.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Single Post</a>
                            <ul>
                                <li><a href="single.html">Default with sidebar</a></li>
                                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="elements-list.html">Elements</a>
                    <ul>
                        <li><a href="elements-products.html">Products</a></li>
                        <li><a href="elements-typography.html">Typography</a></li>
                        <li><a href="elements-titles.html">Titles</a></li>
                        <li><a href="elements-banners.html">Banners</a></li>
                        <li><a href="elements-product-category.html">Product Category</a></li>
                        <li><a href="elements-video-banners.html">Video Banners</a></li>
                        <li><a href="elements-buttons.html">Buttons</a></li>
                        <li><a href="elements-accordions.html">Accordions</a></li>
                        <li><a href="elements-tabs.html">Tabs</a></li>
                        <li><a href="elements-testimonials.html">Testimonials</a></li>
                        <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                        <li><a href="elements-portfolio.html">Portfolio</a></li>
                        <li><a href="elements-cta.html">Call to Action</a></li>
                        <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab"
                                   aria-controls="signin" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                   aria-controls="register" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-5">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                 aria-labelledby="signin-tab">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="singin-email">Username or email address *</label>
                                        <input type="text" class="form-control" id="singin-email" name="singin-email"
                                               required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password">Password *</label>
                                        <input type="password" class="form-control" id="singin-password"
                                               name="singin-password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>LOG IN</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember">
                                            <label class="custom-control-label" for="signin-remember">Remember
                                                Me</label>
                                        </div><!-- End .custom-checkbox -->

                                        <a href="#" class="forgot-link">Forgot Your Password?</a>
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="register-email">Your email address *</label>
                                        <input type="email" class="form-control" id="register-email"
                                               name="register-email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="register-password">Password *</label>
                                        <input type="password" class="form-control" id="register-password"
                                               name="register-password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SIGN UP</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy"
                                                   required>
                                            <label class="custom-control-label" for="register-policy">I agree to the <a
                                                    href="#">privacy policy</a> *</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login  btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .modal-body -->
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->
<div class="col-sm-12">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.840130468329!2d88.44505931440986!3d26.038786383511727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e4ea8386fc78fd%3A0x98faaceae5048ea9!2sEco%20Pathshala%20%26%20College%2C%20Thakurgaon!5e0!3m2!1sen!2sbd!4v1622713118548!5m2!1sen!2sbd"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- Plugins JS File -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap-input-spinner.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/demos/demo-18.js"></script>
<script src="assets/js/demos/demo-18.js"></script>
</body>


<!-- HRS/index-18.html  22 Nov 2019 10:00:57 GMT -->
</html>

<!-- PAGE HOME -->
@extends('layout')
@section('content')
    @include('components.toast')
    <main class="main-wrapper">
        <div class="axil-main-slider-area main-slider-style-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-sm-6">
                        <div class="main-slider-content">
                            <div class="slider-content-activation-one">
                                @foreach ($products as $item)
                                    <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="400"
                                        data-sal-duration="800">
                                        <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                        <h1 class="title">{{ $item->product_name }}</h1>
                                        <div class="slide-action">
                                            <div class="shop-btn">
                                                <a href="shop.html" class="axil-btn btn-bg-white"><i
                                                        class="fal fa-shopping-cart"></i>Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="single-slide slick-slide">
                                    <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                    <h1 class="title">Smart Digital Watch</h1>
                                    <div class="slide-action">
                                        <div class="shop-btn">
                                            <a href="shop.html" class="axil-btn btn-bg-white"><i
                                                    class="fal fa-shopping-cart"></i>Shop Now</a>
                                        </div>
                                        <div class="item-rating">
                                            <div class="thumb">
                                                <ul>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author1.png') }}"
                                                            alt="Author"></li>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author2.png') }}"
                                                            alt="Author"></li>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author3.png') }}"
                                                            alt="Author"></li>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author4.png') }}"
                                                            alt="Author"></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <span class="rating-icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                </span>
                                                <span class="review-text">
                                                    <span>100+</span> Reviews
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide slick-slide">
                                    <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                    <h1 class="title">Roco Wireless Headphone</h1>
                                    <div class="slide-action">
                                        <div class="shop-btn">
                                            <a href="shop.html" class="axil-btn btn-bg-white"><i
                                                    class="fal fa-shopping-cart"></i>Shop Now</a>
                                        </div>
                                        <div class="item-rating">
                                            <div class="thumb">
                                                <ul>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author1.png') }}"
                                                            alt="Author"></li>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author2.png') }}"
                                                            alt="Author"></li>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author3.png') }}"
                                                            alt="Author"></li>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author4.png') }}"
                                                            alt="Author"></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <span class="rating-icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                </span>
                                                <span class="review-text">
                                                    <span>100+</span> Reviews
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide slick-slide">
                                    <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                    <h1 class="title">Smart Digital Watch</h1>
                                    <div class="slide-action">
                                        <div class="shop-btn">
                                            <a href="shop.html" class="axil-btn btn-bg-white"><i
                                                    class="fal fa-shopping-cart"></i>Shop Now</a>
                                        </div>
                                        <div class="item-rating">
                                            <div class="thumb">
                                                <ul>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author1.png') }}"
                                                            alt="Author"></li>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author2.png') }}"
                                                            alt="Author"></li>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author3.png') }}"
                                                            alt="Author"></li>
                                                    <li><img src="{{ asset('public/FrontEnd/images/others/author4.png') }}"
                                                            alt="Author"></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <span class="rating-icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fal fa-star"></i>
                                                </span>
                                                <span class="review-text">
                                                    <span>100+</span> Reviews
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-6">
                        <div class="main-slider-large-thumb">
                            <div class="slider-thumb-activation-one axil-slick-dots">
                                @foreach ($products as $item)
                                    <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="600"
                                        data-sal-duration="1500">
                                        <img src="{{ asset($item->product_image) }}" alt="Product">
                                        <div class="product-price">
                                            <span class="text">From</span>
                                            <span
                                                class="price-amount">{{ number_format($item->product_price_selling) . ' VND' }}</span>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="600"
                                    data-sal-duration="1500">
                                    <img src="{{ asset('public/FrontEnd/images/product/product-39.png') }}" alt="Product">
                                    <div class="product-price">
                                        <span class="text">From</span>
                                        <span class="price-amount">$49.00</span>
                                    </div>
                                </div>
                                <div class="single-slide slick-slide">
                                    <img src="{{ asset('public/FrontEnd/images/product/product-38.png') }}" alt="Product">
                                    <div class="product-price">
                                        <span class="text">From</span>
                                        <span class="price-amount">$49.00</span>
                                    </div>
                                </div>
                                <div class="single-slide slick-slide">
                                    <img src="{{ asset('public/FrontEnd/images/product/product-39.png') }}" alt="Product">
                                    <div class="product-price">
                                        <span class="text">From</span>
                                        <span class="price-amount">$49.00</span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1"><img src="{{ asset('public/FrontEnd/images/others/shape-1.png') }}" alt="Shape">
                </li>
                <li class="shape-2"><img src="{{ asset('public/FrontEnd/images/others/shape-2.png') }}" alt="Shape">
                </li>
            </ul>
        </div>

        <!-- Start Categorie Area  -->
        <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i> Categories</span>
                    <h2 class="title">Browse by Category</h2>
                </div>
                <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    @foreach ($categories as $item)
                        <div class="slick-single-layout">
                            <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                                <a href="{{ URL::to('danh-muc-san-pham-' . $item->category_id) }}">
                                    <img class="img-fluid" src="{{ 'public/uploads/category/' . $item->category_image }}"
                                        alt="product categorie">
                                    <h6 class="cat-title">{{ $item->category_name }}</h6>
                                </a>
                            </div>
                            <!-- End .categrie-product -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Categorie Area  -->

        <!-- Poster Countdown Area  -->
        <div class="axil-poster-countdown">
            <div class="container">
                <div class="poster-countdown-wrap bg-lighter">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="poster-countdown-content">
                                <div class="section-title-wrapper">
                                    <span class="title-highlighter highlighter-secondary"> <i
                                            class="fal fa-headphones-alt"></i> Don’t Miss!!</span>
                                    <h2 class="title">Enhance Your Music Experience</h2>
                                </div>
                                <div class="poster-countdown countdown mb--40"></div>
                                <a href="#" class="axil-btn btn-bg-primary">Check it Out!</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="poster-countdown-thumbnail">
                                <img src="{{ asset('public/FrontEnd/images/product/poster/poster-03.png') }}"
                                    alt="Poster Product">
                                <div class="music-singnal">
                                    <div class="item-circle circle-1"></div>
                                    <div class="item-circle circle-2"></div>
                                    <div class="item-circle circle-3"></div>
                                    <div class="item-circle circle-4"></div>
                                    <div class="item-circle circle-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Poster Countdown Area  -->

        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our
                        Products</span>
                    <h2 class="title">Explore our Products</h2>
                </div>
                <div
                    class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="row row--15">
                            @foreach ($products as $product_item)
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                    <div class="axil-product product-style-one">
                                        <div class="thumbnail">
                                            <a href="{{ URL::to('san-pham-' . $product_item->product_id) }}">
                                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                                    loading="lazy" class="main-img"
                                                    src="{{ asset($product_item->product_image) }}" alt="Product Images">
                                                <img class="hover-img"
                                                    src="{{ asset($product_item->productImages->first()->image_name ?? $product_item->product_image) }}"
                                                    alt="Product Images">
                                            </a>
                                            <div class="label-block label-right">
                                                <div class="product-badget">
                                                    {{ round((($product_item->product_price_original - $product_item->product_price_selling) / $product_item->product_price_original) * 100) }}%
                                                    Off</div>
                                            </div>
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    <li class="quickview">
                                                        <a href="#" class="quick-view-button"
                                                            data-bs-toggle="modal" data-bs-target="#quick-view-modal"
                                                            data-id="{{ $product_item->product_id }}">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li class="select-option">
                                                        <a href="{{ URL::to('gio-hang') }}" class="add-cart-item"
                                                            data-product-id="{{ $product_item->product_id }}">
                                                            Add to Cart
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#" class="add-to-wishlist"
                                                            data-product-id="{{ $product_item->product_id }}">
                                                            <i class="far fa-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">

                                                <h5 class="title">
                                                    <a href="product-detail/">
                                                        {{ $product_item->product_name }}
                                                    </a><br>
                                                    ({{ $product_item->category->category_name }})
                                                </h5>
                                                <div class="product-price-variant">
                                                    <span class="price current-price">$
                                                        {{ number_format($product_item->product_price_selling) }}
                                                    </span>
                                                    <span class="price old-price">$
                                                        {{ number_format($product_item->product_price_original) }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="row row--15">
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="single-product.html">
                                            <img src="{{ asset('public/FrontEnd/images/product/electric/product-01.png') }}"
                                                alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Select Option</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="single-product.html">Yantiti Leather & Canvas
                                                    Bags</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product  -->
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="single-product.html">
                                            <img src="{{ asset('public/FrontEnd/images/product/electric/product-02.png') }}"
                                                alt="Product Images">
                                        </a>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Select Option</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant">
                                                    <li class="color-extra-01 active"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product  -->
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="single-product.html">
                                            <img src="{{ asset('public/FrontEnd/images/product/electric/product-03.png') }}"
                                                alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Select Option</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant">
                                                    <li class="color-extra-01 active"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product  -->
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="single-product.html">
                                            <img src="{{ asset('public/FrontEnd/images/product/electric/product-04.png') }}"
                                                alt="Product Images">
                                        </a>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Select Option</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product  -->
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="single-product.html">
                                            <img src="{{ asset('public/FrontEnd/images/product/electric/product-05.png') }}"
                                                alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Select Option</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant">
                                                    <li class="color-extra-01 active"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product  -->
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="single-product.html">
                                            <img src="{{ asset('public/FrontEnd/images/product/electric/product-06.png') }}"
                                                alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Select Option</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant">
                                                    <li class="color-extra-01 active"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product  -->
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="single-product.html">
                                            <img src="{{ asset('public/FrontEnd/images/product/electric/product-07.png') }}"
                                                alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Select Option</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant">
                                                    <li class="color-extra-01 active"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product  -->
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="single-product.html">
                                            <img src="{{ asset('public/FrontEnd/images/product/electric/product-08.png') }}"
                                                alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Select Option</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant">
                                                    <li class="color-extra-01 active"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product  -->

                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt--20 mt_sm--0">
                        <a href="{{ URL::to('danh-sach-san-pham') }}" class="axil-btn btn-bg-lighter btn-load-more">View
                            All Products</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Expolre Product Area  -->

        <!-- Start Testimonila Area  -->
        <div class="axil-testimoial-area axil-section-gap bg-vista-white">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"> <i
                            class="fal fa-quote-left"></i>Testimonials</span>
                    <h2 class="title">Users Feedback</h2>
                </div>
                <!-- End .section-title -->
                <div
                    class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="{{ asset('public/FrontEnd/images/testimonial/image-1.png') }}"
                                    alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="{{ asset('public/FrontEnd/images/testimonial/image-2.png') }}"
                                    alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="{{ asset('public/FrontEnd/images/testimonial/image-3.png') }}"
                                    alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="{{ asset('public/FrontEnd/images/testimonial/image-2.png') }}"
                                    alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->

                </div>
            </div>
        </div>
        <!-- End Testimonila Area  -->

        <!-- Start New Arrivals Product Area  -->
        <div class="axil-new-arrivals-product-area bg-color-white axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i>This
                            Week’s</span>
                        <h2 class="title">New Arrivals</h2>
                    </div>
                    <div
                        class="new-arrivals-product-activation slick-layout-wrapper--30 axil-slick-arrow  arrow-top-slide">
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-two">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-05.png') }}"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">10% OFF</div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Demon's Souls</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$40</span>
                                            <span class="price current-price">$30</span>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Add to Cart</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-two">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="300" data-sal-duration="500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-06.png') }}"
                                            alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Google Home</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$50</span>
                                            <span class="price current-price">$40</span>
                                        </div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                            <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                        class="far fa-heart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-two">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-07.png') }}"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">15% OFF</div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Netfilx Remot</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$60</span>
                                            <span class="price current-price">$45</span>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Add to Cart</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-two">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="500" data-sal-duration="500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-08.png') }}"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">30% OFF</div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Digital Accessories</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$30</span>
                                            <span class="price current-price">$20</span>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Add to Cart</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-two">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-04.png') }}"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">50% OFF</div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">PS5 Smart Remote</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$50</span>
                                            <span class="price current-price">$25</span>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="select-option"><a href="single-product.html">Add to Cart</a>
                                                </li>
                                                <li class="wishlist"><a href="{{ URL::to('show-wishlist') }}"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End New Arrivals Product Area  -->

        <!-- Start Most Sold Product Area  -->
        <div class="axil-most-sold-product axil-section-gap">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper section-title-center">
                        <span class="title-highlighter highlighter-primary"><i class="fas fa-star"></i> Most Sold</span>
                        <h2 class="title">Most Sold in eTrade Store</h2>
                    </div>
                    <div class="row row-cols-xl-2 row-cols-1 row--15">
                        <div class="col">
                            <div class="axil-product-list">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-in" data-sal-delay="100" data-sal-duration="1500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-09.png') }}"
                                            alt="Yantiti Leather Bags">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <span class="rating-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </span>
                                        <span class="rating-number"><span>100+</span> Reviews</span>
                                    </div>
                                    <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="product-cart">
                                        <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="{{ URL::to('show-wishlist') }}" class="cart-btn"><i
                                                class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="axil-product-list">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-in" data-sal-delay="200" data-sal-duration="1500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-10.png') }}"
                                            alt="Yantiti Leather Bags">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <span class="rating-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </span>
                                        <span class="rating-number"><span>50+</span> Reviews</span>
                                    </div>
                                    <h6 class="product-title"><a href="single-product.html">HD Camera</a></h6>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$49.99</span>
                                    </div>
                                    <div class="product-cart">
                                        <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="{{ URL::to('show-wishlist') }}" class="cart-btn"><i
                                                class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="axil-product-list">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-in" data-sal-delay="300" data-sal-duration="1500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-11.png') }}"
                                            alt="Yantiti Leather Bags">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <span class="rating-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </span>
                                        <span class="rating-number"><span>120+</span> Reviews</span>
                                    </div>
                                    <h6 class="product-title"><a href="single-product.html">Gaming Controller</a></h6>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$50.00</span>
                                    </div>
                                    <div class="product-cart">
                                        <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="{{ URL::to('show-wishlist') }}" class="cart-btn"><i
                                                class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="axil-product-list">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-in" data-sal-delay="400" data-sal-duration="1500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-12.png') }}"
                                            alt="Yantiti Leather Bags">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <span class="rating-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </span>
                                        <span class="rating-number"><span>30+</span> Reviews</span>
                                    </div>
                                    <h6 class="product-title"><a href="single-product.html">Wall Mount </a></h6>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$19.00</span>
                                    </div>
                                    <div class="product-cart">
                                        <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="{{ URL::to('show-wishlist') }}" class="cart-btn"><i
                                                class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="axil-product-list">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-in" data-sal-delay="500" data-sal-duration="1500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-13.png') }}"
                                            alt="Yantiti Leather Bags">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <span class="rating-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </span>
                                        <span class="rating-number"><span>700+</span> Reviews</span>
                                    </div>
                                    <h6 class="product-title"><a href="single-product.html">Lenevo Laptop</a></h6>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$999.99</span>
                                    </div>
                                    <div class="product-cart">
                                        <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="{{ URL::to('show-wishlist') }}" class="cart-btn"><i
                                                class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="axil-product-list">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-in" data-sal-delay="600" data-sal-duration="1500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-14.png') }}"
                                            alt="Yantiti Leather Bags">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <span class="rating-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </span>
                                        <span class="rating-number"><span>300+</span> Reviews</span>
                                    </div>
                                    <h6 class="product-title"><a href="single-product.html">Juice Grinder Machine</a>
                                    </h6>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$99.00</span>
                                    </div>
                                    <div class="product-cart">
                                        <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="{{ URL::to('show-wishlist') }}" class="cart-btn"><i
                                                class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="axil-product-list">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-in" data-sal-delay="400" data-sal-duration="1500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-15.png') }}"
                                            alt="Yantiti Leather Bags">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <span class="rating-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </span>
                                        <span class="rating-number"><span>100+</span> Reviews</span>
                                    </div>
                                    <h6 class="product-title"><a href="single-product.html">Wireless Headphone</a></h6>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$59.99</span>
                                    </div>
                                    <div class="product-cart">
                                        <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="{{ URL::to('show-wishlist') }}" class="cart-btn"><i
                                                class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="axil-product-list">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-in" data-sal-delay="500" data-sal-duration="1500"
                                            src="{{ asset('public/FrontEnd/images/product/electric/product-16.png') }}"
                                            alt="Yantiti Leather Bags">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <span class="rating-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </span>
                                        <span class="rating-number"><span>100+</span> Reviews</span>
                                    </div>
                                    <h6 class="product-title"><a href="single-product.html">Asus Zenbook Laptop</a></h6>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$899.00</span>
                                    </div>
                                    <div class="product-cart">
                                        <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="{{ URL::to('show-wishlist') }}" class="cart-btn"><i
                                                class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Most Sold Product Area  -->

        <!-- Start Why Choose Area  -->
        <div class="axil-why-choose-area pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper section-title-center">
                    <span class="title-highlighter highlighter-secondary"><i class="fal fa-thumbs-up"></i>Why Us</span>
                    <h2 class="title">Why People Choose Us</h2>
                </div>
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('public/FrontEnd/images/icons/service6.png') }}" alt="Service">
                            </div>
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('public/FrontEnd/images/icons/service7.png') }}" alt="Service">
                            </div>
                            <h6 class="title">100% Guarantee On Product</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('public/FrontEnd/images/icons/service8.png') }}" alt="Service">
                            </div>
                            <h6 class="title">24 Hour Return Policy</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('public/FrontEnd/images/icons/service9.png') }}" alt="Service">
                            </div>
                            <h6 class="title">24 Hour Return Policy</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('public/FrontEnd/images/icons/service10.png') }}" alt="Service">
                            </div>
                            <h6 class="title">Next Level Pro Quality</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Area  -->


        <!-- Start Axil Product Poster Area  -->
        <div class="axil-poster">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb--30">
                        <div class="single-poster">
                            <a href="shop.html">
                                <img src="{{ asset('public/FrontEnd/images/product/poster/poster-01.png') }}"
                                    alt="eTrade promotion poster">
                                <div class="poster-content">
                                    <div class="inner">
                                        <h3 class="title">Rich sound, <br> for less.</h3>
                                        <span class="sub-title">Collections <i class="fal fa-long-arrow-right"></i></span>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                    <div class="col-lg-6 mb--30">
                        <div class="single-poster">
                            <a href="shop-sidebar.html">
                                <img src="{{ asset('public/FrontEnd/images/product/poster/poster-02.png') }}"
                                    alt="eTrade promotion poster">
                                <div class="poster-content content-left">
                                    <div class="inner">
                                        <span class="sub-title">50% Offer In Winter</span>
                                        <h3 class="title">Get VR <br> Reality Glass</h3>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Axil Product Poster Area  -->

        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i
                                class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->

    </main>

    <script>
        $(document).on('click', '.header-search-icon', function(e) {
            e.preventDefault();
            var product_id = $(this).data('id');
            // alert(product_id);

            $.ajax({
                url: 'product-detail/' + product_id,
                method: 'GET',
                success: function(data) {
                    // alert(data.product_name);
                    $('#quick-view-modal .view-product-title').text(data.product.product_name);
                    $('#quick-view-modal .view-price-amount')
                        .text(number_format(data.product.product_price_selling) + ' VND');

                    $('#quick-view-modal .view-description').text(data.product.product_description);
                    $('#quick-view-modal .view-picture').attr('src', data.product.product_image);
                    var originalPrice = data.product.product_price_original;
                    var sellingPrice = data.product.product_price_selling;
                    var discountPercentage = Math.round(((originalPrice - sellingPrice) /
                        originalPrice) * 100);
                    if (originalPrice > 0) {
                        $('#quick-view-modal .view-discount').text(discountPercentage + '% Off');
                    } else {
                        $('#quick-view-modal .view-discount').text('No Discount Available');
                    }

                },
                error: function() {
                    alert('Lỗi rồi nha cu');
                }
            });
        });

        function number_format(number, decimals = 2, decPoint = '.', thousandsSep = ',') {
            number = parseFloat(number).toFixed(decimals);
            const parts = number.split('.');
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandsSep);

            return parts[1] === '00' ? parts[0] : parts.join(decPoint);
        }
        $(document).on('click', '.add-to-wishlist', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>

            var button = $(this);
            var productId = $(this).data('product-id');
            $.ajax({
                type: 'POST',
                url: '{{ route('addToWishlist') }}',
                data: {
                    product_id: productId,
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    if (response.success) {
                        showToast(response.message, {
                            gravity: 'top',
                            position: 'right',
                            duration: 3000,
                            close: false,
                            backgroundColor: '#28a745'
                        });
                    } else {
                        showToast(response.error, {
                            gravity: 'top',
                            position: 'right',
                            duration: 3000,
                            close: false,
                            backgroundColor: '#dc3545'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    // showToast(error, {
                    //     gravity: 'top',
                    //     position: 'right',
                    //     duration: 3000,
                    //     close: true,
                    //     backgroundColor: '#dc3545'
                    // });
                    // alert('Error adding product to wishlist:', error);
                    // console.log(xhr.responseText); // Log the entire response for more details
                }
            });
        });

        function showToast(text, options) {
            Toastify({
                text: text,
                gravity: options.gravity,
                position: options.position,
                duration: options.duration,
                close: false,
                backgroundColor: options.backgroundColor,
            }).showToast();
        }
    </script>
@endsection

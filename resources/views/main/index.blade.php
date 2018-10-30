@extends ('layouts.master')

@section ('content')
    @include('layouts.modal')


    <div class="wrapper home-4">
    @include('layouts.header')

    <!-- slider-main-area start -->
        <div class="slider-main-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="slider-active owl-carousel">
                            <div class="slider-wrapper-4" style="background-image:url(img/slider/home-04-1.jpg)">
                                <div class="row">
                                    <div class="col-lg-6 offset-md-1 col-md-8 col-12">
                                        <div class="slider-text-info style-4 slider-text-animation">
                                            <h2 class="title1">handbag for men’s 2018</h2>
                                            <h1 class="sub-title">Drawstring Backpack In Black</h1>
                                            <div class="slider-1-des">
                                                <p>Boston based brand, New Balance began life in the 1900s as an arch
                                                    support company. </p>
                                            </div>
                                            <div class="slier-btn-1">
                                                <a title="shop now" href="#" class="btn">shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-wrapper-4" style="background-image:url(img/slider/home-04-2.jpg)">
                                <div class="row">
                                    <div class="col-lg-6 offset-md-1 col-md-8 col-12">
                                        <div class="slider-text-info style-4  slider-text-animation">
                                            <h2 class="title1">SPRING for men’s 2018</h2>
                                            <h1 class="sub-title">Spiral Classic handbag In Navy 2018</h1>
                                            <div class="slider-1-des">
                                                <p>Bored with the basic backpack, Spiral's bags pack a punch with bold,
                                                    striking designs.</p>
                                            </div>
                                            <div class="slier-btn-1">
                                                <a title="shop now" href="#" class="btn">shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-main-area start -->

        <!-- banner-area start -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner-static mt-30">
                            <a href="#">
                                <img src="img/banner/11.jpg" alt="">
                                <span class="static-banner-text">
                                        <span class="text1">hand bags</span>
                                        <span class="text2">New collection</span>
                                    </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner-static mt-30">
                            <a href="#">
                                <img src="img/banner/9.jpg" alt="">
                                <span class="static-banner-text">
                                        <span class="text1">watches</span>
                                        <span class="text2">Sale up to 70%  off</span>
                                    </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner-static mt-30">
                            <a href="#">
                                <img src="img/banner/10.jpg" alt="">
                                <span class="static-banner-text">
                                        <span class="text1">Accessories</span>
                                        <span class="text2">Free shipping</span>
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area end -->

    @include ('layouts.carousel')

    <!-- banner-area start -->
        <div class="banner-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="single-banner-static">
                            <a href="#">
                                <img src="img/banner/12.jpg" alt="">
                                <span class="banner-text-right text-center">
                                        <span class="text1">exclusive backpack</span>
                                        <span class="text2">best products for women & men</span>
                                        <span class="link">view our collection</span>
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area end -->

        <!-- product-area start -->
        <div class="product-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title-2">
                            <div class="tabs-categorys-list">
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active"><a href="#body" aria-controls="body"
                                                                              role="tab"
                                                                              data-toggle="tab"> Body</a></li>
                                    <li role="presentation"><a href="#hands" aria-controls="hands" role="tab"
                                                               data-toggle="tab">Hands </a></li>
                                    <li role="presentation"><a href="#neck" aria-controls="neck" role="tab"
                                                               data-toggle="tab">Neck</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="body">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/12.jpg" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    023</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$99.00</span>
                                                <span class="old-price">$110.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/17.jpg" alt="">
                                                <img class="secondary-image" src="img/product/18.jpg" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    003</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$99.00</span>
                                                <span class="old-price">$110.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/10.jpg" alt="">
                                            </a>
                                            <div class="label-product label_sale">Sale!</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    008</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$98.00</span>
                                                <span class="old-price">$122.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/20.jpg" alt="">
                                                <img class="secondary-image" src="img/product/18.jpg" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    003</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$100.00</span>
                                                <span class="old-price">$140.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/21.jpg" alt="">
                                            </a>
                                            <div class="label-product label_sale">Sale!</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    006</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$98.00</span>
                                                <span class="old-price">$122.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="hands">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/10.jpg" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    023</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$99.00</span>
                                                <span class="old-price">$110.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/12.jpg" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    003</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$99.00</span>
                                                <span class="old-price">$110.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/11.jpg" alt="">
                                            </a>
                                            <div class="label-product label_sale">Sale!</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    008</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$98.00</span>
                                                <span class="old-price">$122.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/14.jpg" alt="">
                                                <img class="secondary-image" src="img/product/15.jpg" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    003</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$100.00</span>
                                                <span class="old-price">$140.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/13.jpg" alt="">
                                            </a>
                                            <div class="label-product label_sale">Sale!</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    006</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$98.00</span>
                                                <span class="old-price">$122.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="neck">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/16.jpg" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    023</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$99.00</span>
                                                <span class="old-price">$110.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/17.jpg" alt="">
                                                <img class="secondary-image" src="img/product/18.jpg" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    003</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$99.00</span>
                                                <span class="old-price">$110.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/19.jpg" alt="">
                                            </a>
                                            <div class="label-product label_sale">Sale!</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    008</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$98.00</span>
                                                <span class="old-price">$122.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/20.jpg" alt="">
                                                <img class="secondary-image" src="img/product/18.jpg" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    003</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$100.00</span>
                                                <span class="old-price">$140.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="img/product/13.jpg" alt="">
                                            </a>
                                            <div class="label-product label_sale">Sale!</div>
                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="single-product.html">Simple Product
                                                    006</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">$98.00</span>
                                                <span class="old-price">$122.00</span>
                                            </div>
                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-area end -->

        <!-- latest-blog-area start -->
        <div class="latest-blog-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title-2">
                            <h2>Unique blog style </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="latest-blog-active owl-carousel">
                        <div class="col">
                            <div class="singel-latest-blog">
                                <div class="aritcles-content">
                                    <div class="author-name">
                                        post by:<a href="#"> Author Name</a> - 30 Oct 2018
                                    </div>
                                    <a href="blog-details.html" class="articles-name">Best of Hair & Makeup New York
                                        Spring/Summer 2018 - 360° Experience</a>
                                </div>
                                <div class="articles-image">
                                    <a href="blog-details.html">
                                        <img src="img/blog/1.jpg" alt="">
                                        <span class="blog-action">
                                                <i class="icon-picture icons"></i>
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="singel-latest-blog">
                                <div class="aritcles-content">
                                    <div class="author-name">
                                        post by:<a href="#"> Author Name</a> - 11 may 2018
                                    </div>
                                    <a href="blog-details.html" class="articles-name">Best of Hair & Makeup New York
                                        Spring/Summer 2016 - 360° Experience</a>
                                </div>
                                <div class="articles-image">
                                    <a href="blog-details.html">
                                        <img src="img/blog/2.jpg" alt="">
                                        <span class="blog-action">
                                                <i class="icon-picture icons"></i>
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="singel-latest-blog">
                                <div class="aritcles-content">
                                    <div class="author-name">
                                        post by:<a href="#"> Author Name</a> - 25 July 2018
                                    </div>
                                    <a href="blog-details.html" class="articles-name">London Fashion Week 360° Candy
                                        Rock &
                                        Royal Fashion Day</a>
                                </div>
                                <div class="articles-image">
                                    <a href="blog-details.html">
                                        <img src="img/blog/3.jpg" alt="">
                                        <span class="blog-action">
                                                <i class="icon-picture icons"></i>
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="singel-latest-blog">
                                <div class="aritcles-content">
                                    <div class="author-name">
                                        post by:<a href="#"> Author Name</a> - 21 Jun 2018
                                    </div>
                                    <a href="blog-details.html" class="articles-name">Mercedes Benz Fashion Week –
                                        Mirror To
                                        The Soul 360• Experience</a>
                                </div>
                                <div class="articles-image">
                                    <a href="blog-details.html">
                                        <img src="img/blog/4.jpg" alt="">
                                        <span class="blog-action">
                                                <i class="icon-picture icons"></i>
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest-blog-area end -->

        <!-- our-brand-area start -->
        <div class="our-brand-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="our-brand-active border-area owl-carousel ptb-50">
                            <div class="brand-single-item">
                                <a href="#"><img src="img/brand/1.jpg" alt=""></a>
                            </div>
                            <div class="brand-single-item">
                                <a href="#"><img src="img/brand/2.jpg" alt=""></a>
                            </div>
                            <div class="brand-single-item">
                                <a href="#"><img src="img/brand/3.jpg" alt=""></a>
                            </div>
                            <div class="brand-single-item">
                                <a href="#"><img src="img/brand/4.jpg" alt=""></a>
                            </div>
                            <div class="brand-single-item">
                                <a href="#"><img src="img/brand/5.jpg" alt=""></a>
                            </div>
                            <div class="brand-single-item">
                                <a href="#"><img src="img/brand/6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our-brand-area end -->
        <!-- footer-area start -->
        <footer class="footer-area bg-black mt-100">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- footer-top start -->
                        <div class="footer-top">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="footer-content mb-30">
                                        <a href="index-2.html" class="logo-footer"><img alt="logo-footer"
                                                                                        src="img/logo/logo-2.png"></a>
                                        <ul class="footer-contact">
                                            <li class="address">Address : No 40 Baria Sreet 133/2,
                                                NewYork, USA.
                                            </li>
                                            <li class="phone">Phone: +(1234) 567 890</li>
                                            <li class="email">Email: Infor@t90.com</li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-footer-wrap mb-30">
                                        <div class="footer-title"><h5>Information</h5></div>
                                        <div class="footer-content">
                                            <ul class="text-content">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Delivery Information</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms &amp; Conditions</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-footer-wrap mb-30">
                                        <div class="footer-title"><h5>Extras</h5></div>
                                        <div class="footer-content">
                                            <ul class="text-content">
                                                <li><a href="#">Brands</a></li>
                                                <li><a href="#">Gift Certificates</a></li>
                                                <li><a href="#">Affiliate</a></li>
                                                <li><a href="#">Specials</a></li>
                                                <li><a href="#">Returns</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-footer-wrap mb-30">
                                        <div class="footer-title"><h5>Follow us</h5></div>
                                        <div class="footer-content">
                                            <ul class="text-content">
                                                <li><a href="#">twitter</a></li>
                                                <li><a href="#"> google</a></li>
                                                <li><a href="#">facebook</a></li>
                                                <li><a href="#">youtube</a></li>
                                                <li><a href="#">Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer-top end -->
                    </div>
                </div>
            </div>
            <!-- footer-bottom end -->
            <!-- footer-bottom start -->
            <div class="footer-bottom border-top-dashed">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="footer-copyright">
                                <p>Copyright &copy; 2018 <a href="#">T90 Themes</a> <span>All Right Reserved.</span></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="footer-payment">
                                <img src="img/icon/payment.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom end -->
        </footer>
        <!-- footer-area end -->

    </div>
@endsection
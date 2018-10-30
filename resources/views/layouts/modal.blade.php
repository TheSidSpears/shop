<!-- product-area start -->
<div class="modal fade modal-wrapper" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-inner-area row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-product-tab">
                            <div class="zoomWrapper">
                                <div id="img-1" class="zoomWrapper single-zoom">
                                    <a href="#">
                                        <img id="zoom1" src="img/product/1.jpg"
                                             data-zoom-image="img/product/1.jpg"
                                             alt="big-1">
                                    </a>
                                </div>
                                <div class="single-zoom-thumb">
                                    <ul class="s-tab-zoom single-product-active owl-carousel" id="gallery_01">
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update=""
                                               data-image="img/product/1.jpg"
                                               data-zoom-image="img/product/1.jpg"><img src="img/product/1.jpg"
                                                                                        alt="zo-th-1"/></a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="elevatezoom-gallery"
                                               data-image="img/product/2.jpg"
                                               data-zoom-image="img/product/2.jpg"><img src="img/product/2.jpg"
                                                                                        alt="zo-th-2"></a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="elevatezoom-gallery"
                                               data-image="img/product/3.jpg"
                                               data-zoom-image="img/product/3.jpg"><img src="img/product/3.jpg"
                                                                                        alt="ex-big-3"/></a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="elevatezoom-gallery"
                                               data-image="img/product/4.jpg"
                                               data-zoom-image="img/product/4.jpg"><img src="img/product/4.jpg"
                                                                                        alt="zo-th-4"></a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="elevatezoom-gallery"
                                               data-image="img/product/5.jpg"
                                               data-zoom-image="img/product/5.jpg"><img src="img/product/5.jpg"
                                                                                        alt="zo-th-5"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!-- product-thumbnail-content start -->
                        <div class="quick-view-content">
                            <div class="product-info">
                                <h2>Product Name use hear</h2>
                                <div class="rating-box">
                                    <ul class="rating d-flex">
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                </div>

                                {{--@include('layouts.price_box', [$product])--}}

                                <ul class="list-unstyled">
                                    <li>Brand: <a href="#">Hewlett-Packard</a></li>
                                    <li>Product Code: Digital</li>
                                    <li>Reward Points: 1000</li>
                                    <li>Availability: <span class="stock">In Stock</span></li>
                                </ul>
                                <div class="available-color">
                                    <h3>available color</h3>
                                    <ul class="color-list">
                                        <li class="active"><a class="orange" href="#"></a></li>
                                        <li><a class="paste" href="#"></a></li>
                                    </ul>
                                </div>
                                <form class="modal-cart">
                                    <div class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input type="number" value="1" min="0" step="1" class="input-box">
                                        </div>
                                    </div>
                                </form>
                                <ul class="quick-add-to-cart">
                                    <li><a href="#" class="add-to-cart"><i class="icon-basket-loaded"></i> Add
                                            to
                                            cart</a></li>
                                    <li><a class="wishlist-btn" href="#"><i class="icon-heart"></i></a></li>
                                    <li><a class="compare-btn" href="#"><i class="icon-refresh"></i></a></li>
                                </ul>
                                <p>Tags: <a href="#">Movado</a>,<a href="#">Omega</a><a href="#"></a></p>
                            </div>
                        </div>
                        <!-- product-thumbnail-content end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
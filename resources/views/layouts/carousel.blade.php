<!-- product-area start -->
<div class="product-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title-2">
                    <div class="tabs-categorys-list">

                        <ul class="nav" role="tablist">
                            @foreach($idList as $id)
                                <li role="presentation" class="active">
                                    <a href="#{{ $id }}" aria-controls="{{ $id }}" role="tab" data-toggle="tab">
                                        {{ $nameFor($id) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">

            @foreach($idList as $id)
                <div role="tabpanel" class="tab-pane" id="{{ $id }}">
                    <div class="row">
                        <div class="product-active owl-carousel">

                            @foreach($productsFor($id) as $product)
                                <div class="col-lg-3">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area">
                                        <div class="product-thumb">
                                            <a href="single-product.html">
                                                <img class="primary-image" src="{{ $product->imagePath() }}"
                                                     alt="">
                                            </a>

                                            @if($product->isOnSale())
                                                <div class="label-product label_sale">Sale!</div>
                                            @endif

                                            @if($product->isNew())
                                                <div class="label-product label_new">New</div>
                                            @endif

                                            <div class="action-links">
                                                <a href="#" class="wishlist-btn" title="Add to Wish List"><i
                                                            class="icon-heart"></i></a>
                                                <a href="#" class="compare-btn" title="Compare this Product"><i
                                                            class="icon-refresh"></i></a>
                                                <a href="#" class="quick-view" title="Quick View"
                                                   data-toggle="modal"
                                                   data-target="#exampleModalCenter"><i
                                                            class="icon-magnifier icons"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a
                                                        href="single-product.html">{{ $product->name }}</a>
                                            </h4>

                                            @include('components.price_box', [$product])

                                            <a href="#" class="action-cart-btn">
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product-area end -->
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- product-area end -->
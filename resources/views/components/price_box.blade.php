<div class="price-box">
    @if($product->isOnSale())
        <span class="new-price">${{ $product->discount }}</span>
        <span class="old-price">${{ $product->price }}</span>
    @else
        <span class="new-price">${{ $product->price }}</span>
    @endif
</div>
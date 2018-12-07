<div class="product-sec1">
    <h3 class="heading-tittle">Filtered Products</h3>
    
    @foreach ($Products as $product)
    <div class="col-md-4 product-men">
        <div class="men-pro-item simpleCart_shelfItem">
                <br>
            <div class="men-thumb-item">
                <img src="{{ asset($product->product_image)}}" alt="" height="200" width="140">
                <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                        <a href="{{route('product-details',['id'=>$product->id])}}" class="link-product-add-cart">Quick View</a>
                    </div>
                </div>
                <span class="product-new-top">New</span>
            </div>
            <div class="item-info-product ">
                <h4>
                    <a href="{{route('product-details',['id'=>$product->id])}}">{{ $product->product_name}}</a>
                </h4>
                <div class="info-product-price">
                    <span class="item_price">${{ $product->product_price }}</span>
                    <del>$280.00</del>
                </div>

                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <button onclick="cart(this.value)" type="submit" id="{{$product->id}}" value="{{ $product->id }}" class="button">Add to <i class="fa fa-heart-o" aria-hidden="true"></i></button>
                    <button style="display:none" id="{{'modal'.$product->id}}" data-toggle="modal" data-target=".bd-example-modal-lg"></button>
                </div>


            </div>
        </div>
    </div>
    @endforeach
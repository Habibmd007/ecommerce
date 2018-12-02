<div class="agileinfo-ads-display col-md-9">
    <div class="wrapper filter_data">


        <!-- first section (nuts) -->
        <div class="product-sec1">
                <h3 class="heading-tittle">Groceries & Pets</h3>
                @foreach ($products as $product)
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{ $product->product_image}}" alt="" height="200" width="140">
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



            <div class="clearfix"></div>
        </div>
        <!-- //first section (nuts) -->


    <!-- second section (nuts special) -->
        <div class="product-sec1 product-sec2">
            <div class="col-xs-7 effect-bg">
                <h3 class="">Pure Energy</h3>
                <h6>Enjoy our all healthy Products</h6>
                <p>Get Extra 10% Off</p>
            </div>
            <h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
            <div class="col-xs-5 bg-right-nut">
                <img src="{{ asset('/') }}fron/images/nut1.png" alt="">
            </div>
            <div class="clearfix"></div>
        </div>
    <!-- //second section (nuts special) -->



        <!-- third section (oils) -->
        <div class="product-sec1">
            <h3 class="heading-tittle">Mens Fasion</h3>
            
            @foreach ($products_oils as $products_oil)
            
            <div class="col-md-4 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ $products_oil->product_image}}" alt="" height="200" width="140">
                       
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="{{route('product-details',['id'=>$products_oil->id])}}" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4>
                            <a href="{{route('product-details',['id'=>$products_oil->id])}}">{{ $products_oil->product_name }}</a>
                        </h4>
                        <div class="info-product-price">
                            <span class="item_price">${{ $products_oil->product_price }}</span>
                            <del>$110.00</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <button onclick="cart(this.value)" type="submit" id="{{ $products_oil->id }}"  value="{{ $products_oil->id }}" class="button ">Add to <i class="fa fa-heart-o" aria-hidden="true"></i></button>
                                <button style="display:none" id="{{'modal'.$products_oil->id}}" data-toggle="modal" data-target=".bd-example-modal-lg"></button>
                        </div>


                    </div>
                </div>
            </div>
            @endforeach



            
            
            <div class="clearfix"></div>
        </div>



        <!-- //third section (oils) -->
        <!-- fourth section (noodles) -->
        <div class="product-sec1">
            <h3 class="heading-tittle">Electronics Devices</h3>

            @foreach ($products_pastas as $products_pasta)
                
           
            <div class="col-md-4 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ $products_pasta->product_image }}" alt="" height="200" width="140" >
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="{{route('product-details',['id'=>$products_pasta->id])}}" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <div class="item-info-product ">
                        <h4>
                            <a href="{{route('product-details',['id'=>$products_pasta->id])}}">{{ $products_pasta->product_name }}</a>
                        </h4>
                        <div class="info-product-price">
                            <span class="item_price">{{ $products_pasta->product_price }}</span>
                            <del>$25.00</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <button onclick="cart(this.value)" type="submit" id="{{ $products_pasta->id }}" value="{{ $products_pasta->id }}" class="button ">Add to <i class="fa fa-heart-o" aria-hidden="true"></i></button>
                                <button style="display:none" id="{{'modal'.$products_pasta->id}}" data-toggle="modal" data-target=".bd-example-modal-lg"></button>
                                
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach


            
            <div class="clearfix"></div>
        </div>
        <!-- //fourth section (noodles) -->
    </div>
</div>
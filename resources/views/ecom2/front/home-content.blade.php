<div class="agileinfo-ads-display col-md-9">
    <div class="wrapper filter_data">


        <!-- first section (nuts) -->
        <div class="product-sec1">
                <h3 class="heading-tittle">Nuts</h3>
                @for ($i = 1; $i < 4; $i++)
                    @for ($i = 1; $i < 4; $i++)
                        
                    @endfor
                    
                @endfor
                
                @foreach ($products as $product)
                
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            
                            <img src="{{ $product->product_image}}" alt="" height="200" width="200">
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
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Almonds, 100g" />
                                        <input type="hidden" name="amount" value="149.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
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
            <h3 class="heading-tittle">Oils</h3>
            
            @foreach ($products_oils as $products_oil)
            
            <div class="col-md-4 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ $products_oil->product_image}}" alt="" height="200" width="200">
                       
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="{{route('product-details',['id'=>$products_oil->id])}}" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4>
                            <a href="{{route('product-details',['id'=>$products_oil->id])}}">{{ $products_oil->product_name }}Name</a>
                        </h4>
                        <div class="info-product-price">
                            <span class="item_price">${{ $products_oil->product_price }}</span>
                            <del>$110.00</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="Freedom Sunflower Oil, 1L" />
                                    <input type="hidden" name="amount" value="78.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                </fieldset>
                            </form>
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
            <h3 class="heading-tittle">{{ $category->category_name}}</h3>

            @foreach ($products_pastas as $products_pasta)
                
           
            <div class="col-md-4 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ $products_pasta->product_image }}" alt="">
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
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="YiPPee Noodles, 65g" />
                                    <input type="hidden" name="amount" value="15.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                </fieldset>
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
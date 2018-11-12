@extends('ecom2.front.master')

@section('title')
    Beckary
@endsection

@section('body')
<div class="page-head_agile_info_w3l">

</div>
<!-- //banner-2 -->


<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="{{ route('/') }}">Home</a>
                    <i>|</i>
                </li>
                <li>{{ $category->category_name }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- top Products -->
<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">{{ $category->category_name }}
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->


        <!-- product left -->
        @include('ecom2.front.left-tab')
        
        <!-- //product left -->



        <!-- product right -->
        
        <div class="agileinfo-ads-display col-md-9 w3l-rightpro">
            <div class="wrapper">

                <!-- first section -->
                <div class="product-sec1">
                    @foreach ($products  as $product )
                    <div class="col-xs-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset($product->product_image) }}" alt="" height="200">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{route('product-details',['id'=>$product->id])}}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="{{route('product-details',['id'=>$product->id])}}">{{ $product->product_name }}</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">${{ $product->product_price }}</span>
                                    <del>$1020.00</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Zeeba Basmati Rice - 5 KG" />
                                            <input type="hidden" name="amount" value="950.00" />
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
                   
                    {{--  @endforeach  --}}

                    
                    
                    
                    
                    

                    






                    <div class="clearfix"></div>
                </div>
                <!-- //first section -->








                <!-- 2nd section) -->
                
                    
                <div class="product-sec1">
                    
                    
                    
                    
                    
                    
                    
                    <div class="clearfix"></div>
                </div>
                <!-- //2nd section  -->





                <!-- 3rd section -->
                {{--  <div class="product-sec1">
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('/') }}fron/images/k7.jpg" alt="">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="#" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="#">Narulag, Less Sugar</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">$220.00</span>
                                    <del>$250.00</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Narulag, Less Sugar, 400g" />
                                            <input type="hidden" name="amount" value="220.00" />
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
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('/') }}fron/images/k8.jpg" alt="">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="#" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="#">Kellogg's Chocos Fills</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">$175.75</span>
                                    <del>$195.00</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Kellogg's Chocos Fills, 250g" />
                                            <input type="hidden" name="amount" value="175.75" />
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
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('/') }}fron/images/k9.jpg" alt="">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="#" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="#">Amul's India</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">$134.00</span>
                                    <del>$150.00</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Amul's India" />
                                            <input type="hidden" name="amount" value="134.00" />
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
                    <div class="clearfix"></div>
                </div>
                <!-- //3rd section -->
                <!-- 4th section -->
                <div class="product-sec1">
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('/') }}fron/images/k10.jpg" alt="">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="#" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="#">Snickers Chocolates</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">$140.00</span>
                                    <del>$150.00</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Snickers Chocolates - 150 Gms" />
                                            <input type="hidden" name="amount" value="140.00" />
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
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('/') }}fron/images/k11.jpg" alt="">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="#" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="#">Kissan Fruit Jam</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">$123.00</span>
                                    <del>$150.00</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Kissan Fruit Jam, 500g Jar" />
                                            <input type="hidden" name="amount" value="123.00" />
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
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('/') }}fron/images/k12.jpg" alt="">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="#" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="#">MTR Vegetable Pickle</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">$104.00</span>
                                    <del>$120.00</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="MTR Vegetable Pickle, 500g" />
                                            <input type="hidden" name="amount" value="104.00" />
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
                    <div class="clearfix"></div>
                </div>  --}}
                <!-- //4th section  -->

            </div>
        </div>
        <!-- //product right -->
    </div>
</div>
<!-- //top products -->
<!-- special offers -->
<div class="featured-section" id="projects">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Special Offers
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">
            <ul id="flexiselDemo1">
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="{{ asset('/') }}fron/images/s1.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">Aashirvaad, 5g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$220.00</h6>
                                <p>Save $40.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Aashirvaad, 5g" />
                                        <input type="hidden" name="amount" value="220.00" />
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
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="{{ asset('/') }}fron/images/s4.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">Kissan Tomato Ketchup, 950g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$99.00</h6>
                                <p>Save $20.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Kissan Tomato Ketchup, 950g" />
                                        <input type="hidden" name="amount" value="99.00" />
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
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="{{ asset('/') }}fron/images/s2.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">Madhur Pure Sugar, 1g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$69.00</h6>
                                <p>Save $20.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Madhur Pure Sugar, 1g" />
                                        <input type="hidden" name="amount" value="69.00" />
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
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="single2.html">
                                <img src="{{ asset('/') }}fron/images/s3.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="single2.html">Surf Excel Liquid, 1.02L</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$187.00</h6>
                                <p>Save $30.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Surf Excel Liquid, 1.02L" />
                                        <input type="hidden" name="amount" value="187.00" />
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
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="{{ asset('/') }}fron/images/s8.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">Cadbury Choclairs, 655.5g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$160.00</h6>
                                <p>Save $60.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Cadbury Choclairs, 655.5g" />
                                        <input type="hidden" name="amount" value="160.00" />
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
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="single2.html">
                                <img src="{{ asset('/') }}fron/images/s6.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="single2.html">Fair & Lovely, 80 g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$121.60</h6>
                                <p>Save $30.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Fair & Lovely, 80 g" />
                                        <input type="hidden" name="amount" value="121.60" />
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
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="{{ asset('/') }}fron/images/s5.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">Sprite, 2.25L (Pack of 2)</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$180.00</h6>
                                <p>Save $30.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Sprite, 2.25L (Pack of 2)" />
                                        <input type="hidden" name="amount" value="180.00" />
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
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="single2.html">
                                <img src="{{ asset('/') }}fron/images/s9.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="single2.html">Lakme Eyeconic Kajal, 0.35 g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$153.00</h6>
                                <p>Save $40.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Lakme Eyeconic Kajal, 0.35 g" />
                                        <input type="hidden" name="amount" value="153.00" />
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
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
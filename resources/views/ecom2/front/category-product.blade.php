@extends('ecom2.front.master')

@section('title')
{{ $category->category_name }}
{{ $category->sub_category_name }}
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
                <li>{{ $category->sub_category_name }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- top Products -->
<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">{{ $category->category_name. $category->sub_category_name }}
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
                                    <button onclick="cart(this.value)" id="{{ $product->id }}" value="{{ $product->id }}" class="button ">Add to <i class="fa fa-heart-o" aria-hidden="true"></i></button>
                                    <button style="display:none" id="{{'modal'.$product->id}}" data-toggle="modal" data-target=".bd-example-modal-lg"></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
                <!-- //first section -->


                





                <!-- 2nd section) -->
                
                    
                
                <!-- //2nd section  -->






            </div>
        </div>
        <!-- //product right -->
    </div>
</div>
<!-- //top products -->


<!-- special offers -->
@include('ecom2.front.special-offer')
@endsection
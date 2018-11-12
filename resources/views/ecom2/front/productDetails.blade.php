@extends('ecom2.front.master')


@section('title')

Product Details

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
                    <li>{{ $product->product_name }} Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- Single Page -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">{{ $product->product_name }}
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="col-md-5 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach ($alt_images as $alt_image)
                            <li data-thumb="{{asset($alt_image->img_url)}}">
                                <div class="thumb-image">
                                    <img src="{{asset($alt_image->img_url)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                                </li>
                                @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    
                    
                        <h3>Sizes</h3>
                        <ul class="slides" >
                            @foreach ($product_sizes as $product_size)
                            <li style="float:left">
                                <button onclick="proSise(this.value)" value="{{ $product_size->id }}" type="button" id="product_size" class="btn btn-success product_size">{{ $product_size->product_size }}</button>
                            </li>                                
                            @endforeach
                        </ul>
                    
                        <div class="clearfix"></div>
                    
                        <h3>Colors</h3>
                        <ul class="slides" >
                            @foreach ($product_colors as $product_color)
                            <li style="float:left">
                                <button onclick="proColor(this.value)" value="{{ $product_color->id }}" type="button"><img src="{{ asset($product_color->product_color)}}" alt="" height="50" width="50"></button>
                            </li>                                
                            @endforeach
                        </ul>

                        <div class="clearfix"></div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    
                </div>
            </div>
            
            <div class="col-md-7 single-right-left simpleCart_shelfItem">
                {{-- <h3>{{ $product->product_name }}</h3> --}}
                <div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
                </div>
                
                
                
                
                <p>
                    <span class="item_price">$ {{ $minPrice .'-'. $maxPrice }}</span>
                    {{-- <span class="item_price">$ {{ $minPrice .'-'. $maxPrice }}</span> --}}
                    <label>Free delivery</label>
                </p>
                <div class="single-infoagile">
                    <p>{{ $product->product_short_description }}</p>
                    {{-- <ul>
                        <li>
                            Cash on Delivery Eligible.
                        </li>
                        <li>
                            Shipping Speed to Delivery.
                        </li>
                        <li>
                            Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
                        </li>
                        <li>
                            1 offer from
                            <span class="item_price">$950.00</span>
                        </li>
                    </ul> --}}
                </div>
                <div class="product-single-w3l">
                    <p><i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
                        <label>Vegetarian</label> product.</p>
                        {{ $product->product_long_description }}
                        
                        
                        
                    {{-- <ul>
                        <li>
                            Best for Biryani and Pulao.
                        </li>
                        <li>
                            After cooking, Zeeba Basmati rice grains attain an extra ordinary length of upto 2.4 cm/~1 inch.
                        </li>
                        <li>
                            Zeeba Basmati rice adheres to the highest food afety standards as your health is paramount to us.
                        </li>
                        <li>
                            Contains only the best and purest grade of basmati rice grain of Export quality.
                        </li>
                    </ul> --}}
                    <p>
                        <i class="fa fa-refresh" aria-hidden="true"></i>All food products are
                        <label>non-returnable.</label>
                    </p>
                </div>


                {{-- cart start here --}}
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="{{ route('add-to-cart') }}" method="post">
                            @csrf
                            <fieldset>
                                <label>Add Quantity</label>
                                <input type="number" name="product_quantity" value="1"/>
                                <input type="hidden" name="product_id" value="{{ $product->id }}" required />
                                <input type="hidden" id="cartProductSize" name="product_size" value=""/>
                                <input type="hidden" id="cartProductColor" name="product_color" value=""/>
                                <input type="submit" name="submit" value="Add to cart" class="button"/>
                            </fieldset>
                        </form>
                    </div>

                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //Single Page -->






    <!-- special offers -->
    @include('ecom2.front.special-offer')
    <script>
        function proSise(val){
            document.getElementById('cartProductSize').value = val;
        }
        function proColor(val){
            document.getElementById('cartProductColor').value = val;
        }
    </script>
@endsection
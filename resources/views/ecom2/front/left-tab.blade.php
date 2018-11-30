<div class="side-bar col-md-3">
    <div class="search-hotel">
        <h3 class="agileits-sear-head">Search Here..</h3>
        <form action="#" method="post">
            <input type="search" placeholder="Product name..." name="search" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <!-- price range -->
    <div class="range">
        <h3 class="agileits-sear-head">Price range</h3>
        <ul class="dropdown-menu6">
            <li>

                <div id="slider-range"></div>
                <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                <input type="hidden" id="hidden_minimum_price" value="0">
                <input type="hidden" id="hidden_maximum_price" value="65000">
            </li>
        </ul>
    </div>
    <!-- //price range -->



    {{--Sub categories --}}
    @if (isset($category->id))
        
    
    <div class="left-side">
        <h3 class="agileits-sear-head">Sub Categories</h3>
        <div class="list-group">
            @php
            $sub_cats = DB::table('subcategories')->where('category_id', $category->id)->get();
            @endphp
            @foreach($sub_cats as $sub_cat)
                <a href="{{ route('sub-cat-product', ['id' =>  $sub_cat->id]) }}" class="list-group-item list-group-item-action">{{ $sub_cat->sub_category_name }}</a>
            @endforeach
            
        </div>
    </div>
    @endif

    {{-- //Sub categories --}}
    
    {{-- categories --}}
    <div class="left-side">
        <h3 class="agileits-sear-head">All Categories</h3>
        <div class="list-group">
            @php
                $categories = DB::table('categories')->where('publication_status', 1)->get();
            @endphp
            @foreach($categories as $category)
                {{--  <a href="" class="list-group-item list-group-item-action">{{ $category->category_name }}</a>  --}}
                <a href="{{ route('category-product', ['id' =>  $category->id]) }}" class="list-group-item list-group-item-action">{{ $category->category_name }}</a>
            @endforeach
        </div>
    </div>
    {{-- //categories --}}

    {{-- brand --}}
    <div class="left-side">
        <h3 class="agileits-sear-head">Brands</h3>
        <div class="list-group checkbox">
            @foreach ($products as $product)
            @php($brands = DB::table('brands')->where('id', $product->brand_id)->get())
            @foreach ($brands as $brand)
                
            <input type="checkbox" class="common_selector brand" name="" id="" value="">{{ $brand->brand_name }} <span class="pull-right">(50)</span><br>
            @endforeach
            @endforeach
        </div>
    </div>
    




    
    <!-- food preference -->
    <div class="left-side">
        <h3 class="agileits-sear-head">Food Preference</h3>
        <ul>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">Vegetarian</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">Non-Vegetarian</span>
            </li>
        </ul>
    </div>
    <!-- //food preference -->
    <!-- discounts -->
    <div class="left-side">
        <h3 class="agileits-sear-head">Discount</h3>
        <ul>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">5% or More</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">10% or More</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">20% or More</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">30% or More</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">50% or More</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">60% or More</span>
            </li>
        </ul>
    </div>
    <!-- //discounts -->
    <!-- reviews -->
    <div class="customer-rev left-side">
        <h3 class="agileits-sear-head">Customer Review</h3>
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span>5.0</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <span>4.0</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <span>3.5</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <span>3.0</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <span>2.5</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- //reviews -->
    <!-- cuisine -->
    <div class="left-side">
        <h3 class="agileits-sear-head">Cuisine</h3>
        <ul>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">South American</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">French</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">Greek</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">Chinese</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">Japanese</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">Italian</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">Mexican</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">Thai</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">Indian</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span"> Spanish </span>
            </li>
        </ul>
    </div>
    <!-- //cuisine -->
    <!-- deals -->
    <div class="deal-leftmk left-side">
        <h3 class="agileits-sear-head">Special Deals</h3>
        <div class="special-sec1">
            <div class="col-xs-4 img-deals">
                <img src="{{ asset('/') }}fron/images/d2.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
                <h3>Lays Potato Chips</h3>
                <a href="single.html">$18.00</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="special-sec1">
            <div class="col-xs-4 img-deals">
                <img src="{{ asset('/') }}fron/images/d1.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
                <h3>Bingo Mad Angles</h3>
                <a href="single.html">$9.00</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="special-sec1">
            <div class="col-xs-4 img-deals">
                <img src="{{ asset('/') }}fron/images/d4.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
                <h3>Tata Salt</h3>
                <a href="single.html">$15.00</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="special-sec1">
            <div class="col-xs-4 img-deals">
                <img src="{{ asset('/') }}fron/images/d5.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
                <h3>Gujarat Dry Fruit</h3>
                <a href="single.html">$525.00</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="special-sec1">
            <div class="col-xs-4 img-deals">
                <img src="{{ asset('/') }}fron/images/d3.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
                <h3>Cadbury Dairy Milk</h3>
                <a href="single.html">$149.00</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //deals -->
</div>
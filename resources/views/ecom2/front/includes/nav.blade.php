<div class="ban-top">
    <div class="container">

        <div class="agileits-navi_search">
            <form action="#" method="post">
                <select id="agileinfo-nav_search" name="agileinfo_search" required="">
                    <option value="">All Categories</option>
                    <option value="Kitchen">Kitchen</option>
                    <option value="Household">Household</option>
                    <option value="Snacks &amp; Beverages">Snacks & Beverages</option>
                    <option value="Personal Care">Personal Care</option>
                    <option value="Gift Hampers">Gift Hampers</option>
                    <option value="Fruits &amp; Vegetables">Fruits & Vegetables</option>
                    <option value="Baby Care">Baby Care</option>
                    <option value="Soft Drinks &amp; Juices">Soft Drinks & Juices</option>
                    <option value="Frozen Food">Frozen Food</option>
                    <option value="Bread &amp; Bakery">Bread & Bakery</option>
                    <option value="Sweets">Sweets</option>
                </select>
            </form>
        </div>


        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">

                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All
                                        <span class="caret"></span>
                                    </a>
                                    @php
                                        $categories = DB::table('categories')->where('publication_status', 1)->get();
                                    @endphp 
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="agile_inner_drop_nav_info">
                                            @foreach($categories as $category)
                                            <div class="col-sm-4 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                        <li  value="{{$catId= $category->id }}"><a href="{{ route('category-product', ['id' =>  $category->id]) }}">{{ $category->category_name }}</a>
                                                        </li>
                                                            @php
                                                            $subCats = DB::table('subcategories')->where('category_id', $catId)->get();
                                                            @endphp 
                                                            
                                                            @foreach($subCats as $subCat)
                                                            <li  value="{{$subCatId= $subCat->id }}"><a href="{{ route('sub-cat-product', ['id' =>  $subCat->id]) }}">{{ $subCat->sub_category_name }}</a>
                                                            </li>
                                                            @php
                                                            $thirdCats = DB::table('third_categories')->where('sub_category_id', $subCatId)->get();
                                                            @endphp
                                                            
                                                            @foreach($thirdCats as $thirdCat)
                                                            <li  value="{{$thirdCatId= $thirdCat->id }}"><a href="{{ route('category-product', ['id' =>  $subCat->id]) }}">{{ $thirdCat->third_category_name }}</a>
                                                            </li>
                                                            @endforeach
                                
                                                            @endforeach
                                                </ul>
                                            </div>
                                            @endforeach

                                            


                                            <div class="col-sm-4 multi-gd-img">
                                                <img src="{{ asset('/') }}fron/images/nav.png" alt="">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                            
                            <li class="active">
                                <a class="nav-stylehead" href="{{ route('/')}}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="nav-stylehead" href="{{ route('about')}}">About Us</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kitchen
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-4 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product.html">Bakery</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Baking Supplies</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Coffee, Tea & Beverages</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Dried Fruits, Nuts</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Sweets, Chocolate</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Spices & Masalas</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Jams, Honey & Spreads</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product.html">Pickles</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Pasta & Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Rice, Flour & Pulses</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Sauces & Cooking Pastes</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Snack Foods</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Oils, Vinegars</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Meat, Poultry & Seafood</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 multi-gd-img">
                                            <img src="{{ asset('/') }}fron/images/nav.png" alt="">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Household
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product2.html">Kitchen & Dining</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Detergents</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Utensil Cleaners</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Floor & Other Cleaners</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Disposables, Garbage Bag</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Repellents & Fresheners</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html"> Dishwash</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product2.html">Pet Care</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Cleaning Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Pooja Needs</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Crackers</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Festive Decoratives</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Plasticware</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Home Care</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                           
                            <li class="dropdown">
                                <a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Pages
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li>
                                        <a href="icons.html">Web Icons</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a class="nav-stylehead" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
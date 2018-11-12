<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
    <!DOCTYPE html>
    <html lang="zxx">
    
    <head>
        <title> @yield('title') </title>
        <!--/tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
    
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!--//tags -->
        <!-- flexslider -->
	    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('/') }}fron/css/flexslider.css"/>
        <link  rel="stylesheet" type="text/css" media="all" href="{{ asset('/') }}fron/css/bootstrap.css"/>
        {{-- mega menu csss ---------------------------------------------------}}
        <style>
               
                .navbar-nav>li>.dropdown-menu {
                    margin-top: 20px;
                    border-top-left-radius: 4px;
                    border-top-right-radius: 4px;
                  }
                  
                  
                  
                  .mega-dropdown {
                    position: static !important;
                    width: 100%;
                  }
                  
                  .mega-dropdown-menu {
                    padding: 20px 0px;
                    width: 100%;
                    box-shadow: none;
                    -webkit-box-shadow: none;
                  }
                  
                  .mega-dropdown-menu:before {
                    content: "";
                    border-bottom: 15px solid #fff;
                    border-right: 17px solid transparent;
                    border-left: 17px solid transparent;
                    position: absolute;
                    top: -15px;
                    left: 285px;
                    z-index: 10;
                  }
                  
                  .mega-dropdown-menu:after {
                    content: "";
                    border-bottom: 17px solid #ccc;
                    border-right: 19px solid transparent;
                    border-left: 19px solid transparent;
                    position: absolute;
                    top: -17px;
                    left: 283px;
                    z-index: 8;
                  }
                  
                  .mega-dropdown-menu > li > ul {
                    padding: 0;
                    margin: 0;
                  }
                  
                  .mega-dropdown-menu > li > ul > li {
                    list-style: none;
                  }
                  
                  .mega-dropdown-menu > li > ul > li > a {
                    display: block;
                    padding: 3px 20px;
                    clear: both;
                    font-weight: normal;
                    line-height: 1.428571429;
                    color: #999;
                    white-space: normal;
                  }
                  
                  .mega-dropdown-menu > li ul > li > a:hover,
                  .mega-dropdown-menu > li ul > li > a:focus {
                    text-decoration: none;
                    color: #444;
                    background-color: #f5f5f5;
                  }
                  
                  .mega-dropdown-menu .dropdown-header {
                    color: #428bca;
                    font-size: 18px;
                    font-weight: bold;
                  }
                  
                  .mega-dropdown-menu form {
                    margin: 3px 20px;
                  }
                  
                  .mega-dropdown-menu .form-group {
                    margin-bottom: 3px;
                  }
    
        </style>

       {{-- //slider css-------------------------------------------------- --}}




        <link  rel="stylesheet" type="text/css" media="all" href="{{ asset('/') }}fron/css/style.css"/>
        {{-- <link rel="stylesheet" href="{{ asset('/') }}fron/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ asset('/') }}fron/css/owl.theme.css"> --}}
        <link href="{{ asset('/') }}fron/css/font-awesome.css" rel="stylesheet">
        <!--pop-up-box-->
        <link href="{{ asset('/') }}fron/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <!--//pop-up-box-->
        <!-- price range -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}fron/css/jquery-ui1.css">
        <!-- fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
        
         
    
       



    </head>
    
    <body>
        <!-- top-header -->
        <div class="header-most-top">
            <p>Grocery Offer Zone Top Deals & Discounts</p>
        </div>
        <!-- //top-header -->
        <!-- header-bot-->
        <div class="header-bot">
            <div class="header-bot_inner_wthreeinfo_header_mid">
                <!-- header-bot-->
                <div class="col-md-4 logo_agile">
                    <h1>
                        <a href="{{ route('/') }}">
                            <span>G</span>rocery
                            <span>S</span>hoppy
                            <img src="{{ asset('/') }}fron/images/logo2.png" alt=" ">
                        </a>
                    </h1>
                </div>
                <!-- header-bot -->
                <div class="col-md-8 header">
                    <!-- header lists -->
                    <ul>
                        <li>
                            <a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
                                <span class="fa fa-map-marker" aria-hidden="true"></span> Shop Locator</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal1">
                                <span class="fa fa-truck" aria-hidden="true"></span>Track Order</a>
                        </li>
                        <li>
                            <span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
                        </li>







                        
                        {{-- ------------------------------------- --}}
                        @if(Session::get('customerId'))
                        <li>
                            <a href="{{ route('customer-logout') }}">
                                <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign Out </a>
                        </li>
                    @else
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal1">
                                <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal2">
                                <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
                        </li>
                    @endif
                        {{-- ------------------------------------------- --}}










                    </ul>
                    <!-- //header lists -->
                    <!-- search -->
                    <div class="agileits_search">
                        <form action="{{ route('search') }}" method="GET">
                            <input name="query" type="search" placeholder="How can we help you today?" id="proList" required="" autocomplete="off">
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                <span class="fa fa-search" aria-hidden="true"> </span>
                            </button>
                        </form>
                    </div>

  


    {{--  <div class="col-sm-3">
            <div class="search_box pull-right">


                <form action='{{ route('autocompleteajax')}}' method="post">
                    
                    <input type="text" placeholder="Search" name="search_data" id="proList"/>
                    

                </form>
            </div>
        </div>  --}}
<!-- //search -->
                    <!-- cart details -->
                    <!-- cart details -->
            <div class="top_nav_right">
                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                    <a href="{{ route('show-cart') }}" class="btn btn-success"><i class="fa 			fa-cart-arrow-down" aria-hidden="true"></i></a>
            	</div>
            </div>
<!-- //cart details -->
                    <!-- //cart details -->
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- shop locator (popup) -->
        <!-- Button trigger modal(shop-locator) -->
        <div id="small-dialog1" class="mfp-hide">
            <div class="select-city">
                <h3>Please Select Your Location</h3>
                <select class="list_of_cities">
                    <optgroup label="Popular Cities">
                        <option selected style="display:none;color:#eee;">Select City</option>
                        <option>Birmingham</option>
                        <option>Anchorage</option>
                        <option>Phoenix</option>
                        <option>Little Rock</option>
                        <option>Los Angeles</option>
                        <option>Denver</option>
                        <option>Bridgeport</option>
                        <option>Wilmington</option>
                        <option>Jacksonville</option>
                        <option>Atlanta</option>
                        <option>Honolulu</option>
                        <option>Boise</option>
                        <option>Chicago</option>
                        <option>Indianapolis</option>
                    </optgroup>
                    <optgroup label="Alabama">
                        <option>Birmingham</option>
                        <option>Montgomery</option>
                        <option>Mobile</option>
                        <option>Huntsville</option>
                        <option>Tuscaloosa</option>
                    </optgroup>
                    <optgroup label="Alaska">
                        <option>Anchorage</option>
                        <option>Fairbanks</option>
                        <option>Juneau</option>
                        <option>Sitka</option>
                        <option>Ketchikan</option>
                    </optgroup>
                    <optgroup label="Arizona">
                        <option>Phoenix</option>
                        <option>Tucson</option>
                        <option>Mesa</option>
                        <option>Chandler</option>
                        <option>Glendale</option>
                    </optgroup>
                    <optgroup label="Arkansas">
                        <option>Little Rock</option>
                        <option>Fort Smith</option>
                        <option>Fayetteville</option>
                        <option>Springdale</option>
                        <option>Jonesboro</option>
                    </optgroup>
                    <optgroup label="California">
                        <option>Los Angeles</option>
                        <option>San Diego</option>
                        <option>San Jose</option>
                        <option>San Francisco</option>
                        <option>Fresno</option>
                    </optgroup>
                    <optgroup label="Colorado">
                        <option>Denver</option>
                        <option>Colorado</option>
                        <option>Aurora</option>
                        <option>Fort Collins</option>
                        <option>Lakewood</option>
                    </optgroup>
                    <optgroup label="Connecticut">
                        <option>Bridgeport</option>
                        <option>New Haven</option>
                        <option>Hartford</option>
                        <option>Stamford</option>
                        <option>Waterbury</option>
                    </optgroup>
                    <optgroup label="Delaware">
                        <option>Wilmington</option>
                        <option>Dover</option>
                        <option>Newark</option>
                        <option>Bear</option>
                        <option>Middletown</option>
                    </optgroup>
                    <optgroup label="Florida">
                        <option>Jacksonville</option>
                        <option>Miami</option>
                        <option>Tampa</option>
                        <option>St. Petersburg</option>
                        <option>Orlando</option>
                    </optgroup>
                    <optgroup label="Georgia">
                        <option>Atlanta</option>
                        <option>Augusta</option>
                        <option>Columbus</option>
                        <option>Savannah</option>
                        <option>Athens</option>
                    </optgroup>
                    <optgroup label="Hawaii">
                        <option>Honolulu</option>
                        <option>Pearl City</option>
                        <option>Hilo</option>
                        <option>Kailua</option>
                        <option>Waipahu</option>
                    </optgroup>
                    <optgroup label="Idaho">
                        <option>Boise</option>
                        <option>Nampa</option>
                        <option>Meridian</option>
                        <option>Idaho Falls</option>
                        <option>Pocatello</option>
                    </optgroup>
                    <optgroup label="Illinois">
                        <option>Chicago</option>
                        <option>Aurora</option>
                        <option>Rockford</option>
                        <option>Joliet</option>
                        <option>Naperville</option>
                    </optgroup>
                    <optgroup label="Indiana">
                        <option>Indianapolis</option>
                        <option>Fort Wayne</option>
                        <option>Evansville</option>
                        <option>South Bend</option>
                        <option>Hammond</option>														       
                    </optgroup>
                    <optgroup label="Iowa">
                        <option>Des Moines</option>
                        <option>Cedar Rapids</option>
                        <option>Davenport</option>
                        <option>Sioux City</option>
                        <option>Waterloo</option>       													
                    </optgroup>
                    <optgroup label="Kansas">
                        <option>Wichita</option>
                        <option>Overland Park</option>
                        <option>Kansas City</option>
                        <option>Topeka</option>
                        <option>Olathe  </option>            													
                    </optgroup>
                    <optgroup label="Kentucky">
                        <option>Louisville</option>
                        <option>Lexington</option>
                        <option>Bowling Green</option>
                        <option>Owensboro</option>
                        <option>Covington</option>        														
                    </optgroup>
                    <optgroup label="Louisiana">
                        <option>New Orleans</option>
                        <option>Baton Rouge</option>
                        <option>Shreveport</option>
                        <option>Metairie</option>
                        <option>Lafayette</option>          														
                    </optgroup>
                    <optgroup label="Maine">
                        <option>Portland</option>
                        <option>Lewiston</option>
                        <option>Bangor</option>
                        <option>South Portland</option>
                        <option>Auburn</option>         														
                    </optgroup>
                    <optgroup label="Maryland">
                        <option>Baltimore</option>
                        <option>Frederick</option>
                        <option>Rockville</option>
                        <option>Gaithersburg</option>
                        <option>Bowie</option>         														
                    </optgroup>
                    <optgroup label="Massachusetts">
                        <option>Boston</option>
                        <option>Worcester</option>
                        <option>Springfield</option>
                        <option>Lowell</option>
                        <option>Cambridge</option>  
                    </optgroup>
                    <optgroup label="Michigan">
                        <option>Detroit</option>
                        <option>Grand Rapids</option>
                        <option>Warren</option>
                        <option>Sterling Heights</option>
                        <option>Lansing</option> 
                    </optgroup>
                    <optgroup label="Minnesota">
                        <option>Minneapolis</option>
                        <option>St. Paul</option>
                        <option>Rochester</option>
                        <option>Duluth</option>
                        <option>Bloomington</option>      														
                    </optgroup>
                    <optgroup label="Mississippi">
                        <option>Jackson</option>
                        <option>Gulfport</option>
                        <option>Southaven</option>
                        <option>Hattiesburg</option>
                        <option>Biloxi</option>         														
                    </optgroup>
                    <optgroup label="Missouri">
                        <option>Kansas City</option>
                        <option>St. Louis</option>
                        <option>Springfield</option>
                        <option>Independence</option>
                        <option>Columbia</option>            														
                    </optgroup>
                    <optgroup label="Montana">
                        <option>Billings</option>
                        <option>Missoula</option>
                        <option>Great Falls</option>
                        <option>Bozeman</option>
                        <option>Butte-Silver Bow</option>         														
                    </optgroup>
                    <optgroup label="Nebraska">
                        <option>Omaha</option>
                        <option>Lincoln</option>
                        <option>Bellevue</option>
                        <option>Grand Island</option>
                        <option>Kearney</option>        													
                    </optgroup>
                    <optgroup label="Nevada">
                        <option>Las Vegas</option>
                        <option>Henderson</option>
                        <option>North Las Vegas</option>
                        <option>Reno</option>
                        <option>Sunrise Manor</option>            													
                    </optgroup>
                    <optgroup label="New Hampshire">
                        <option>Manchesters</option>
                        <option>Nashua</option>
                        <option>Concord</option>
                        <option>Dover</option>
                        <option>Rochester</option>              													
                    </optgroup>
                    <optgroup label="New Jersey">
                        <option>Newark</option>
                        <option>Jersey City</option>
                        <option>Paterson</option>
                        <option>Elizabeth</option>
                        <option>Edison</option> 
                    </optgroup>
                    <optgroup label="New Mexico">
                        <option>Albuquerque</option>
                        <option>Las Cruces</option>
                        <option>Rio Rancho</option>
                        <option>Santa Fe</option>
                        <option>Roswell</option>       
                    </optgroup>
                    <optgroup label="New York">
                        <option>New York</option>
                        <option>Buffalo</option>
                        <option>Rochester</option>
                        <option>Yonkers</option>
                        <option>Syracuse</option>        														
                    </optgroup>
                    <optgroup label="North Carolina">
                        <option>Charlotte</option>
                        <option>Raleigh</option>
                        <option>Greensboro</option>
                        <option>Winston-Salem</option>
                        <option>Durham</option>          														
                    </optgroup>
                    <optgroup label="North Dakota">
                        <option>Fargo</option>
                        <option>Bismarck</option>
                        <option>Grand Forks</option>
                        <option>Minot</option>
                        <option>West Fargo</option>
                    </optgroup>
                    <optgroup label="Ohio">
                        <option>Columbus</option>
                        <option>Cleveland</option>
                        <option>Cincinnati</option>
                        <option>Toledo</option>
                        <option>Akron</option>      
                    </optgroup>
                    <optgroup label="Oklahoma">
                        <option>Oklahoma City</option>
                        <option>Tulsa</option>
                        <option>Norman</option>
                        <option>Broken Arrow</option>
                        <option>Lawton</option>        														
                    </optgroup>
                    <optgroup label="Oregon">
                        <option>Portland</option>
                        <option>Eugene</option>
                        <option>Salem</option>
                        <option>Gresham</option>
                        <option>Hillsboro</option>          														
                    </optgroup>
                    <optgroup label="Pennsylvania">
                        <option>Philadelphia</option>
                        <option>Pittsburgh</option>
                        <option>Allentown</option>
                        <option>Erie</option>
                        <option>Reading</option>         														
                    </optgroup>
                    <optgroup label="Rhode Island">
                        <option>Providence</option>
                        <option>Warwick</option>
                        <option>Cranston</option>
                        <option>Pawtucket</option>
                        <option>East Providence</option>   
                    </optgroup>
                    <optgroup label="South Carolina">
                        <option>Columbia</option>
                        <option>Charleston</option>
                        <option>North Charleston</option>
                        <option>Mount Pleasant</option>
                        <option>Rock Hill</option> 
                    </optgroup>
                    <optgroup label="South Dakota">
                        <option>Sioux Falls</option>
                        <option>Rapid City</option>
                        <option>Aberdeen</option>
                        <option>Brookings</option>
                        <option>Watertown</option> 
                    </optgroup>
                    <optgroup label="Tennessee">
                        <option>Memphis</option>
                        <option>Nashville</option>
                        <option>Knoxville</option>
                        <option>Chattanooga</option>
                        <option>Clarksville</option>       
                    </optgroup>
                    <optgroup label="Texas">
                        <option>Houston</option>
                        <option>San Antonio</option>
                        <option>Dallas</option>
                        <option>Austin</option>
                        <option>Fort Worth</option>   
                    </optgroup>
                    <optgroup label="Utah">
                        <option>Salt Lake City</option>
                        <option>West Valley City</option>
                        <option>Provo</option>
                        <option>West Jordan</option>
                        <option>Orem</option>   
                    </optgroup>	
                    <optgroup label="Vermont">
                        <option>Burlington</option>
                        <option>Essex</option>
                        <option>South Burlington</option>
                        <option>Colchester</option>
                        <option>Rutland</option>   
                    </optgroup>
                    <optgroup label="Virginia">
                        <option>Virginia Beach</option>
                        <option>Norfolk</option>
                        <option>Chesapeake</option>
                        <option>Arlington</option>
                        <option>Richmond</option> 
                    </optgroup>	
                    <optgroup label="Washington">
                        <option>Seattle</option>
                        <option>Spokane</option>
                        <option>Tacoma</option>
                        <option>Vancouver</option>
                        <option>Bellevue</option> 
                    </optgroup>	
                    <optgroup label="West Virginia">
                        <option>Charleston</option>
                        <option>Huntington</option>
                        <option>Parkersburg</option>
                        <option>Morgantown</option>
                        <option>Wheeling</option> 
                    </optgroup>	
                    <optgroup label="Wisconsin">
                        <option>Milwaukee</option>
                        <option>Madison</option>
                        <option>Green Bay</option>
                        <option>Kenosha</option>
                        <option>Racine</option>
                    </optgroup>
                    <optgroup label="Wyoming">
                        <option>Cheyenne</option>
                        <option>Casper</option>
                        <option>Laramie</option>
                        <option>Gillette</option>
                        <option>Rock Springs</option>
                    </optgroup>
                </select>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //shop locator (popup) -->
        <!-- signin Model -->







        
        <!-- customer login Modal1 -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body modal-body-sub_agile">
                        <div class="main-mailposi">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        </div>
                        <div class="modal_body_left modal_body_left1">
                            <h3 class="agileinfo_sign">Sign In </h3>
                            <p>
                                Sign In now, Let's start your Grocery Shopping. Don't have an account?
                                <a href="#" data-toggle="modal" data-target="#myModal2">
                                    Sign Up Now</a>
                            </p>
                            <form action="{{ route('customer_login') }}" method="post">
                                    @csrf
                                <div class="styled-input agile-styled-input-top">
                                    <input type="email" name="email_address" placeholder="User Name"  required="">
                                </div>
                                <div class="styled-input">
                                    <input type="password" name="password" placeholder="Password" required="">
                                </div>
                                <input type="submit" value="Sign In">
                            </form>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
        <!-- //Modal1 -->
        <!-- //signin Model -->




        <!-- signup Model -->
        <!-- Modal2 -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body modal-body-sub_agile">
                        <div class="main-mailposi">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        </div>
                        <div class="modal_body_left modal_body_left1">
                            <h3 class="agileinfo_sign">Sign Up</h3>
                            <p>
                                Come join the Grocery Shoppy! Lets set up your Account.
                            </p>
                            <form class="form-horizontal" action="{{ route('new-customer') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label col-md-3">First Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="first_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Last Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                    </div>
                                 <div class="form-group">
                                        <label class="control-label col-md-3">Email Address</label>
                                        <div class="col-md-9">
                        <input type="email" name="email_address"  id="emailAddress" class="form-control"/>
                                            <br/>
                                            <span id="res"> </span>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Passwords</label>
                                        <div class="col-md-9">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Phone Number</label>
                                        <div class="col-md-9">
                                            <input type="number" name="phone_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Address</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" name="btn" id="submitBtn" class="btn btn-success btn-block" value="Register"/>
                                        </div>
                                    </div>
                                </form>
                            <p>
                                <a href="#">By clicking register, I agree to your terms</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
        <!-- //Modal2 -->
        <!-- //signup Model -->
        <!-- //header-bot -->




        <!-- navigation -->
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
{{-- //mega menu --}}
<div class="dropdown">
        <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
            All <span class="caret"></span>
        </a>
       
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
        <li><a href="#">Some action</a></li>
        <li><a href="#">Some other action</a></li>
        <li class="divider"></li>
        <li class="dropdown-submenu">
            <a tabindex="-1" href="#">Hover me for more options</a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="#">Second level</a></li>
            <li class="dropdown-submenu">
                <a href="#">Even More..</a>
                <ul class="dropdown-menu">
                    <li><a href="#">3rd level</a></li>
                    <li><a href="#">3rd level</a></li>
                </ul>
            </li>
            <li><a href="#">Second level</a></li>
            <li><a href="#">Second level</a></li>
            </ul>
        </li>
        </ul>
    </div>

                                        <li class="dropdown">
                                            <a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">All
                                                    <b class="caret"></b>
                                            </a>
                                                <ul class="dropdown-menu agile_short_dropdown">
                                                        <?php foreach($categories as $category){ ?>
                                                            <li class="dropdown" onmouseover="mega(this.value)" value="{{ $category->id }}"><a href="{{ route('category-product', ['id' =>  $category->id]) }}" class="list-group-item list-group-item-action">{{ $category->category_name }}</a>
                                                                
                                                                <ul class="dropdown-menu agile_short_dropdown" id="subcatFornt">
                                                                    
                                                                </ul>

                                                                
                                                            </li>
                                                           <?php }?>
                                                </ul>
                                        </li>

                                    


                                    <li class="active">
                                        <a class="nav-stylehead" href="{{ route('/') }}">Home
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="nav-stylehead" href="{{ route('about') }}">About Us</a>
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
                                                            <a href="#">Bakery</a>
                                                            {{--  <a href="{{ route('category-Product') }}">Bakery</a>  --}}
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
                                    <li class="">
                                        <a class="nav-stylehead" href="faqs.html">Faqs</a>
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
                                        <a class="nav-stylehead" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <input name="_token" type="hidden" id="csrftoken" value="{{ csrf_token() }}">
        </div>

        {{-- mega menu --}}
        <div class="container">
                <nav class="navbar ">
                  <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">MegaMenu</a>
                  </div>
              
              
                  <div class="collapse navbar-collapse js-navbar-collapse">
                    <ul class="nav navbar-nav">
                      <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
              
                        <ul class="dropdown-menu mega-dropdown-menu row">
          
                          <li class="col-sm-3">
                            <ul>
                              <li class="dropdown-header">New in Stores</li>
                              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>
                                    <button class="btn btn-primary" type="button">49,99 €</button>
                                    <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                  </div>
                                  <!-- End Item -->
                                  <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>
                                    <button class="btn btn-primary" type="button">9,99 €</button>
                                    <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                  </div>
                                  <!-- End Item -->
                                  <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>
                                    <button class="btn btn-primary" type="button">49,99 €</button>
                                    <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                  </div>
                                  <!-- End Item -->
                                </div>
                                <!-- End Carousel Inner -->
                              </div>
                              <!-- /.carousel -->
                              <li class="divider"></li>
                              <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                            </ul>
                          </li>
                          

                          @foreach($categories as $category)
                          <li class="col-sm-3">
                            <ul>
                              <li class="dropdown-header" onmouseover="mega(this.value)" value="{{$catId= $category->id }}"><a href="{{ route('category-product', ['id' =>  $category->id]) }}">{{ $category->category_name }}</a></li>
                                @php
                                $subCats = DB::table('subcategories')->where('category_id', $catId)->get();
                                @endphp 
                                @foreach($subCats as $subCat)
                                <li onmouseover="mega(this.value)" value="{{$subCatId= $subCat->id }}"><a href="{{ route('category-product', ['id' =>  $subCat->id]) }}">{{ $subCat->sub_category_name }}</a></li>
                                @endforeach
                            </ul>
                          </li>
                          @endforeach
          
                          
                          
                         
                        </ul>
              
                      </li>
                    </ul>
              
                  </div>
                  <!-- /.nav-collapse -->
                </nav>
              </div>
        {{-- end mega menu --}}
        <style>
            #loading{
                text-align: center;
                background: url(loader.gif) no-repeat center;
                height: 150px;
            }
        </style>

        <script>
           function mega(val){
            var iie= val;
                    $.ajax({
                        type:"POST",
                        url:'SubCatFront',
                        data: {
                            id: iie,
                            _token: $('#csrftoken').val(),
                        },
                        dataType: "html",
                        success: function(response) {
                        $('#subcatFornt').html(response);
                         console.log(response);

                            
                        }
                    })
            }


{{-- //for mega menu --}}

        </script>

       
@extends('ecom2.front.master')

@section('title')
    Home | Habiiib
@endsection

@section('body')


<!-- banner -->
@include('ecom2.front.slider-bootstap')    
<!-- //banner -->


        <!-- top Products -->
        <div class="ads-grid">
            <div class="container">
                <!-- tittle heading -->
                <h3 class="tittle-w3l">Our Top Products
                    <span class="heading-style">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </h3>
                <div ></div>
                <!-- //tittle heading -->



                <!-- product left -->
                @include('ecom2.front.left-tab')
                <!-- //product left -->







                <!-- product right -->
                @include('ecom2.front.home-content')
                <!-- //product right -->


            </div>
        </div>
        <!-- //top products -->










        <!-- special offers -->
        @include('ecom2.front.special-offer')
        
@endsection
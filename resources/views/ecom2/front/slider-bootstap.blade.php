<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    @foreach($sliders as $key=>$slider)
    <li data-target="#myCarousel" data-slide-to="{{ $key+0 }}" @if($key==0) class="active"@endif></li>
    @endforeach
      {{-- <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li> --}}
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      {{-- <div class="item active">
        <img src="{{ asset('/') }}fron/images/banner1.jpg" alt="...">
        <div class="container">
            <div class="carousel-caption">
                <h3> Big <span>Save</span></h3>
                <p> Discount <span>10%</span></p>
                <a class="button2" href="product.html">Shop Now </a>
            </div>
        </div>
      </div> --}}

      @foreach($sliders as $key=>$slider)
        <div class=" item item{{ $key+0 }} @if($key==0) active @endif " height="200">
         <img src="{{asset($slider->image)}}" width="100%"  alt="" /> 
            <div class="container">
                <div class="carousel-caption">
                        <h3>{{ $slider->title }} <span>{{ $slider->title_span }}</span></h3>
                        <p>{{$slider->sub_title}} <span>{{ $slider->sub_title_span }}</span></p>
                        <a class="button2" href="{{ route('category-product',1) }}">Shop Now </a>
                </div>
            </div>
        </div>
      @endforeach
      
      
    </div>
  
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
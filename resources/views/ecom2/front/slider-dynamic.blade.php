<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            {{--< class="carousel-inner" role="listbox">--}}
            @foreach($sliders as $key=>$slider)
            <li data-target="#myCarousel" data-slide-to="{{ $key+0 }}" @if($key==0) class="active"@endif></li>
            @endforeach
        </ol>

        <div class="carousel-inner" role="listbox">

            @foreach($sliders as $key=>$slider)
            <div class="item item{{ $key+0 }} @if($key==0) active @endif ">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>{{$slider->title}}</h3>
                        <p>{{$slider->sub_title}}</p>
                        {{--  <img src="{{asset($slider->image)}}" width="100%" height="400" alt="" class=""/>  --}}
                        <a class="button2" href="product.html">Shop Now </a>
                    </div>
                </div>
            </div>
            @endforeach
            
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
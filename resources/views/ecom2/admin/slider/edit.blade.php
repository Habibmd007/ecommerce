@extends('ecom2.admin.master')

@section('title')
    Manage Slider
@endsection

@section('body')
    <br/>

    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: #337ab7; color: white">
        Add Slide
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row ">
        <div class="col-lg-12 ">

            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>

                    <form action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title" id="title" value="{{ $slider->title }}">
                          <input type="text" class="form-control" name="title_span" id="title-span" value="{{ $slider->title_span }}">
                          <small id="" class="form-text text-muted">write slide title</small>
                        </div>

                        <div class="form-group">
                          <label for="sub-title">Sub-Title</label>
                          <input type="text" class="form-control" name="sub_title" id="sub-title" value="{{ $slider->sub_title }}">
                          <input type="text" class="form-control" name="sub_title_span" id="sub-title-span" value="{{ $slider->sub_title_span }}">
                          <small id="" class="form-text text-muted">write slide Sub-title</small>
                        </div>

                        <input type="file" name="image" id="" accept="image/*" value="{{ asset($slider->image)}}">
                        <img src="{{ asset($slider->image)}}" height="100">

                        <button class="btn">
                                Update <span class="badge badge-secondary"></span>
                        </button>
                    </form>


                </div>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    </div>


@endsection
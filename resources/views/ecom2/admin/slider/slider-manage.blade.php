@extends('ecom2.admin.master')

@section('title')
    Manage Slider
@endsection

@section('body')
    <br/>

    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: #337ab7; color: white">
        Manage Slider Tables
    </div>

    <div class="row ">
        <div class="col-lg-12 ">

            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>

                   


                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <thead class="font-italic bg-primary">

                        <tr>
                            <th class="text-center">S.N</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Sub Title</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Created</th>
                            <th class="text-center">Updated</th>
                            <th class="text-center">Action</th>
                        </tr>

                        </thead>

                        <tbody class=" text-center " style="font-family: cursive">


                        @php($i=1)

                        @foreach( $sliders as $key=>$slider)

                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{$slider->title}}</td>
                                <td>{{$slider->sub_title}}</td>
                                <td><img src="{{  asset($slider->image)}}" alt="" height="50"></td>
                                <td>{{$slider->created_at}}</td>
                                <td>{{$slider->updated_at}}</td>
                                <td>
                                    <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                   

                                    <a href="#" class="btn  btn-xs" onclick="return confirm('Are sure delete this ??? ')">
                                        {{-- <span class="glyphicon glyphicon-trash"></span> --}}
                                        <form class="d-inline-block" action="{{ route('slider.destroy',$slider->id) }}" method="post" class="btn btn-danger btn-xs">
                                                @csrf
                                                @method('delete')
                                    <button type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                    </form>
                                    </a>

                                    
                                </td>
                            </tr>

                        @endforeach

                        </tbody>


                    </table>


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
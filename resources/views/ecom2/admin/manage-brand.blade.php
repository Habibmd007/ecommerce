@extends('ecom2.admin.master')

@section('title')
    Manage Brand
@endsection

@section('body')
    <br/>

    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
        Manage Brand Tables
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
                            <th class="text-center">Sl No</th>
                            <th class="text-center">Brand Name</th>
                            <th class="text-center">Brand Slug</th>
                            <th class="text-center">Brand Image</th>
                            <th class="text-center">Brand Description</th>
                            <th class="text-center">Publication Status</th>
                            <th class="text-center">Action</th>
                        </tr>

                        </thead>

                        <tbody class=" text-center " style="font-family: cursive">


                        @php($i=1)

                        @foreach( $brands as $brand)

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$brand->brand_name}}</td>
                                <td>{{$brand->slug}}</td>
                                <td><img src="{{asset($brand->image)}}" alt="" height="100"></td>
                                <td>{{$brand->brand_description}}</td>
                                <td>{{$brand->publication_status==1 ? 'Published': 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-brand', ['id'=>$brand->id])}}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-brand',['id'=>$brand->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are sure delete this ??? ')">
                                        <span class="glyphicon glyphicon-trash"></span>
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
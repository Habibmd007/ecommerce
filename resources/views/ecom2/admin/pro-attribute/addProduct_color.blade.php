
@extends('ecom2.admin.master')

@section('title')
    Product Size
@endsection

@section('body')
    <br/>

    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
         Product Color  Tables
    </div>

    <div class="row ">
        <div class="col-lg-12 ">

            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">
                        <h3>Name:{{ $product->product_name }} ID:{{ $product->id }}</h3>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead class="font-italic bg-primary">
                                <tr>
                                    <th class="text-center">SN</th>
                                    <th class="text-center">Product ID</th>
                                    <th class="text-center">Size</th>
                                    <th class="text-center">Color</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody class=" text-center " style="font-family: cursive">
    
                                @php($i=1)
                                @foreach($product_colors as $product_color)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product_color->product_size}}</td>
                                    <td><img src="{{ asset( $product_color->product_color) }}" alt="" height="50"></td>
                                    <td>{{$product_color->product_price}}</td>
                                    <td>
                                        {{-- <a href="{{route('edit-product_attribute',['id'=>$product_color->id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a> --}}
                                        <a href="{{route('delete-product_color',['id'=>$product_color->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are sure delete this ??? ')">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
    
                                   @endforeach
                                </tbody>
    
    
                            </table>

                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>
                    <form action="{{ route('add-product_color') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <input type="hidden" name="product_id" class="form-control" value="{{ $product->id }}">
                        </div>
                        <div class="form-group">
                            <label for="color">Product Size</label>
                            <input type="text" name="product_size"  class="form-control" value="" placeholder="optional">
                        </div>
                        <div class="form-group">
                            <label for="color">Product color</label>
                            <input type="file" name="product_color"  class="form-control" accept="image/*">
                        </div>
                        <div class="form-group">
                                <label for="Price">Color Price</label>
                                <input type="number" name="product_price"  class="form-control" placeholder="optional">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" id="" class=" btn btn-info" value="Save">
                        </div>

                    </form>

                    <a href="{{route('product_size',['id'=>$product->id])}}" class="btn btn-info btn-xs">Product Size</a>
                    {{-- <a href="{{route('productPrice',['id'=>$product->id])}}" class="btn btn-info btn-xs">Product Price</a> --}}

                        



                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    </div>


@endsection
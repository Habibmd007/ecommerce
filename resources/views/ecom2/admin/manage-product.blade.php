@extends('ecom2.admin.master')

@section('title')
    Manage Brand
@endsection

@section('body')
    <br/>

    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
       Product  Manage  Tables
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
                                <th class="text-center">SN</th>
                                <th class="text-center">Category Name</th>
                                <th class="text-center">Brand Name</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Product Image</th>
                                <th class="text-center">Product Price</th>
                                <th class="text-center">Product Quantity</th>
                                <th class="text-center">Publication Status</th>
                                <th class="text-center">alt button</th>
                                <th class="text-center">Action</th>
                            </tr>

                            </thead>

                            <tbody class=" text-center " style="font-family: cursive">

                            @php($i=1)
                            @foreach($products as $product)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$product->category_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>
                                    <img src="{{asset($product->product_image)}}" height="70" width="70" alt="product-image"/>
                                </td>
                                <td> $ {{$product->product_price}}</td>
                                <td>{{$product->product_quantity}}</td>
                                <td>{{$product->publication_status==1 ?'Published':'Unpublished'}}</td>
                                <td>
                        <a href="{{route('alt-Image',['id'=>$product->id])}}" class="btn btn-info btn-xs">Alt-Image</a>
                        <a href="{{route('product_size',['id'=>$product->id])}}" class="btn btn-info btn-xs">Size Color</a>
                        {{-- <a href="{{route('productPrice',['id'=>$product->id, 'size_id'=>$product->id])}}" class="btn btn-info btn-xs">Price</a> --}}
                    </td>
                                <td>
                                    <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-product',['id'=>$product->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are sure delete this ??? ')">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>

                               @endforeach
                            </tbody>


                        </table>



                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    </div>


@endsection
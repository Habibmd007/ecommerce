
@extends('ecom2.admin.master')

@section('title')
    Product Size
@endsection

@section('body')
    <br/>

    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
         Product Size  Tables
    </div>

    <div class="row ">
        <div class="col-lg-12 ">

            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">
                        <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>
                    <h3>Name:{{ $product->product_name }}. ID:{{ $product->id }}</h3>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead class="font-italic bg-primary">
                                <tr>
                                    <th class="text-center">SN</th>
                                    <th class="text-center">Product ID</th>
                                    <th class="text-center">Size</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody class=" text-center " style="font-family: cursive">
    
                                @php($i=1)
                                @foreach($product_sizes as $product_size)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product_size->product_size}}</td>
                                    <td>{{$product_size->product_price}}</td>
                                    <td>
                                        {{-- <a href="{{route('edit-product_attribute',['id'=>$product_size->id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a> --}}
                                        <a href="{{route('deleteProductSize',['id'=>$product_size->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are sure delete this ??? ')">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                                   @endforeach
                                </tbody>
    
    
                            </table>

                    <form action="{{ route('add-product_size') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <p>NOTE:To add color first must add size. Every Size must have a price and price can be same. If product have color price, size price will be invalid</p>
                            <input type="hidden" name="product_id" class="form-control" value="{{ $product->id }}">
                        </div>
                        <div class="form-group">
                            <label for="color">Product Size</label>
                            <input type="text" name="product_size"  class="form-control" placeholder="product_size">
                        </div>
                        <div class="form-group">
                            <label for="Price">Size Price</label>
                            <input type="number" name="product_price"  class="form-control" placeholder="price" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class=" btn btn-info" value="Save">
                        </div>
                    </form>
                    <a href="{{route('productColor',['id'=>$product->id])}}" class="btn btn-info btn-xs">Add Color</a>
                    {{-- <a href="{{route('product_price',['id'=>$product->id])}}" class="btn btn-info btn-xs">Product Price</a> --}}
            </div>
          </div>
         </div>
        </div>


@endsection
@extends('ecom2.admin.master')

@section('title')
    Product Atrributes
@endsection

@section('body')
    <br/>
@php
$products=2;
$pro_attribute;
@endphp
    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: #337ab7; color: white">
         Product Atrributes  Tables
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
                                <th class="text-center">Product ID</th>
                                <th class="text-center">Size</th>
                                <th class="text-center">Color</th>
                                <th class="text-center">SKU</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody class=" text-center " style="font-family: cursive">

                            @php($i=1)
                            @foreach($pro_attributes as $pro_attribute)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$product->id}}</td>
                                <td>{{$pro_attribute->size}}</td>
                                <td>{{$pro_attribute->color}}</td>
                                <td>{{ $pro_attribute->sku}}</td>
                                <td>${{$pro_attribute->price}}</td>
                                <td>{{$pro_attribute->quantity}}</td>
                                <td>
                                    <a href="{{route('edit-product_attribute',['id'=>$pro_attribute->id])}}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-product_attribute',['id'=>$pro_attribute->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are sure delete this ??? ')">
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
            <div class="text-center text-uppercase " style="background-color:#337ab7;color: white ">
                <h2>Add Attribute</h2>
            </div>
        
                    <form action="{{ route('add-product_attribute') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="size">Size</label>
                            <input type="text" name="size" id="size" class="form-control" placeholder="size">
                        </div>
                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="file" name="color" id="color" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" placeholder="price">
                        </div>
                        <div class="form-group">
                            <label for="price">SKU</label>
                            <input type="text" name="sku" id="sku" class="form-control" placeholder="sku">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" placeholder="quantity">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="product_id" id="product_id" class="form-control" value="{{ $product->id }}">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="btn" id="" class=" btn btn-info" value="Save">
                        </div>

                    </form>
                </div>

@endsection
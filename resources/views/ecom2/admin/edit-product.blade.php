@extends('ecom2.admin.master')

@section('title')
    Product Edit
@endsection

@section('body')

    <br/>

    <div class="row">

        <div class="col-md-10 col-md-offset-1 ">
            <div class="panel-heading text-center font-weight-bold"
                 style="font-family:cursive; text-transform:uppercase; background-color:#ceccc9;color: white ">
                Edit Product
            </div>

            <div class="panel" style="margin-top: 20px;">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <h2 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h2>


                        <form name="editProductForm" action="{{route('update-product')}}" method="POST" class="form-horizontal"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <input type="hidden" id="csrftoken" name="_token" value="{{ csrf_token() }}">
                                <label class="col-md-3 " style="margin-top: 10px"> Category Name</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <select onchange="subCat(this.value)" name="category_id" class="form-control">
                                        <option>---Select Category Name---</option>
                                        @foreach( $categories as  $category)
                                        <option value="{{ $category->id}}">{{ $category->category_name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" id="subid" style="display:none">
                                <label class="col-md-3 " style="margin-top: 10px">Sub Category</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <select name="sub_category_id" class="form-control" id="subCatid">
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Brand Name</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <select name="brand_id" class="form-control">
                                        <option>---Select Brand Name---</option>
                                        @foreach( $brands as  $brand)
                                            <option value="{{ $brand->id}}">{{ $brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Product Name</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
                                    <input type="hidden" name="product_id" value="{{$product->id}}" class="form-control">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Product Price</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="number" name="product_price" value="{{$product->product_price}}" class="form-control" step="any">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Product Quantity</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="number" name="product_quantity" value="{{$product->product_quantity}}" class="form-control">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Product Skew</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="number" name="product_skew" value="{{$product->product_skew}}" class="form-control">
                                </div>

                            </div>


                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 40px"> Product Short Description </label>
                                <div class="col-md-9 " style="margin-top: 20px">
                                    <textarea name=" product_short_description" class="form-control" rows="3"
                                              style="resize: vertical">{{$product->product_short_description}}</textarea>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 40px"> Product Long Description </label>
                                <div class="col-md-9 " style="margin-top: 20px">
                                    <textarea name=" product_long_description" class="form-control" id="editor" rows="3"
                                              style="resize: vertical">{{$product->product_long_description}}</textarea>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Product Image </label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="file" name="product_image" accept="image/*">
                                    <img src="{{asset($product->product_image)}}" height="70"/>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Publication Status</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="radio" name="publication_status" {{$product->publication_status==1 ?'checked':''}} value="1">Published
                                    <input type="radio" name="publication_status" {{$product->publication_status==0 ?'checked':''}} value="0">Unpublished
                                </div>

                            </div>


                            <div class="form-group">

                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-block btn-primary "
                                           value=" Update Product  Info">

                                </div>

                            </div>

                        </form>

                    </div>


                </div>

            </div>
        </div>

    </div>

        <script>
            document.forms['editProductForm'].elements['category_id'].value = '{{  $product->category_id }}';
            document.forms['editProductForm'].elements['brand_id'].value = '{{  $product->brand_id }}';


            
        
            function subCat(val){
                  var iie= val;
                      $.ajax({
                          type:"POST",
                          //url:'selectSubCat',
                          url:'http://localhost/ecommerce2/public/selectSubCat',
                          data: {
                              id: iie,
                              _token: $('#csrftoken').val(),
                          },
                          dataType: "html",
                          success: function(response) {
                          $('#subCatid').html(response);
                           console.log(response);
  
                           if(response==0){
                              document.getElementById('subid').style.display= 'none';
                           }else{
                              document.getElementById('subid').style=' ';
                           }
                              
                          }
                      })
  
              }
      </script>
@endsection
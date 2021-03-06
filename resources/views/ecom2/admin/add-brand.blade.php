@extends('ecom2.admin.master')

@section('title')
    Brand
@endsection

@section('body')

    <br/>

    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel-heading text-center font-weight-bold"
                 style="font-family:cursive;text-transform:uppercase; background-color:orange;color: white ">
                Brand Add Form
            </div>

            <div class="panel" style="margin-top: 20px;">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>


                        <form action="{{route('save-brand')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Brand Name</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="text" name=" brand_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group" >
                                    <label class="col-md-3 " style="margin-top: 10px">Brand Slug</label>
                                    <div class="col-md-9 " style="margin-top: 10px">
                                        <input type="text" name="slug" class="form-control">
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Brand Image</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="file" name=" image" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                    <input type="hidden" id="csrftoken" name="_token" value="{{ csrf_token() }}">
                                    <label class="col-md-3 " style="margin-top: 10px">Category Name</label>
                                    <div class="col-md-9 " style="margin-top: 10px">
                                        <select onchange="subCat(this.value)" name="category_id" class="form-control">
                                            <option>---Select Category Name---</option>
                                            @foreach( $categories as  $category)
                                            <option value="{{ $category->id}}">{{ $category->category_name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="subid" >
                                        <label class="col-md-3 " style="margin-top: 10px">Category Slug</label>
                                        <div class="col-md-9 " style="margin-top: 10px">
                                            <select name="Category-Slug" id="" class="form-control">
                                                <option>---Select Category Name---</option>
                                                @foreach( $categories as  $category)
                                                <option value="{{ $category->id}}">{{ $category->slug}}</option>
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
                                <div class="form-group" id="subid" >
                                    <label class="col-md-3 " style="margin-top: 10px">Third Category</label>
                                    <div class="col-md-9 " style="margin-top: 10px">
                                        <select name="third_category_id" class="form-control" id="subCatid">
                                        </select>
                                    </div>
                                </div>
                              
                              
                                <div class="form-group" id="subid" style="display:none">
                                        <label class="col-md-3 " style="margin-top: 10px">Sub Category Slug</label>
                                        <div class="col-md-9 " style="margin-top: 10px">
                                            <input type="text" name="Sub-category-slug" class="form-control">
                                        </div>
                                </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 40px"> Brand Description </label>
                                <div class="col-md-9 " style="margin-top: 20px">
                                    <textarea name="brand_description" class="form-control" rows="3"
                                              style="resize: vertical"></textarea>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 20px"> Publication Status</label>
                                <div class="col-md-9 " style="margin-top: 20px">
                                    <input type="radio" name="publication_status" value="1">Published
                                    <input type="radio" name="publication_status" value="0">Unpublished
                                </div>

                            </div>


                            <div class="form-group">

                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-block btn-primary "
                                           value="Save Brand Info">

                                </div>

                            </div>

                        </form>

                    </div>


                </div>

            </div>
        </div>

    </div>
    <script>
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
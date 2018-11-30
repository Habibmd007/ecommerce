@extends('ecom2.admin.master')

@section('title')
    Edit Category
@endsection

@section('body')

    <br/>

    <div class="row">
        <div class="col-md-10 col-md-offset-1 ">

            <div class="panel-heading text-center font-weight-bold"
                 style="font-family:cursive;text-transform:uppercase; background-color:orange;color: white ">
                Category Edit / Update Form
            </div>
            <div class="panel" style="margin-top: 20px;">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <form action="{{route('update-category')}}" method="POST" class="form-horizontal">
                            @csrf

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Category Name</label>
                                    <div class="col-md-9 " style="margin-top: 10px">
                                        <input type="text" name="category_name" value="{{$category->category_name}}"
                                            class="form-control">
                                        <input type="hidden" name="category_id" value="{{$category->id}}"
                                            class="form-control">
                                    </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 40px"> Category slug </label>
                                <div class="col-md-9 " style="margin-top: 20px">
                                    <textarea name="category_disc" class="form-control" rows="3"
                                        style="resize: vertical">{{ $category->slug }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 40px"> Category Description </label>
                                <div class="col-md-9 " style="margin-top: 20px">
                                    <textarea name="category_disc" class="form-control" rows="3"
                                        style="resize: vertical">{{ $category->category_disc }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 20px"> Publication Status</label>
                                <div class="col-md-9 " style="margin-top: 20px">
                                    <input type="radio" name="publication_status" value="1" checked>Published
                                    <input type="radio" name="publication_status" value="0">Unpublished
                                </div>

                            </div>


                            <div class="form-group">

                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-block btn-primary "
                                           value="Update Category Info">

                                </div>

                            </div>

                        </form>

                    </div>


                </div>

            </div>
        </div>

    </div>



@endsection
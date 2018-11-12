@extends('ecom2.admin.master')

@section('title')
    Category
@endsection

@section('body')
    <br/>

    <div class="row">
        <div class="col-md-10 col-md-offset-1 ">

            <div class="panel-heading text-center font-weight-bold" style=" font-family:cursive;text-transform:uppercase; background-color:orange;color: white ">
                Category Add Form
            </div>

            <div class="panel" style="margin-top: 20px;">
                <div class="panel panel-default">


                    <div class="panel-body" >

                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>


                        <form action="{{route('save-category')}}" method="POST" class="form-horizontal">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-3 " style="margin-top: 10px"> Category Name</label>
                            <div class="col-md-9 "  style="margin-top: 10px">
                                <input type="text" name="category_name" class="form-control">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-3 "  style="margin-top: 40px"> Category Description </label>
                            <div class="col-md-9 "  style="margin-top: 20px">
                                <textarea name="category_disc" class="form-control" rows="3" style="resize: vertical"></textarea>

                            </div>

                        </div>

                        <div class="form-group" >
                            <label class="col-md-3 " style="margin-top: 20px"> Publication Status</label>
                            <div class="col-md-9 " style="margin-top: 20px">
                                <input type="radio" name="publication_status" value="1">Published
                                <input type="radio" name="publication_status" value="0">Unpublished
                            </div>

                        </div>



                        <div class="form-group">

                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" class="btn btn-block btn-primary"
                                       value="Save Category Info" style="color: white  ">

                            </div>

                        </div>

                        </form>

                    </div>


                </div>

            </div>
        </div>

    </div>


@endsection
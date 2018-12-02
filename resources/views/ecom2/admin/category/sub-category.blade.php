@extends('ecom2.admin.master')

@section('title')
    Sub-subCategory
@endsection

@section('body')
    <br/>
    <div class=" panel panel-heading text-center text-uppercase font-weight-bold"
         style="font-family:cursive;background-color: darkorange; color: white;">

        Sub-subCategory Table

    </div>

    <div class="row ">
        <div class="col-lg-12 ">
            <div class="panel panel-default ">
                <div class="panel-body">
                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead class="font-italic bg-primary">
                        <tr>
                            <th class="text-center"> Sl No</th>
                            <th class="text-center"> Sub-Category</th>
                            <th class="text-center"> Slug</th>
                            <th class="text-center"> image</th>
                            <th class="text-center"> Description</th>
                            <th class="text-center"> Status</th>
                            <th class="text-center"> Action</th>
                        </tr>
                        </thead>
                        <tbody class=" text-center " style="font-family: cursive">


                        @php($i=1)

                        @foreach( $subCategories as $subCategory)

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td><a href="{{ route('view-third-cat',['id' =>$subCategory->id, 'cid' =>$category->id ]) }}">{{$subCategory->sub_category_name}}</a></td>
                                <td>{{$subCategory->slug}}</td>
                                <td><img src="{{asset($subCategory->image)}}" alt="" height="50"></td>
                                <td>{{$subCategory->sub_category_disc}}</td>
                                <td>{{$subCategory->publication_status==1 ? 'Published': 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-subCategory', ['id'=>$subCategory->id])}}"
                                       class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-subCategory', ['id'=>$subCategory->id])}}"
                                       class="btn btn-danger btn-xs"
                                       onclick="return confirm('Are sure delete this ??? ')">
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

        {{-- ad subcat form --}}
    
        <div class="panel-heading text-center font-weight-bold" style=" font-family:cursive;text-transform:uppercase; background-color:orange;color: white ">
                Add Sub category 
             </div>
 
             <div class="panel" style="margin-top: 20px;">
                 <div class="panel panel-default">
                     <div class="panel-body" >
                     <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>
 
 
                         <form action="{{route('store-subCategory')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                         @csrf
 
                         <div class="form-group">
                             <label class="col-md-3 " style="margin-top: 10px">  Name</label>
                             <div class="col-md-9 "  style="margin-top: 10px">
                                 <input type="hidden" name="category_slug" value="{{ $category->slug }}" class="form-control">
                                 <input type="hidden" name="category_id" value="{{ $category->id }}" class="form-control">
                                 <input type="text" name="sub_category_name" class="form-control">
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-3 "  style="margin-top: 40px">  Slug </label>
                             <div class="col-md-9 "  style="margin-top: 20px">
                                 <input type="text" name="slug" class="form-control">
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 "  style="margin-top: 40px">  Image </label>
                             <div class="col-md-9 "  style="margin-top: 20px">
                                 <input type="file" name="image" class="form-control">
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 "  style="margin-top: 40px">  Description </label>
                             <div class="col-md-9 "  style="margin-top: 20px">
                                 <textarea name="sub_category_disc" class="form-control" rows="3" style="resize: vertical"></textarea>
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
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    </div>



    
            


@endsection
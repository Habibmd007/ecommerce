@extends('ecom2.front.master')

@section('title')

    Wish List

@endsection


@section('body')
<ul class="list-group list-group-flush">
        <h3 class="text-center text-success">{{ Session::get('msg') }}</h3>
        @php($i=1)

        
        <li class="list-group-item">
            <table class="table ">
                <thead>
                    <tr>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($wishLists as $wishList )
                    <tr>
                        <td> {{ $i++ }}</td>
                        <td>{{$wishList->product_name}}</td>
                        <td><img src="{{$wishList->product_image}}" alt="" height="100px"></td>
                        <td>${{$wishList->product_price}}-</td>
                        <td>
                                <a href="{{ route('wish-list-delete',['id'=>$wishList->id]) }}" onclick="return confirm('Are you sure to delete this !!1')"><i class="fa fa-trash fa-5" aria-hidden="true"></i>Delete</a>
                        </td>
                    </tr>
                        @endforeach
                  
               </tbody>
           </table>
        </li>
       
        
      </ul>
@endsection
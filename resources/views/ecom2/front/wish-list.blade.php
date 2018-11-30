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
                        
                        <td><a href="{{route('product-details',['id'=>$wishList->product_id])}}">{{$wishList->product_name}}</a></td>
                        <td><img src="{{$wishList->product_image}}" alt="" height="100px"></td>
                        
                        <td>${{$wishList->product_price}}</td>
                        <td>
                            <a href="{{ route('wish-list-delete',['id'=>$wishList->id]) }}" onclick="return confirm('Are you sure to delete this !')"><i class="fa fa-trash fa-5" aria-hidden="true"></i>Delete</a>
                        </td>
                    </tr>
                        @endforeach
               </tbody>
           </table>
           <a href="{{ route('wish-list-deleteAll') }}" onclick="return confirm('Are you sure to delete All ...!')"><i class="fa fa-trash fa-5" aria-hidden="true"></i>Delete All</a>
        </li>
        </ul>
@endsection
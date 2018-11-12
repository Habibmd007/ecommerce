@extends('ecom2.admin.master')

@section('title')
    Manage Alt Image
@endsection

@section('body')


@foreach ($altImages as $altImage)
            <li>
                <img src="{{ asset($altImage->img_url) }}" alt="" height="150" width="100">
            </li>
@endforeach

<form action="{{ route('altImage-update') }}" method="post" enctype="multipart/form-data">
    @csrf
    
        
        <input type="text" name="product_name" value="{{ $product->product_name }}" >
        <input type="file" name="alt_image[]" accept="image/*" multiple >
        <input type="hidden" name="product_id" value="{{ $product->id }}">
    

    <input type="submit" value="Update" class="btn btn-info btn-xs">
    
   
</form>
@endsection
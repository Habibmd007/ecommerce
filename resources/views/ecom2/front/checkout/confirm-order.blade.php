@extends('ecom2.front.master')

@section('title')

    Product Details

@endsection


@section('body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <h2>Congratulation {{ Session::get('customerName') }}. Your order successfully post. please wait we will confirm with you soon.......</h2>

                </div>
            </div>
        </div>
    </div>
@endsection

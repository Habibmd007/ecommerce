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
                    <h3 class="text-info text-center">Dear {{ Session::get('customerName') }}. You have to give us product shipping info to complete your valuable order.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <h2 class="text-success text-center">Shipping From Here</h2>
                    <hr/>
                    <form class="form-horizontal" action="{{ route('new-shipping') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3">Full Name</label>
                            <div class="col-md-9">
                                <input type="text" name="full_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email Address</label>
                            <div class="col-md-9">
                                <input type="email" name="email_address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Phone Number</label>
                            <div class="col-md-9">
                                <input type="number" name="phone_number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Shipping Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

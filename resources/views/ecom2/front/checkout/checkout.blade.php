@extends('ecom2.front.master')

@section('title')

    CheckOut

@endsection


@section('body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <h3 class="text-info text-center">You have to login to complete your valuable order. if you are not register then please register first.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="well">
                    <h2 class="text-success text-center">Login From Here</h2>
                    <h3 class="text-center text-danger">@if($message = Session::get('message')) {{ $message }} @endif</h3>
                    <hr/>
                    <form class="form-horizontal" action="{{ route('customer_login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3">Email Address</label>
                            <div class="col-md-9">
                                <input type="email" name="email_address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Passwords</label>
                            <div class="col-md-9">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Login"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            
            <div class="col-md-6">
                <div class="well">
                    <h2 class="text-success text-center">Register From Here</h2>
                    <hr/>
                    <form class="form-horizontal" action="{{ route('new-customer') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input type="text" name="first_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" name="last_name" class="form-control">
                            </div>
                        </div>
                     <div class="form-group">
                            <label class="control-label col-md-3">Email Address</label>
                            <div class="col-md-9">
            <input type="email" name="email_address"  id="emailAddress" class="form-control"/>
                                <br/>
                                <span id="res"> </span>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Passwords</label>
                            <div class="col-md-9">
                                <input type="password" name="password" class="form-control">
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
                                <input type="submit" name="btn" id="submitBtn" class="btn btn-success btn-block" value="Register"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
       

 </script>
@endsection
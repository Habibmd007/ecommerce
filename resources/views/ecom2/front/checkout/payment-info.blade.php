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
                    <h3 class="text-info text-center">Dear {{ Session::get('customerName') }}. You have to give us product payment info to complete your valuable order.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <h2 class="text-success text-center">Payment Info Here</h2>
                    <hr/>
                    <form class="form-horizontal" action="{{ route('new-order') }}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Cash On Delivery</th>
                                <td><input type="radio" name="payment_type" value="cash_on_delivery"></td>
                            </tr>
                            <tr>
                                <th>BKash</th>
                                <td><input type="radio" name="payment_type" value="bkash"></td>
                            </tr>
                            <tr>
                                <th>Paypal</th>
                                <td><input type="radio" name="payment_type" value="paypal"></td>
                            </tr>
                            <tr>
                                <th>Roket</th>
                                <td><input type="radio" name="payment_type" value="roket"></td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Confirm Order"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
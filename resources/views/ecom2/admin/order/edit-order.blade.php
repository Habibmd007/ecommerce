@extends('ecom2.admin.master')

@section('title')
    Manage Order
@endsection

@section('body')
    <br/>

    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: #5bc0de; color: white">
        Order  Manage  Tables
    </div>
    <div class="row ">
        <div class="col-lg-12 ">
            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>

                    <form action="{{ route('order-update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="order_status">Oder Status</label>
                            <input type="text" name="order_status" id="" class="form-control" value="{{ $o_status->order_status }}" aria-describedby="helpId">
                            <input type="hidden" name="order_id" id="" class="form-control" value="{{ $o_status->id }}" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Change Oder Status</small>
                          </div>

                          <div class="form-group">
                            <label for="payment_status">Paymet Status</label>
                            <input type="text" name="payment_status" id="" class="form-control" value="{{  $p_status->payment_status}}" aria-describedby="helpId">
                            <input type="hidden" name="order_id" id="" class="form-control" value="{{ $o_status->id }}" aria-describedby="helpId">

                            <small id="helpId" class="text-muted">Change Paymet Status</small>
                          </div>

                          <button type="submit"name="btn" class="btn btn-info">Submit</button>
                    </form>
                    

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>


@endsection
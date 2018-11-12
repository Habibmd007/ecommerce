@extends('ecom2.admin.master')

@section('title')
    Manage Order
@endsection

@section('body')
    <br/>
    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
        Order Basic Info For This Order
    </div>
    <div class="row ">
        <div class="col-lg-12 ">
            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr>
                            <th>Order No</th>
                            <td>{{ $order->id }}</td>
                        </tr>
                        <tr>
                            <th>Order Total</th>
                            <td>{{ $order->order_total }}</td>
                        </tr>
                        <tr>
                            <th>Order Date</th>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Order Status</th>
                            <td>{{ $order->order_status }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
        Customer Info For This Order
    </div>
    <div class="row ">
        <div class="col-lg-12 ">
            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr>
                            <th>Customer Name</th>
                            <td>{{ $customer->first_name.' '.$customer->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td>{{ $customer->email_address }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $customer->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $customer->address }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
        Shipping Info For This Order
    </div>
    <div class="row ">
        <div class="col-lg-12 ">
            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr>
                            <th>Shipping Person Name</th>
                            <td>{{ $shipping->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td>{{ $shipping->email_address }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $shipping->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $shipping->address }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
        Payment Info For This Order
    </div>
    <div class="row ">
        <div class="col-lg-12 ">
            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr>
                            <th>Payment Type</th>
                            <td>{{ $payment->payment_method }}</td>
                        </tr>
                        <tr>
                            <th>Payment Status</th>
                            <td>{{ $payment->payment_status }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
        Product Info For This Order
    </div>
    <div class="row ">
        <div class="col-lg-12 ">
            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <thead class="font-italic bg-primary">
                        <tr>
                            <th class="text-center">SN</th>
                            <th class="text-center"> Name</th>
                            <th class="text-center"> Size</th>
                            <th class="text-center"> Color</th>
                            <th class="text-center"> Price</th>
                            <th class="text-center"> Quantity</th>
                            <th class="text-center">Total Price</th>
                        </tr>
                        </thead>
                        <tbody class=" text-center " style="font-family: cursive">
                            @php($i=1)
                            @foreach($products as $product)
                            <tr>
                               <td>{{ $i++ }}</td>
                               <td>{{ $product->product_name }}</td>
                               <td>{{ $product->size}}</td>
                               <td><img src="{{asset($product->color) }}" alt="" height="100"></td>
                               <td>{{ $product->product_price }}</td>
                               <td>{{ $product->product_quantity }}</td>
                               <td>{{ $product->product_price * $product->product_quantity }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
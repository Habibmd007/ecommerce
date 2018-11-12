@extends('ecom2.admin.master')

@section('title')
    Manage Order
@endsection

@section('body')
    <br/>
    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
        Product Info For This Order
    </div>

    <div class="row ">
        <div class="col-lg-12 ">
            <div class="panel panel-default ">
                <div class="panel-body">
                    <style>
                        .invoice-box {
                            max-width: 800px;
                            margin: auto;
                            padding: 30px;
                            border: 1px solid #eee;
                            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                            font-size: 16px;
                            line-height: 24px;
                            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                            color: #555;
                        }

                        .invoice-box table {
                            width: 100%;
                            line-height: inherit;
                            text-align: left;
                        }

                        .invoice-box table td {
                            padding: 5px;
                            vertical-align: top;
                        }

                        .invoice-box table tr td:nth-child(2) {
                            text-align: right;
                        }

                        .invoice-box table tr.top table td {
                            padding-bottom: 20px;
                        }

                        .invoice-box table tr.top table td.title {
                            font-size: 45px;
                            line-height: 45px;
                            color: #333;
                        }

                        .invoice-box table tr.information table td {
                            padding-bottom: 40px;
                        }

                        .invoice-box table tr.heading td {
                            background: #eee;
                            border-bottom: 1px solid #ddd;
                            font-weight: bold;
                        }

                        .invoice-box table tr.details td {
                            padding-bottom: 20px;
                        }

                        .invoice-box table tr.item td{
                            border-bottom: 1px solid #eee;
                        }

                        .invoice-box table tr.item.last td {
                            border-bottom: none;
                        }

                        .invoice-box table tr.total td:nth-child(2) {
                            border-top: 2px solid #eee;
                            font-weight: bold;
                        }

                        @media only screen and (max-width: 600px) {
                            .invoice-box table tr.top table td {
                                width: 100%;
                                display: block;
                                text-align: center;
                            }

                            .invoice-box table tr.information table td {
                                width: 100%;
                                display: block;
                                text-align: center;
                            }
                        }

                        /** RTL **/
                        .rtl {
                            direction: rtl;
                            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                        }

                        .rtl table {
                            text-align: right;
                        }

                        .rtl table tr td:nth-child(2) {
                            text-align: left;
                        }
                    </style>

                    <div class="invoice-box">
                        <table cellpadding="0" cellspacing="0">
                            <tr class="top">
                                <td colspan="5">
                                    <table>
                                        <tr>
                                            <td class="title">
                                                <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                                            </td>

                                            <td>
                                                Invoice #: 000 {{ $order->id }}<br>
                                                Created: {{ $order->created_at }}<br>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr class="information">
                                <td colspan="5">
                                    <table>
                                        <tr>
                                            <td>
                                                <h3 style="background-color: red; color: white;">Bill Info</h3>
                                                {{ $customer->first_name.' '.$customer->last_name }}<br>
                                                {{ $customer->email_address }}<br>
                                                {{ $customer->address }} <br/>
                                                {{ $customer->phone_number }} <br/>
                                            </td>

                                            <td>
                                                <h3 style="background-color: red; color: white;">Shipping Info</h3>
                                                {{ $shipping->full_name }}<br>
                                                {{ $shipping->email_address }}<br>
                                                {{ $shipping->address }} <br/>
                                                {{ $shipping->phone_number }} <br/>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr class="heading">
                                <td>Payment Method</td>
                                <td colspan="4"> {{ $payment->payment_method }}</td>
                            </tr>

                            <tr class="details">
                                <td><br/></td>
                                <td><br/></td>
                                <td><br/></td>
                                <td><br/></td>
                                <td><br/></td>
                            </tr>

                            <tr class="heading">
                                <td> SL NO</td>
                                <td>Item Name</td>
                                <td>Unit Price</td>
                                <td>Item Quantity</td>
                                <td>Total Price</td>
                            </tr>
                            @php($i = 1)
                            @php($sum = 0)
                            @foreach($products as $product)
                            <tr class="item">
                                <td>{{ $i++ }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->product_quantity }}</td>
                                <td>{{ $total = $product->product_price*$product->product_quantity }}</td>
                            </tr>
                            @php($sum = $sum+$total)
                            @endforeach
                            <tr class="total">
                                <td></td>
                                <td colspan="4">Total:  {{ $sum }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
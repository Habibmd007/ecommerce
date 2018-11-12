<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <br/>
    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
         INVOICE
    </div>

    <div class="row">
        <div class="col-lg-12 ">
            <div class="panel panel-default ">
                <div class="panel-body">
                   

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
</body>
</html>

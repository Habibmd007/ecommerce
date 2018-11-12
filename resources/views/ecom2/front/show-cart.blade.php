@extends('ecom2.front.master')

@section('title')

    Product Details

@endsection


@section('body')
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="row">
                   <div class="card">
                       <div class="card-body">
                           <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                           <br/>
                           <table class="table table-bordered">
                               <tr>
                                   <th>SL NO</th>
                                   <th> Name</th>
                                   <th> Image</th>
                                   <th> Price</th>
                                   <th> Size</th>
                                   <th> Quanity</th>
                                   <th>Total Price</th>
                                   <th>Action</th>
                               </tr>
                               @php($i=1)
                               @php($sum = 0)
                               @foreach($cartProducts as $cartProduct)
                                   <tr>
                                       <td>{{ $i++ }}</td>
                                       <td>{{ $cartProduct->name }}</td>

                                  
                                       
                                       <?php
                                       //for color image
                                           if($cartProduct->options->colorImage=='NA'){
                                               $cartImage = $cartProduct->options->image;
                                            }else{
                                                $cartImage = $cartProduct->options->colorImage;
                                           }



                                           //for color or size price
                                           if($cartProduct->options->colorPrice=='NA' or $cartProduct->options->colorPrice==null){

                                            if($cartProduct->options->sizePrice=='NA' or $cartProduct->options->sizePrice==null){
                                                $cartrPrice = $cartProduct->price; 
                                                } else {
                                                $cartrPrice = $cartProduct->options->sizePrice; 
                                                }

                                           }else{
                                            $cartrPrice = $cartProduct->options->colorPrice;
                                           }
                                           
                                        ?>
                                   
                                       <td><img src="{{ asset($cartImage ) }}" alt="" height="80" width="80"/></td>
                                       <td>{{ $cartrPrice }}</td>
                                       <td>{{ $cartProduct->options->size }}</td>
                                       <td>
                                           <form action="{{ route('cart-update') }}" method="POST">
                                               @csrf
                                               <input type="number" name="product_quantity" value="{{ $cartProduct->qty }}"/>
                                               <input type="hidden" name="row_id" value="{{ $cartProduct->rowId }}"/>
                                               <input type="submit" name="btn" value="Update"/>
                                           </form>
                                       </td>
                                       <td>TK. {{ $totalPrice = $cartProduct->price*$cartProduct->qty }}</td>
                                       <td>
                                           <a href="{{ route('cart-delete', ['rowId'=>$cartProduct->rowId]) }}" onclick="return confirm('Are you sure to delete this !!1')">Delete</a>
                                       </td>
                                   </tr>
                                   @php($sum = $sum+$totalPrice)
                               @endforeach
                           </table>
                           <hr/>



                           <table class="table table-bordered" style="width: 40%; float: right;">
                               <tr>
                                   <th>Total Price</th>
                                   <td>BDT {{ $sum }}</td>
                               </tr>
                               <tr>
                                   <th>Vat</th>
                                   <td>BDT {{ $vat = $sum*0.05 }}</td>
                               </tr>
                               <tr>
                                   <th>Grand Total</th>
                                   <td>BDT {{ $grandTotal = $sum+ $vat }}
                                   {{ Session::put('grand_total', $grandTotal) }}
                                   </td>
                               </tr>
                           </table>
                       </div>
                   </div>
               </div>
               <div class="card">
                   <div class="card-body">
                       <a href="#" onclick="goBack()" class="btn btn-success">Continue Shopping</a>
                       @if(Session::get('customerId') && Session::get('shippingId'))
                            <a href="{{ route('payment-info') }}" class="btn btn-info" style="float: right">Checkout</a>
                       @elseif(Session::get('customerId'))
                            <a href="{{ route('show-shipping') }}" class="btn btn-info" style="float: right">Checkout</a>
                       @else
                           <a href="{{ route('checkout') }}" class="btn btn-info" style="float: right">Checkout</a>
                       @endif
                   </div>
               </div>
               
               <hr/>
           </div>
       </div>
   </div>
   <script>
        function goBack() {
            window.history.back();
        }
   </script>
@endsection

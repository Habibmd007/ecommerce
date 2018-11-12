<?php
namespace App\Http\Controllers;

use App\Customer;
use App\OrderDetail;
use App\Payment;
use App\Shipping;
use Illuminate\Http\Request;
use App\Order;
use DB;
use PDF;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    // public function manageOrder() {
    //     $orders = DB::table('orders')
    //                 ->join('customers', 'orders.customer_id', '=', 'customers.id')
    //                 ->select('orders.*')
    //                 ->get();

    
    //     return $orders;
    //     return view('ecom2.admin.order.manage-order', ['orders'=>$orders]);
    // }
    public function manageOrder() {
        $orders = DB::table('orders')
                    ->join('customers', 'orders.customer_id', '=', 'customers.id')
                    ->join('payments', 'orders.id', '=', 'payments.order_id')
                    ->select('orders.*', 'customers.first_name','customers.last_name', 'payments.*' )
                    ->get();

    
        // return $orders;
        return view('ecom2.admin.order.manage-order', ['orders'=>$orders]);
    }
	
	

    public function viewOrderDetail($id) {
        $order      = Order::find($id);
        $customer   = Customer::find($order->customer_id);
        $shipping   = Shipping::find($order->shipping_id);
        $payment    = Payment::where('order_id', $id)->first();
        $products   = OrderDetail::where('order_id', $id)->get();



        return view('ecom2.admin.order.view-order', [
            'order'     =>  $order,
            'customer'  =>  $customer,
            'shipping'  =>  $shipping,
            'payment'   =>  $payment,
            'products'  =>  $products
        ]);
    }

    
   

    public function viewOrderInvoice($id) {
        $order      = Order::find($id);
        $customer   = Customer::find($order->customer_id);
        $shipping   = Shipping::find($order->shipping_id);
        $payment    = Payment::where('order_id', $id)->first();
        $products   = OrderDetail::where('order_id', $id)->get();

        return view('ecom2.admin.order.view-invoice', [
            'order'     =>  $order,
            'customer'  =>  $customer,
            'shipping'  =>  $shipping,
            'payment'   =>  $payment,
            'products'  =>  $products
        ]);
    }

    public function printOrderInvoice($id) {
        $order      = Order::find($id);
        $customer   = Customer::find($order->customer_id);
        $shipping   = Shipping::find($order->shipping_id);
        $payment    = Payment::where('order_id', $id)->first();
        $products   = OrderDetail::where('order_id', $id)->get();


//        $pdf = PDF::loadHtml('<h1>Hello World</h1>');
        $pdf = PDF::loadView('ecom2.admin.order.order-invoice',[
            'order'     =>  $order,
            'customer'  =>  $customer,
            'shipping'  =>  $shipping,
            'payment'   =>  $payment,
            'products'  =>  $products
        ]);
        return $pdf->stream('test.pdf');
    }

    public function editOrder($oid)
    {
        $o_status = Order::where('id', $oid)->first();
        $p_status = Payment::where('id', $oid)->first();
        
        return view('ecom2.admin.order.edit-order',[
            'o_status'=>$o_status,
            'p_status'=>$p_status, ]);
        
        
    }

    public function orderUpdate(Request $request)
    {
        // return $request;
        $payment = Payment::where('id', $request->order_id)->first();
        $payment->payment_status = $request->payment_status;
        $payment->save();

        $order =Order::where('id', $request->order_id)->first();
        $order->order_status = $request->order_status;
        $order->save();

        return redirect('manage-order')->with('msg', 'Order & Payment status updated');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use App\ProductColor;
use App\ProductSize;

class CartController extends Controller{

    public function addToCart(Request $request) {

        $product = Product::find($request->product_id);
        $product_color = ProductColor::find($request->product_color);
        $product_size = ProductSize::find($request->product_size);


        // Validation;
            // $this->validate($request,[
            //     'product_size' => 'required',
            // ]);
        $product_sizeValid = ProductSize::where('product_id',$request->product_id)->first();
        if (!$product_sizeValid==0) {
            $this->validate($request,[
                'product_size' => 'required',
                ]);
            }
        $product_colorValid = ProductColor::where('product_id',$request->product_id)->first();
        if (!$product_colorValid==0) {
        $this->validate($request,[
            'product_color'=> 'required',
        ]);
    }



        //if size price, color price not available value will be default
        if (isset($product_size)) {
            $proSize = $product_size->product_size;
            $sizePrice = $product_size->product_price;
        }else {
            $proSize = 'NA';
            $sizePrice = 'NA';
        }

        if (isset($product_color)) {
            $colorPrice = $product_color->product_price;
            $colorImage = $product_color->product_color;
        }else {
            $colorPrice = 'NA';
            $colorImage = 'NA';
        }

        Cart::add([
            'id'    => $product->id,
            'name'  => $product->product_name,
            'qty'   => $request->product_quantity,
            'price' => $product->product_price,
            'options'   => [
                'image'  => $product->product_image,
                'colorImage'  => $colorImage,
                'size'   => $proSize,
                'sizePrice' => $sizePrice,
                'colorPrice' => $colorPrice,
            ]
        ]);
        // return Cart::Content();
        return redirect('/show-cart');
    }

    public function showToCart() {
        $cartProducts = Cart::content();
        // return $cartProducts;

        return view('ecom2.front.show-cart', [
            'cartProducts'  =>  $cartProducts
        ]);
    }

    public function updateCart(Request $request) {
        Cart::update($request->row_id, $request->product_quantity);
        return redirect('/show-cart')->with('message', 'Cart product update successfully');
    }

    public function deleteCart($rowId) {
        Cart::remove($rowId);
        return redirect('/show-cart')->with('message', 'Cart product remove successfully');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
        // public $sizeColorPrices=[ 100];
        // private $sizePrice;
        // private $colorPrice;

        // private $proSize;
        // private $colorImage;
    //this function is for showing min n max price in product details page.
    //this function is for taking multi price from multi table for one product n put them in
    // one array n use min max method.
    public function sizeColorPrices($product, $product_colors,$product_sizes)
    {
        
            //if price based on color & size both available.
            //
            if (isset($product_colors) && isset($product_sizes)){

                foreach ($product_sizes as $product_size){
                $sizeColorPrices[] = $product_size->product_price;
                // $proSize = $product_size->product_size;
                // $sizePrice = $product_size->product_price;
                }
                foreach ($product_colors as $product_color){
                $sizeColorPrices[] = $product_color->product_price;
                // $colorPrice = $product_color->product_price;
                // $colorImage = $product_color->product_color;
                }


            //if price based on ////////////////size not  available.
            // }elseif( isset($product_sizes) && !isset($product_sizes->product_price)){

            //     foreach ($product_sizes as $product_size) {
            //     $sizeColorPrices[] = $product_size->product_price;
            //     $proSize = $product_size->product_size;
            //     $sizePrice = 0;
            //     $colorPrice = 'NA';
            //     $colorImage = 'NA';
            //     }
            }elseif( isset($product_sizes)){

                function func($product_sizes)
                {
                    foreach ($product_sizes as $product_size) {
                        $sizeColorPrices[] = $product_size->product_price;
                        // $proSize = $product_size->product_size;
                        // $sizePrice = $product_size->product_price;
                        // $colorPrice = 'NA';
                        // $colorImage = 'NA';
                    }
                }

            //if price based on color available only.
            }elseif(isset($product_colors)){

                foreach ($product_colors as $product_color) {
                    $sizeColorPrices[] = $product_color->product_price;
                    // $colorPrice = $product_color->product_price;
                    // $colorImage = $product_color->product_color;
                    // $proSize = 'NA';
                    // $sizePrice = 'NA';
                    }

            } else {
                //if price based on color & size both are not available
                //this part is not working dont know why
                    $sizeColorPrices = [$product->product_price, 00];
                    // $proSize = 'NA';
                    // $sizePrice = 'NA';
                    // $colorPrice = 'NA';
                    // $colorImage = 'NA';
                }


                // second if
                //if price based on color & size both are not available
                if (empty($sizeColorPrices)) {
                    $sizeColorPrices = [$product->product_price ,0];
                    // $proSize = 'NA';
                    // $sizePrice = 'NA';
                    // $colorPrice = 'NA';
                    // $colorImage = 'NA';
                }else {
                //  $sizeColorPrices[] = $product->product_price;
                }
                //return $sizeColorPrices;
       
                        // PHP function to check for even elements in an array 
              

                // return $sizeColorPrices;
                   
                return $sizeColorPrices;

    }
}

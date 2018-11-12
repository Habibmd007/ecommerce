<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
        private $sizeColorPrices=[];
        private $proSize;
        private $sizePrice;
        private $colorPrice;
        private $colorImage;
    //this function is for showing min n max price in product details page.
    //this function is for taking multi price from multi table for one product n put them in one array n use min max method.
    public function sizeColorPrices($product, $product_colors,$product_sizes)
    {
        

            if (isset($product_colors) && isset($product_sizes)){

                foreach ($product_sizes as $product_size) {
                $sizeColorPrices[] = $product_size->product_price;
                $proSize = $product_size->product_size;
                $sizePrice = $product_size->product_price;
                }
                 foreach ($product_colors as $product_color) {
                $sizeColorPrices[] = $product_color->product_price;
                $colorPrice = $product_color->product_price;
                $colorImage = $product_color->product_color;
                }
                
            }elseif( isset($product_sizes)){

                foreach ($product_sizes as $product_size) {
                $sizeColorPrices[] = $product_size->product_price;
                $proSize = $product_size->product_size;
                $sizePrice = $product_size->product_price;
                $colorPrice = 'NA';
                $colorImage = 'NA';
                }
                
            }elseif(isset($product_colors)){

                foreach ($product_colors as $product_color) {
                    $sizeColorPrices[] = $product_color->product_price;
                    $colorPrice = $product_color->product_price;
                    $colorImage = $product_color->product_color;
                    $proSize = 'NA';
                    $sizePrice = 'NA';
                    }

            } else {
                
                    $sizeColorPrices = [$product->product_price ,00];
                    $proSize = 'NA';
                    $sizePrice = 'NA';
                    $colorPrice = 'NA';
                    $colorImage = 'NA';
                }


                // second if

                if (empty($sizeColorPrices)) {
                    $sizeColorPrices = [$product->product_price ,0];
                    $proSize = 'NA';
                    $sizePrice = 'NA';
                    $colorPrice = 'NA';
                    $colorImage = 'NA';
                }
                //return $sizeColorPrices;
       
                        // PHP function to check for even elements in an array 
              

                return $sizeColorPrices;
    }
}

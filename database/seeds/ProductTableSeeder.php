<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'category_id'=>5,
            'sub_category_id'=>2,
            'brand_id'=>3,
            'category_slug'=>'Groceries-Pets',
            'sub_category_slug'=>'foods',
            'brand_slug'=>'Food-One',
            'slug'=>'Nuts',
            'product_name'=>'Almond 100g',
            'product_price'=>'200',
            'product_quantity'=>'22',
            'product_skew'=>'234', 
            'product_short_description'=>'product short description', 
            'product_long_description'=>'product long description', 
            'product_image'=>'product-images/Almonds, 100g.jpg', 
            'active'=>'1',
        ]);
        $product->save();
        $product = new Product([
            'category_id'=>5,
            'sub_category_id'=>2,
            'brand_id'=>3,
            'category_slug'=>'Groceries-Pets',
            'sub_category_slug'=>'foods',
            'brand_slug'=>'Food-One',
            'slug'=>'Nuts',
            'product_name'=>'Cashew Nuts, 100g',
            'product_price'=>'200',
            'product_quantity'=>'22',
            'product_skew'=>'235', 
            'product_short_description'=>'product short description', 
            'product_long_description'=>'product long description', 
            'product_image'=>'product-images/Cashew Nuts, 100g.jpg', 
            'active'=>'1',
        ]);
        $product->save();
        $product = new Product([
            'category_id'=>5,
            'sub_category_id'=>2,
            'brand_id'=>3,
            'category_slug'=>'Groceries-Pets',
            'sub_category_slug'=>'foods',
            'brand_slug'=>'Food-One',
            'slug'=>'Nuts',
            'product_name'=>'Pista..., 250g',
            'product_price'=>'200',
            'product_quantity'=>'22',
            'product_skew'=>'236', 
            'product_short_description'=>'product short description', 
            'product_long_description'=>'product long description', 
            'product_image'=>'product-images/Pista..., 250g.jpg', 
            'active'=>'1',
        ]);
        $product->save();
       
       
       
       
       
       
       
        $product = new Product([
            'category_id'=>7,
            'sub_category_id'=>5,
            'brand_id'=>7,
            'category_slug'=>'mens-wear',
            'sub_category_slug'=>'foods',
            'brand_slug'=>'zaara',
            'slug'=>'Jacket',
            'product_name'=>'Jackets',
            'product_price'=>'200',
            'product_quantity'=>'22',
            'product_skew'=>'m36', 
            'product_short_description'=>'product short description', 
            'product_long_description'=>'product long description', 
            'product_image'=>'product-images/mans31.jpg', 
            'active'=>'1',
        ]);
        $product->save();
        $product = new Product([
            'category_id'=>7,
            'sub_category_id'=>5,
            'brand_id'=>7,
            'category_slug'=>'mens-wear',
            'sub_category_slug'=>'shirts',
            'brand_slug'=>'zaara',
            'slug'=>'t-Shirt',
            'product_name'=>'T-Shirt',
            'product_price'=>'200',
            'product_quantity'=>'22',
            'product_skew'=>'m37', 
            'product_short_description'=>'product short description', 
            'product_long_description'=>'product long description', 
            'product_image'=>'product-images/T-Shirt.jpg', 
            'active'=>'1',
        ]);
        $product->save();
        $product = new Product([
            'category_id'=>7,
            'sub_category_id'=>5,
            'brand_id'=>7,
            'category_slug'=>'mens-wear',
            'sub_category_slug'=>'shirts',
            'brand_slug'=>'zaara',
            'slug'=>'Polo-Shirt',
            'product_name'=>'Polo Shirt',
            'product_price'=>'200',
            'product_quantity'=>'22',
            'product_skew'=>'m38', 
            'product_short_description'=>'product short description', 
            'product_long_description'=>'product long description', 
            'product_image'=>'product-images/Polo Shirt.jpg', 
            'active'=>'1',
        ]);
        $product->save();
        
        
        
        
        
        
        
        
        
        $product = new Product([
            'category_id'=>1,
            'sub_category_id'=>1,
            'brand_id'=>1,
            'category_slug'=>'Electronic-Devices',
            'sub_category_slug'=>'Mobiles',
            'brand_slug'=>'Apple',
            'slug'=>'iphone',
            'product_name'=>'iPhone',
            'product_price'=>'200',
            'product_quantity'=>'22',
            'product_skew'=>'m39', 
            'product_short_description'=>'product short description', 
            'product_long_description'=>'product long description', 
            'product_image'=>'product-images/iPhone.jpg', 
            'active'=>'1',
        ]);
        $product->save();
        $product = new Product([
            'category_id'=>1,
            'sub_category_id'=>1,
            'brand_id'=>1,
            'category_slug'=>'Electronic-Devices',
            'sub_category_slug'=>'Mobiles',
            'brand_slug'=>'Microsoft',
            'slug'=>'surface',
            'product_name'=>'Microsoft Surface',
            'product_price'=>'200',
            'product_quantity'=>'22',
            'product_skew'=>'m40', 
            'product_short_description'=>'Microsoft Surface short description', 
            'product_long_description'=>'Microsoft Surface long description', 
            'product_image'=>'product-images/Microsoft-Surface.jpg', 
            'active'=>'1',
        ]);
        $product->save();
        $product = new Product([
            'category_id'=>1,
            'sub_category_id'=>1,
            'brand_id'=>1,
            'category_slug'=>'Electronic-Devices',
            'sub_category_slug'=>'Mobiles',
            'brand_slug'=>'Apple',
            'slug'=>'iphone',
            'product_name'=>'iPhone',
            'product_price'=>'200',
            'product_quantity'=>'22',
            'product_skew'=>'m39', 
            'product_short_description'=>'product short description', 
            'product_long_description'=>'product long description', 
            'product_image'=>'product-images/iPhone.jpg', 
            'active'=>'1',
        ]);
        $product->save();

       
    }
}

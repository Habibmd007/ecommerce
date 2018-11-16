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
            'category_id'=>'1',
            'sub_category_id'=>'1',
             'brand_id'=>'1',
             'product_name'=>'Product Name',
             'product_price'=>'200',
             'product_quantity'=>'22',
             'product_skew'=>'234', 
               'product_short_description'=>'product short description', 
               'product_long_description'=>'product long description', 
               'product_image'=>'http://oneeyevisionphotography.com/wp-content/uploads/2017/03/One-Eye-Vision-Professional-Editorial-Sports-Food-Product-Photography-commercial-branding-photos-Ahmedabad-Gujarat-India-5.jpg', 
               'publication_status'=>'1',
        ]);
        $product->save();
        $product = new Product([
            'category_id'=>'1',
            'sub_category_id'=>'1',
             'brand_id'=>'1',
             'product_name'=>'Product Name2',
             'product_price'=>'200',
             'product_quantity'=>'22',
             'product_skew'=>'234', 
               'product_short_description'=>'product short description2', 
               'product_long_description'=>'product long description2', 
               'product_image'=>'http://oneeyevisionphotography.com/wp-content/uploads/2017/03/One-Eye-Vision-Professional-Editorial-Sports-Food-Product-Photography-commercial-branding-photos-Ahmedabad-Gujarat-India-5.jpg', 
               'publication_status'=>'1',
        ]);
        $product->save();
    }
}

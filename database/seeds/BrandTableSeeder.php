<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = new Brand([
            'category_id' => 1,
            'sub_category_id' => 2,
            'category_slug' => 'Electronic-Devices',
            'sub_category_slug' => 'Computer',
            'slug' => 'Microsoft',
            'image' => 'product-images/Microsoft.jpg',
            'brand_name' => 'Microsoft',
            'brand_description' => 'Microsoft corporation',
        ]);
        $brand->save();
        $brand = new Brand([
            'category_id' => 1,
            'category_slug' => 'Electronic-Devices',
            'slug' => 'Apple',
            'image' => '',
            'brand_name' => 'Apple',
            'brand_description' => 'Apple corporation',
        ]);
        $brand->save();
        $brand = new Brand([
            'category_id' => 5,
            'sub_category_id' =>2,
            'category_slug' => 'Groceries-Pets',
            'sub_category_slug' => 'foods',
            'slug' => 'Pran',
            'image' => '',
            'brand_name' => 'Pran',
            'brand_description' => 'Pran rfl corporation',
        ]);
        $brand->save();
        $brand = new Brand([
            'category_id' => 5,
            'sub_category_id' =>2,
            'category_slug' => 'Groceries-Pets',
            'sub_category_slug' => 'foods',
            'slug' => 'Food-One',
            'image' => '',
            'brand_name' => 'Food One',
            'brand_description' => 'Food One Dry foods',
        ]);
        $brand->save();
        $brand = new Brand([
            'category_id' => 5,
            'sub_category_id' =>2,
            'category_slug' =>'Groceries-Pets',
            'sub_category_slug' =>'foods',
            'slug' => 'Barilla',
            'image' => '',
            'brand_name' => 'Barilla',
            'brand_description' => 'Barilla is a pasta &noodles brand',
        ]);
        $brand->save();
        $brand = new Brand([
            'category_id' => 5,
            'sub_category_id' =>2,
            'category_slug' =>'Groceries-Pets',
            'sub_category_slug' =>'oil',
            'slug' => 'Teer',
            'image' => '',
            'brand_name' => 'Teer',
            'brand_description' => 'Teer is oil brand',
        ]);
        $brand->save();
        $brand = new Brand([
            'category_id' => 5,
            'sub_category_id' =>2,
            'category_slug' =>'Groceries-Pets',
            'sub_category_slug' =>'oil',
            'slug' => 'Rupchada',
            'image' => '',
            'brand_name' => 'Rupchada',
            'brand_description' => 'Rupchada is oil brand',
        ]);
        $brand->save();
        $brand = new Brand([
            'slug' => 'unisex',
            'image' => '',
            'brand_name' => 'Zaara',
            'brand_description' => 'Zaara is fasion brand',
        ]);
        $brand->save();
    }
}

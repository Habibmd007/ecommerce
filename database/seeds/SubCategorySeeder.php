<?php

use Illuminate\Database\Seeder;
use App\Subcategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'category_id' => '1',
            'category_slug' => 'Electronic-Devices',
            'sub_category_name' => 'Mobiles',
            'sub_category_disc' => 'Mobile sub category',
            'slug' => 'Mobiles',
            'photo' => 'product-images/Mobile.png',
            ]);
        SubCategory::create([
            'category_id' => '1',
            'category_slug' => 'Electronic-Devices',
            'sub_category_name' => 'Computer',
            'sub_category_disc' => 'Computer sub category',
            'slug' => 'Computer',
            'photo' => 'product-images/Computer.png',
            ]);
        SubCategory::create([
            'category_id' => '1',
            'category_slug' => 'Electronic-Devices',
            'sub_category_name' => 'Camera',
            'sub_category_disc' => 'Camera sub category',
            'slug' => 'Camera',
            'photo' => 'product-images/Camera.jpg',
            ]);
        SubCategory::create([
            'category_id' => '5',
            'category_slug' => 'Groceries-Pets',
            'sub_category_name' => 'foods',
            'sub_category_disc' => 'food sub category under grocery category',
            'slug' => 'foods',
            'photo' => 'product-images/foods.jpg',
            ]);
        SubCategory::create([
            'category_id' => '5',
            'category_slug' => 'Groceries-Pets',
            'sub_category_name' => 'oils',
            'sub_category_disc' => 'oil sub category under grocery category',
            'slug' => 'oils',
            'photo' => 'product-images/oils.jpg',
            ]);
        SubCategory::create([
            'category_id' => '7',
            'category_slug' => 'mens-wear',
            'sub_category_name' => 'T-shirts',
            'sub_category_disc' => 'T-shirt  sub category',
            'slug' => 'shirts',
            'photo' => 'product-images/T-shirts.jpg',
            ]);
        SubCategory::create([
            'category_id' => '7',
            'category_slug' => 'mens-wear',
            'sub_category_name' => 'Jackets',
            'sub_category_disc' => 'Jacket  sub category',
            'slug' => 'Jackets',
            'photo' => 'product-images/Jackets.jpg',
            ]);
        SubCategory::create([
            'category_id' => '7',
            'category_slug' => 'mens-wear',
            'sub_category_name' => 'Hoodies',
            'sub_category_disc' => 'Hoodies  sub category',
            'slug' => 'Hoodies',
            'photo' => 'product-images/Hoodies.png',
            ]);
    }
}

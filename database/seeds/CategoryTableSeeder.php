<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Electronic Devices',
            'category_disc' => 'Electronic Devices parent category',
            'slug' => 'Electronic-Devices',
            'photo' => 'thumbnail_images/Electronic-Devices.jpg',
            ]);
        Category::create([
            'category_name' => 'Electronic Accessories',
            'category_disc' => 'Electronic Accessories Devices parent category',
            'slug' => 'Electronic-Accessories',
            'photo' => 'thumbnail_images/Electronic-Accessories.jpg',
            ]);
        Category::create([
            'category_name' => 'TV & Home Appliances',
            'category_disc' => 'TV & Home Appliances parent category',
            'slug' => 'Home-Appliances',
            'photo' => 'thumbnail_images/Electronics.jpg',
            ]);
        Category::create([
            'category_name' => 'Health & Beauty',
            'category_disc' => 'Health & Beauty parent category',
            'slug' => 'Health-Beauty',
            'photo' => 'thumbnail_images/Health-Beauty.jpg',
            ]);
        Category::create([
            'category_name' => 'Groceries & Pets',
            'category_disc' => 'Groceries & Pets parent category',
            'slug' => 'Groceries-Pets',
            'photo' => 'thumbnail_images/Groceries-Pets.jpg',
            ]);
        Category::create([
            'category_name' => 'Home & Lifestyle',
            'category_disc' => 'Home & Lifestyle parent category',
            'slug' => 'Home-Lifestyle',
            'photo' => 'thumbnail_images/Home-Lifestyle.jpg',
            ]);
       
        Category::create([
            'category_name' => 'Mens wear',
            'category_disc' => 'Mens wear parent category',
            'slug' => 'mens-wear',
            'photo' => 'thumbnail_images/manwear.jpg',
            ]);
        Category::create([
            'category_name' => 'Womens wear',
            'category_disc' => 'Womens wear parent category',
            'slug' => 'Womens-wear',
            'photo' => 'thumbnail_images/Womens.jpg',
            ]);
        Category::create([
            'category_name' => 'Watches & Accessories',
            'category_disc' => 'Watches & Accessories parent category',
            'slug' => 'Watches-Accessories',
            'photo' => 'thumbnail_images/Watches-Accessories.jpg',
            ]);
        Category::create([
            'category_name' => 'Sports & Outdoor',
            'category_disc' => 'Sports & Outdoor parent category',
            'slug' => 'Sports-Outdoor',
            'photo' => 'thumbnail_images/Sports-Outdoor.jpg',
            ]);
        Category::create([
            'category_name' => 'Automotive & Motorbike',
            'category_disc' => 'Automotive & Motorbike parent category',
            'slug' => 'Automotive&Motorbike',
            'photo' => 'thumbnail_images/Automotive&Motorbike.jpg',
            ]);
       
        
    }
}

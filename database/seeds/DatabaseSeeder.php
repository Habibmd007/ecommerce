<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    //  public function run()
    //  {
    //     factory(App\Category::class,10)->create();
    //  }
    public function run()
    {
         $this->call([
            //  CategoryTableSeeder::class,
            //  SubCategorySeeder::class,
            //  UserTableSeeder::class,
             ProductTableSeeder::class,
            //  BrandTableSeeder::class
         ]);
         
    }
}

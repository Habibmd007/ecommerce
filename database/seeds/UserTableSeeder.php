<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'habiib',
            'email' => 'habibmd007@gmail.com',
            'phone' => '+8801923994606',
            'password' => bcrypt(123456)
            ]);
        User::create([
            'name' => 'Rock',
            'email' => 'rock@gmail.com',
            'phone' => '+88019239674506',
            'password' => bcrypt(123456)
            ]);
    }
}

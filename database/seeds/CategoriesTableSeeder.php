<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Home Appliances',
            'details' => 'This is the home appliance category. Welcome.',
            'image' => 'images/posts/1.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Clothing',
            'details' => 'This is the clothing category. Welcome.',
            'image' => 'images/posts/2.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Kitchen Appliances',
            'details' => 'This is the kitchen appliance category. Welcome.',
            'image' => 'images/posts/3.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Phones',
            'details' => 'This is the phone category. Welcome.',
            'image' => 'images/posts/4.jpg',
        ]);




    }
}

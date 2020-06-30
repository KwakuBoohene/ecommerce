 <?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Iron',
            'slug' => 'iron',
            'image'=> 'images/items/1.jpg',
            'price' => 40,
            'details' => 'This is the new Philips Iron 2.0',
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Phone',
            'slug' => 'phone',
            'image'=> 'images/items/4.jpg',
            'price' => 5000,
            'details' => 'This is the new iphone x',
            'category_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => 'Bag',
            'slug' => 'bag',
            'image'=> 'images/items/3.jpg',

            'price' => 400,
            'details' => 'This is the new Prada Bag from Prada ',
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Kitchen Mixer',
            'slug' => 'mixer',
            'image'=> 'images/items/2.jpg',

            'price' => 90,
            'details' => 'This is the new Bosch Baking Mixer 2.0',
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => 'Watch',
            'slug' => 'watch',
            'image'=> 'images/items/7.jpg',

            'price' => 600,
            'details' => 'This is the new Philips Smart Watch 2.0',
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Casa Trassaco Sofa',
            'slug' => 'sofa',
            'image'=> 'images/items/5.jpg',

            'price' => 600,
            'details' => 'This is the new Casa Trassaco sofa for bed resting',
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Casa Trassaco Chair',
            'slug' => 'chair',
            'image'=> 'images/items/6.jpg',
            
            'price' => 600,
            'details' => 'This is the new Casa Trassaco chair for bed resting',
            'category_id' => 1,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagepath' => 'http://img12.nnm.me/2/4/b/b/0/26b6437fff5d254040902099186.jpg',
        	'title' => 'Steven Hawking',
        	'description' => 'Some cool book',
        	'price' => 15
        ]);
        $product->save();
    }
}

<?php

use Illuminate\Database\Seeder;

// Model
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run()
    {
        Product::create([
            'id' => 1,
            'name' => 'product-1',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void, 
     */
    public function run()
    {
     	App\Pizza::create(['name'=>'pizza1', 'price_little'=>1400.0, 'price_big' => 1600.0, 'status'=>1]);
     	App\Pizza::create(['name'=>'pizza2', 'price_little'=>1600.0, 'price_big' => 2200.0, 'status'=>1]);

     	App\Product::create(['name'=>'lardons']);
     	App\Product::create(['name'=>'champignon']);
     	App\Product::create(['name'=>'oeuf']);

     	DB::table('product_pizza')->insert(
    ['pizza_id' => 1, 'product_id' => 1],
    ['pizza_id' => 1, 'product_id' => 2],
    ['pizza_id' => 2, 'product_id' => 2],
    ['pizza_id' => 2, 'product_id' => 3]
);
    }
}

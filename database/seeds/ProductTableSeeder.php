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
        $product = new \App\Product();
        $product->id = 1;
        $product->name = 'cocacola';
        $product->description = 'nước ngọt';
        $product->price = '10000';
        $product->price_old = '8000';
        $product->image = 'dsds';
        $product->save();

        $product = new \App\Product();
        $product->name = 'pepsi';
        $product->description = 'nước ngọt';
        $product->price = '10000';
        $product->price_old = '8000';
        $product->image = 'dsds';
        $product->save();


        $product = new \App\Product();
        $product->name = 'rebul';
        $product->description = 'nước ngọt';
        $product->price = '12000';
        $product->price_old = '15000';
        $product->image = 'dsds';
        $product->save();


        $product = new \App\Product();
        $product->name = 'hamberger';
        $product->description = 'bánh';
        $product->price = '20000';
        $product->price_old = '18000';
        $product->image = 'dsds';
        $product->save();


    }
}

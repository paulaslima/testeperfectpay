<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

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
        'name'=>'PerfectCaps',
        'description'=> 'Produto 01',
        'price'=> 'R$100',
        ]);
    }
}

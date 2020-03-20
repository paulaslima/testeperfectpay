<?php

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::create([
        'quantity'=>'100',
        'discout' =>'R$10',
        'sale_amount' =>'100', 
        'status'=>'Vendidos',
        ]);
    }
}

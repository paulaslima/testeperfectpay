<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([

        'name' => 'Paula Lima',
        'identification_type' => 'CPF',
        'identification_number' => '123.456.789-98',
        'email' => 'paulaslima93@gmail.com',
        ]);
    }
}

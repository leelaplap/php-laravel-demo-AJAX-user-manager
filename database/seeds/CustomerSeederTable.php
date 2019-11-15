<?php

use Illuminate\Database\Seeder;

class CustomerSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new \App\Customer();
        $customer->name = 'dat';
        $customer->phone = '03584633';
        $customer->address = 'hanoi';
        $customer->save();

        $customer = new \App\Customer();
        $customer->name = 'minh';
        $customer->phone = '01234567';
        $customer->address = 'hanoi';
        $customer->save();
        $customer = new \App\Customer();
        $customer->name = 'trang';
        $customer->phone = '98746512';
        $customer->address = 'hanoi';
        $customer->save();

    }
}

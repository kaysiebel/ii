<?php

use Illuminate\Database\Seeder;

class ConsumptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Consumption', 200)->create();
    }
}

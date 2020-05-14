<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'created_at' => now(),
                'updated_at' => now(),
                'name' => 'Schraube i3',
                'piece_start_stock' => '3000',
                'piece_min_stock' => '2000',
                'piece_max_stock' => '10000',
                'piece_order_stock' => '2300',
                'piece_weight' => '0.02',
                'unit_start_stock' => '30',
                'unit_min_stock' => '20',
                'unit_max_stock' => '100',
                'unit_order_stock' => '24',
                'unit_weight' => '2',
                'unit_size' => '100',
                'location' => 'Halle 3',
                'location_maxweight' => '3000',
                'image' => 'https://source.unsplash.com/random/600x300'
            ],
            [
                'created_at' => now(),
                'updated_at' => now(),
                'name' => 'Monitor A380',
                'piece_start_stock' => '3000',
                'piece_min_stock' => '2000',
                'piece_max_stock' => '10000',
                'piece_order_stock' => '2300',
                'piece_weight' => '0.02',
                'unit_start_stock' => '30',
                'unit_min_stock' => '20',
                'unit_max_stock' => '100',
                'unit_order_stock' => '24',
                'unit_weight' => '2',
                'unit_size' => '100',
                'location' => 'Halle 3',
                'location_maxweight' => '3000',
                'image' => 'https://picsum.photos/200/300'
            ],
            [
                'created_at' => now(),
                'updated_at' => now(),
                'name' => 'Kabel 0815',
                'piece_start_stock' => '3000',
                'piece_min_stock' => '2000',
                'piece_max_stock' => '10000',
                'piece_order_stock' => '2300',
                'piece_weight' => '0.02',
                'unit_start_stock' => '30',
                'unit_min_stock' => '20',
                'unit_max_stock' => '100',
                'unit_order_stock' => '24',
                'unit_weight' => '2',
                'unit_size' => '100',
                'location' => 'Halle 3',
                'location_maxweight' => '3000',
                'image' => 'https://picsum.photos/200/200'
            ]
        ]);
    }
}

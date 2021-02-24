<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'LARAVEL POUR LES NULS',
            'description' => 'Bla Bla Bla Bla Bla Bla Bla Bla Bla  THE END',
            'price_ht' => '69,90',
            'weight' => '666',
            'tva' => '27',
            'stock' => '140',
        ]);
    }
}

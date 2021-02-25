<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
           'name' => 'Réseaux'
        ]);

        DB::table('categories')->insert([
            'name' => 'Développement'
        ]);

        DB::table('categories')->insert([
            'name' => 'Hardware'
        ]);

        DB::table('categories')->insert([
            'name' => 'Systèmes d\'exploitation'
        ]);

        DB::table('categories')->insert([
            'name' => 'Software'
        ]);
    }
}

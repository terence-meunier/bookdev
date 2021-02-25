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
            'price_ht' => 69.90,
            'weight' => 666,
            'tva' => 20,
            'stock' => 140,
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'title' => 'Java script pour les experts',
            'description' => 'Javascript deviens plus simple pour les noobies',
            'price_ht' => 69.90,
            'weight' => 666,
            'tva' => 20,
            'stock' => 65,
            'categories_id' => 2
        ]);

        DB::table('products')->insert([
            'title' => 'Mac OS X',
            'description' => 'Steve Jobs bli bli bli bli bli bli bli bli  THE END',
            'price_ht' => 50.90,
            'weight' => 555,
            'tva' => 20,
            'stock' => 23,
            'categories_id' => 4
        ]);

        DB::table('products')->insert([
            'title' => 'Les réseaux informatiques',
            'description' => 'Créer et développer votre réseaux informatiques',
            'price_ht' => 50.90,
            'weight' => 555,
            'tva' => 20,
            'stock' => 23,
            'categories_id' => 1
        ]);

        DB::table('products')->insert([
            'title' => 'Ruby on rails',
            'description' => 'Développer et deployer vos sites internet en utilisant la programmation ruby',
            'price_ht' => 15.67,
            'weight' => 34,
            'tva' => 19.6,
            'stock' => 34,
            'categories_id' => 5
        ]);
    }
}

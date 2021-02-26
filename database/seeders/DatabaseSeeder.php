<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // La fonction call() lance les fonctions run() dans toutes les classes Seeder spécifiés
        $this->call([
            CategorySeeder::class,
            ProductSeeder::classstateless
        ]);
    }
}

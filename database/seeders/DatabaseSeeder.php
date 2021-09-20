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
        $this->call([
            UserSeeder::class,
            DarahSeeder::class,
            AgamaSeeder::class,
            PekerjaanSeeder::class,
            PendidikanSeeder::class,
            StatusHubunganDalamKeluargaSeeder::class,
            StatusPerkawinanSeeder::class
        ]);
    }
}

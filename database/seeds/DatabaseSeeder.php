<?php

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
        // $this->call(SiswaTableSeeder::class);
        $this->call([
            // ProvinsiTableSeeder::class,
            // KabupatenTableSeeder::class,
            KecamatanTableSeeder::class,
        ]);
    }
}

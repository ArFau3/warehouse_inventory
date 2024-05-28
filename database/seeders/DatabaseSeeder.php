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
        // Tambahkan pemanggilan ke UserSeeder di sini
        $this->call(UserSeeder::class);
    }
}

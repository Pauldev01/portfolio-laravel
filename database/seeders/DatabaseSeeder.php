<?php

namespace Database\Seeders;

use App\Models\Aboutmeli;
use App\Models\Welcome;
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
            WelcomeSeeder::class,
            AboutmeSeeder::class,
            AboutmeliSeeder::class,
            NavbarSeeder::class
        ]);
    }
}

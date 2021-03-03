<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('welcomes')->insert(
            [
                'h1hero'=>'yo',
                'h2hero'=>'yo',
                'ahero'=>'yo',
                'imghero'=>'yo',
                'spanservice'=>'yo',
                'h2service'=>'yo',
                'pservice'=>'Duis aute irure dolor in reprehenderit',
                'a1service'=>'yo',
                'p1service'=>'Duis aute irure dolor in reprehenderit',
                'a2service'=>'yo',
                'p2service'=>'Duis aute irure dolor in reprehenderit',
                'a3service'=>'yo',
                'p3service'=>'Duis aute irure dolor in reprehenderit',
                'h3cta'=>'Call To Action',
                'pcta'=>'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'acta'=>'yo',
                ],
        );
    }
}

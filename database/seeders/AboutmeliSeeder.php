<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutmeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutmelis')->insert(
            [
                [
                    "li"=>'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                    "icon"=>'icofont-check-circled'
                ],
                [
                    "li"=>'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                    "icon"=>'icofont-check-circled'
                ],
                [
                    "li"=>'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                    "icon"=>'icofont-check-circled'
                ],
            ]
        );
    }
}

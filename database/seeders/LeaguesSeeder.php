<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LeaguesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = DB::table('countries')->pluck('id', 'name');
        $now = Carbon::now();

        $leagues = [
            // Regionales oficiales
            [
                'name' => 'LEC',
                'logo' => '',
                'country_id' => $countries['Europa'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'LCS',
                'logo' => '',
                'country_id' => $countries['Norteamérica'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('leagues')->insert($leagues);

    }
}

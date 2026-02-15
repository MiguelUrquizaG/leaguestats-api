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
            [
                'name' => 'LCK',
                'logo' => '',
                'country_id' => $countries['Corea del Sur'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'LPL',
                'logo' => '',
                'country_id' => $countries['China'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'PCS',
                'logo' => '',
                'country_id' => $countries['Sudeste Asiático'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'CBLOL',
                'logo' => '',
                'country_id' => $countries['Brasil'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'LCO',
                'logo' => '',
                'country_id' => $countries['Oceanía'],
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Eventos internacionales
            [
                'name' => 'World Championship',
                'logo' => '',
                'country_id' => $countries['Indefinido'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Mid-Season Invitational',
                'logo' => '',
                'country_id' => $countries['Indefinido'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'First Stand Tournament',
                'logo' => '',
                'country_id' => $countries['Indefinido'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('leagues')->insert($leagues);

    }
}

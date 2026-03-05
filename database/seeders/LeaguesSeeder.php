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
                'logo' => 'https://polymarket-upload.s3.us-east-2.amazonaws.com/lec-g2-esports-vs-giantx-5_RujSy15Beo.png',
                'country_id' => $countries['Europa'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'LCS',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/7/71/League_championship_series_logo_2021.svg',
                'country_id' => $countries['Norteamérica'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'LCK',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/1/13/League_of_Legends_Champions_Korea_logo.svg',
                'country_id' => $countries['Corea del Sur'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'LPL',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/b/b4/League_of_legends_pro_league_logo.svg',
                'country_id' => $countries['China'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'PCS',
                'logo' => 'https://liquipedia.net/commons/images/thumb/b/bb/Pacific_Championship_Series_lightmode.png/600px-Pacific_Championship_Series_lightmode.png',
                'country_id' => $countries['Sudeste Asiático'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'CBLOL',
                'logo' => 'https://liquipedia.net/commons/images/thumb/9/95/CBLOL_2021_lightmode.png/600px-CBLOL_2021_lightmode.png',
                'country_id' => $countries['Brasil'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'LCO',
                'logo' => 'https://liquipedia.net/commons/images/thumb/9/94/LCO_lightmode.png/600px-LCO_lightmode.png',
                'country_id' => $countries['Oceanía'],
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Eventos internacionales
            [
                'name' => 'World Championship',
                'logo' => 'https://liquipedia.net/commons/images/thumb/8/85/League_of_Legends_Worlds_lightmode.png/600px-League_of_Legends_Worlds_lightmode.png',
                'country_id' => $countries['Indefinido'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Mid-Season Invitational',
                'logo' => 'https://liquipedia.net/commons/images/thumb/f/f7/MSI_2021_lightmode.png/600px-MSI_2021_lightmode.png',
                'country_id' => $countries['Indefinido'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'First Stand Tournament',
                'logo' => 'https://liquipedia.net/commons/images/thumb/d/d7/First_Stand_Tournament_allmode.png/600px-First_Stand_Tournament_allmode.png',
                'country_id' => $countries['Indefinido'],
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('leagues')->insert($leagues);

    }
}

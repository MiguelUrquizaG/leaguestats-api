<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeaguesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = DB::table('countries')->pluck('id', 'name');

        $leagues = [
            // 🧩 Regionales oficiales
            [
                'name' => 'LEC',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/3/35/League_of_Legends_EMEA_Championship_logo.svg',
                'country_id' => $countries['Europa'],
            ],
            [
                'name' => 'LCS',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/9/9a/League_of_Legends_Championship_Series.svg',
                'country_id' => $countries['Norteamérica'],
            ],
            [
                'name' => 'LCK',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/e/eb/League_of_Legends_Champions_Korea_logo.svg',
                'country_id' => $countries['Corea del Sur'],
            ],
            [
                'name' => 'LPL',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/8/8d/League_of_Legends_Pro_League_logo.svg',
                'country_id' => $countries['China'],
            ],
            [
                'name' => 'PCS',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/ab/Pacific_Championship_Series_logo.svg',
                'country_id' => $countries['Sudeste Asiático'],
            ],
            [
                'name' => 'CBLOL',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0d/CBLOL_logo.png',
                'country_id' => $countries['Brasil'],
            ],
            [
                'name' => 'LCO',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/6/6c/OPL_logo.png',
                'country_id' => $countries['Oceanía'],
            ],

            // 🌍 Eventos internacionales (usar “Indefinido”)
            [
                'name' => 'World Championship',
                'logo' => 'https://example.com/logos/worlds.svg',
                'country_id' => $countries['Indefinido'],
            ],
            [
                'name' => 'Mid-Season Invitational',
                'logo' => 'https://example.com/logos/msi.svg',
                'country_id' => $countries['Indefinido'],
            ],
            [
                'name' => 'First Stand Tournament',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/5/5a/League_of_Legends_First_Stand_Tournament_logo.svg',
                'country_id' => $countries['Indefinido'],
            ],
        ];

        DB::table('leagues')->insert($leagues);
    }
}

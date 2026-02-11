<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            // Europa
            ['name' => 'Europa', 'flag' => '🇪🇺'],
            ['name' => 'Francia', 'flag' => '🇫🇷'],
            ['name' => 'Alemania', 'flag' => '🇩🇪'],
            ['name' => 'España', 'flag' => '🇪🇸'],
            ['name' => 'Italia', 'flag' => '🇮🇹'],
            ['name' => 'Reino Unido', 'flag' => '🇬🇧'],

            // América del Norte
            ['name' => 'Norteamérica', 'flag' => '🇺🇸'],
            ['name' => 'Estados Unidos', 'flag' => '🇺🇸'],
            ['name' => 'Canadá', 'flag' => '🇨🇦'],

            // Corea
            ['name' => 'Corea del Sur', 'flag' => '🇰🇷'],

            // China
            ['name' => 'China', 'flag' => '🇨🇳'],

            // Sudeste Asiático (SEA)
            ['name' => 'Sudeste Asiático', 'flag' => '🇸🇬'], // Región representativa
            ['name' => 'Singapur', 'flag' => '🇸🇬'],
            ['name' => 'Filipinas', 'flag' => '🇵🇭'],
            ['name' => 'Tailandia', 'flag' => '🇹🇭'],
            ['name' => 'Malasia', 'flag' => '🇲🇾'],

            // Brasil
            ['name' => 'Brasil', 'flag' => '🇧🇷'],

            // Oceanía
            ['name' => 'Oceanía', 'flag' => '🇦🇺'],
            ['name' => 'Australia', 'flag' => '🇦🇺'],
            ['name' => 'Nueva Zelanda', 'flag' => '🇳🇿'],

            //Indefinido
            ['name' => 'Indefinido', 'flag' => 'indefinido'],
        ];

        DB::table('countries')->insert($countries);
    }
}

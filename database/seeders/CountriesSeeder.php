<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $countries = [
            // Europa
            ['name' => 'Europa', 'flag' => 'EU', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Francia', 'flag' => 'FR', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Alemania', 'flag' => 'DE', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'España', 'flag' => 'ES', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Italia', 'flag' => 'IT', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Reino Unido', 'flag' => 'GB', 'created_at' => $now, 'updated_at' => $now],

            // América del Norte
            ['name' => 'Norteamérica', 'flag' => 'US', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Estados Unidos', 'flag' => 'US', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Canadá', 'flag' => 'CA', 'created_at' => $now, 'updated_at' => $now],

            // Corea
            ['name' => 'Corea del Sur', 'flag' => 'KR', 'created_at' => $now, 'updated_at' => $now],

            // China
            ['name' => 'China', 'flag' => 'CN', 'created_at' => $now, 'updated_at' => $now],

            // Sudeste Asiático (SEA)
            ['name' => 'Sudeste Asiático', 'flag' => 'SG', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Singapur', 'flag' => 'SG', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Filipinas', 'flag' => 'PH', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tailandia', 'flag' => 'TH', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Malasia', 'flag' => 'MY', 'created_at' => $now, 'updated_at' => $now],

            // Brasil
            ['name' => 'Brasil', 'flag' => 'BR', 'created_at' => $now, 'updated_at' => $now],

            // Oceanía
            ['name' => 'Oceanía', 'flag' => 'AU', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Australia', 'flag' => 'AU', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nueva Zelanda', 'flag' => 'NZ', 'created_at' => $now, 'updated_at' => $now],

            // Indefinido
            ['name' => 'Indefinido', 'flag' => 'XX', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('countries')->insert($countries);
    }
}

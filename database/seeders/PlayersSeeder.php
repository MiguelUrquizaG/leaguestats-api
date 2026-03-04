<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlayersSeeder extends Seeder
{
    public function run(): void
    {
        $teams = DB::table('teams')->pluck('id', 'name');
        $countries = DB::table('countries')->pluck('id', 'name');
        $now = Carbon::now();

        $players = [
            ['name' => 'BrokenBlade', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/BrokenBlade.png', 'team' => 'G2 Esports', 'pos' => 'Top', 'country' => 'Alemania', 'kda' => 3.5],
            ['name' => 'Caps', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Caps.png', 'team' => 'G2 Esports', 'pos' => 'Mid', 'country' => 'Europa', 'kda' => 4.2],
            ['name' => 'Mikyx', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Mikyx.png', 'team' => 'G2 Esports', 'pos' => 'Support', 'country' => 'Europa', 'kda' => 3.1],
            ['name' => 'Faker', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Faker.png', 'team' => 'T1', 'pos' => 'Mid', 'country' => 'Corea del Sur', 'kda' => 5.0],
            ['name' => 'Gumayusi', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Gumayusi.png', 'team' => 'T1', 'pos' => 'Adc', 'country' => 'Corea del Sur', 'kda' => 4.8],
            ['name' => 'Elyoya', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Elyoya.png', 'team' => 'MAD Lions KOI', 'pos' => 'Jungle', 'country' => 'España', 'kda' => 3.9],
            ['name' => 'Supator', 'photo' => '', 'team' => 'MAD Lions KOI', 'pos' => 'Mid', 'country' => 'España', 'kda' => 3.2],
            ['name' => 'Razork', 'photo' => '', 'team' => 'Fnatic', 'pos' => 'Jungle', 'country' => 'España', 'kda' => 4.1],
            ['name' => 'Humanoid', 'photo' => '', 'team' => 'Fnatic', 'pos' => 'Mid', 'country' => 'Europa', 'kda' => 3.7],
            ['name' => 'Hans Sama', 'photo' => '', 'team' => 'G2 Esports', 'pos' => 'Adc', 'country' => 'Francia', 'kda' => 4.5],
        ];

        foreach ($players as $p) {
            DB::table('players')->insert([
                'name' => $p['name'],
                'photo' => $p['photo'],
                'team_id' => $teams[$p['team']],
                'kda' => $p['kda'],
                'position' => $p['pos'],
                'birth_date' => Carbon::now()->subYears(rand(18, 25))->toDateString(),
                'country_id' => $countries[$p['country']] ?? $countries['Indefinido'],
                'created_at' => $now, 'updated_at' => $now
            ]);
        }
    }
}
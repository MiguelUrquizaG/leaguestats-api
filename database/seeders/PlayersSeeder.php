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
        $teamCountries = DB::table('teams')
            ->join('countries', 'teams.country_id', '=', 'countries.id')
            ->pluck('countries.name', 'teams.name');
        $now = Carbon::now();

        $players = [
            ['name' => 'BrokenBlade', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/BrokenBlade.png', 'team' => 'G2 Esports', 'pos' => 'Top', 'country' => 'Alemania', 'kda' => 3.5],
            ['name' => 'Caps', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Caps.png', 'team' => 'G2 Esports', 'pos' => 'Mid', 'country' => 'Europa', 'kda' => 4.2],
            ['name' => 'Mikyx', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Mikyx.png', 'team' => 'G2 Esports', 'pos' => 'Support', 'country' => 'Europa', 'kda' => 3.1],
            ['name' => 'Faker', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Faker.png', 'team' => 'T1', 'pos' => 'Mid', 'country' => 'Corea del Sur', 'kda' => 5.0],
            ['name' => 'Gumayusi', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Gumayusi.png', 'team' => 'T1', 'pos' => 'Adc', 'country' => 'Corea del Sur', 'kda' => 4.8],
            ['name' => 'Elyoya', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Elyoya.png', 'team' => 'MAD Lions KOI', 'pos' => 'Jungle', 'country' => 'España', 'kda' => 3.9],
            ['name' => 'Supator', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Supa.png', 'team' => 'MAD Lions KOI', 'pos' => 'Adc', 'country' => 'España', 'kda' => 3.2],
            ['name' => 'Razork', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Razork.png', 'team' => 'Fnatic', 'pos' => 'Jungle', 'country' => 'España', 'kda' => 4.1],
            ['name' => 'Humanoid', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Humanoid.png', 'team' => 'Fnatic', 'pos' => 'Mid', 'country' => 'Europa', 'kda' => 3.7],
            ['name' => 'Hans Sama', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Hans%20Sama.png', 'team' => 'G2 Esports', 'pos' => 'Adc', 'country' => 'Francia', 'kda' => 4.5],

            ['name' => 'SkewMond', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/SkewMond.png', 'team' => 'G2 Esports', 'pos' => 'Jungle', 'country' => 'Europa', 'kda' => 3.8],
            ['name' => 'Labrov', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Labrov.png', 'team' => 'G2 Esports', 'pos' => 'Support', 'country' => 'Europa', 'kda' => 3.3],

            ['name' => 'Doran', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Doran%20(Choi%20Hyeon-joon).png', 'team' => 'T1', 'pos' => 'Top', 'country' => 'Corea del Sur', 'kda' => 3.6],
            ['name' => 'Oner', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Oner.png', 'team' => 'T1', 'pos' => 'Jungle', 'country' => 'Corea del Sur', 'kda' => 4.4],
            ['name' => 'Peyz', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Peyz.png', 'team' => 'T1', 'pos' => 'Adc', 'country' => 'Corea del Sur', 'kda' => 4.1],
            ['name' => 'Keria', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Keria.png', 'team' => 'T1', 'pos' => 'Support', 'country' => 'Corea del Sur', 'kda' => 4.0],

            ['name' => 'Myrwn', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Myrwn.png', 'team' => 'MAD Lions KOI', 'pos' => 'Top', 'country' => 'España', 'kda' => 3.4],
            ['name' => 'Alvaro', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Alvaro%20(%C3%81lvaro%20Fern%C3%A1ndez).png', 'team' => 'MAD Lions KOI', 'pos' => 'Support', 'country' => 'España', 'kda' => 3.2],
            ['name' => 'Jojopyun', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/jojopyun.png', 'team' => 'MAD Lions KOI', 'pos' => 'Mid', 'country' => 'España', 'kda' => 3.2],
            ['name' => 'Empyros', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Empyros.png', 'team' => 'Fnatic', 'pos' => 'Top', 'country' => 'Europa', 'kda' => 3.3],
            ['name' => 'Vladi', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Vladi.png', 'team' => 'Fnatic', 'pos' => 'Mid', 'country' => 'Europa', 'kda' => 3.6],
            ['name' => 'Upset', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Upset.png', 'team' => 'Fnatic', 'pos' => 'Adc', 'country' => 'Europa', 'kda' => 3.9],
            ['name' => 'Lospa', 'photo' => 'https://ak-deeplol-ddragon-cdn.deeplol.gg/pro/Lospa.png', 'team' => 'Fnatic', 'pos' => 'Support', 'country' => 'Corea del Sur', 'kda' => 3.2],
        ];

        $roles = ['Top', 'Jungle', 'Mid', 'Adc', 'Support'];
        $defaultKdaByRole = [
            'Top' => 3.1,
            'Jungle' => 3.3,
            'Mid' => 3.4,
            'Adc' => 3.5,
            'Support' => 3.0,
        ];

        $playersByTeam = [];
        $positionsByTeam = [];

        foreach ($players as $player) {
            $teamName = $player['team'];
            $position = $player['pos'];

            $playersByTeam[$teamName] = ($playersByTeam[$teamName] ?? 0) + 1;
            $positionsByTeam[$teamName][$position] = true;
        }

        foreach ($teams as $teamName => $teamId) {
            if (($playersByTeam[$teamName] ?? 0) >= 5) {
                continue;
            }

            $teamCountry = $teamCountries[$teamName] ?? 'Indefinido';
            $existingPositions = array_keys($positionsByTeam[$teamName] ?? []);
            $missingPositions = array_values(array_diff($roles, $existingPositions));

            foreach ($missingPositions as $position) {
                if (($playersByTeam[$teamName] ?? 0) >= 5) {
                    break;
                }

                $players[] = [
                    'name' => $teamName . ' ' . $position,
                    'photo' => '',
                    'team' => $teamName,
                    'pos' => $position,
                    'country' => $teamCountry,
                    'kda' => $defaultKdaByRole[$position],
                ];

                $playersByTeam[$teamName] = ($playersByTeam[$teamName] ?? 0) + 1;
                $positionsByTeam[$teamName][$position] = true;
            }

            while (($playersByTeam[$teamName] ?? 0) < 5) {
                $playerNumber = ($playersByTeam[$teamName] ?? 0) + 1;
                $position = $roles[($playerNumber - 1) % 5];

                $players[] = [
                    'name' => $teamName . ' Sub ' . $playerNumber,
                    'photo' => '',
                    'team' => $teamName,
                    'pos' => $position,
                    'country' => $teamCountry,
                    'kda' => $defaultKdaByRole[$position],
                ];

                $playersByTeam[$teamName] = ($playersByTeam[$teamName] ?? 0) + 1;
                $positionsByTeam[$teamName][$position] = true;
            }
        }

        $defaultCountryId = $countries['Indefinido'] ?? $countries->first();

        foreach ($players as $p) {
            if (!isset($teams[$p['team']])) {
                continue;
            }

            DB::table('players')->insert([
                'name' => $p['name'],
                'photo' => $p['photo'],
                'team_id' => $teams[$p['team']],
                'kda' => $p['kda'],
                'position' => $p['pos'],
                'birth_date' => Carbon::now()->subYears(rand(18, 25))->toDateString(),
                'country_id' => $countries[$p['country']] ?? $defaultCountryId,
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GamesAndMatchUpsSeeder extends Seeder
{
    public function run(): void
    {
        $teams = DB::table('teams')->pluck('id')->toArray();
        $leagues = DB::table('leagues')->pluck('id')->toArray();
        $players = DB::table('players')->pluck('id')->toArray();
        $now = Carbon::now();

        for ($i = 0; $i < 10; $i++) {
            $homeTeam = $teams[array_rand($teams)];
            $awayTeam = $teams[array_rand($teams)];
            while($homeTeam == $awayTeam) { $awayTeam = $teams[array_rand($teams)]; }

            $gameId = DB::table('games')->insertGetId([
                'home_team_id' => $homeTeam,
                'away_team_id' => $awayTeam,
                'max_games' => 3,
                'home_team_score' => rand(0, 2),
                'away_team_score' => rand(0, 2),
                'is_active' => false,
                'league_id' => $leagues[array_rand($leagues)],
                'mvp_id' => $players[array_rand($players)],
                'date' => $now->subDays($i)->toDateString(),
                'created_at' => $now, 'updated_at' => $now
            ]);

            // Crear 2 mapas por cada juego
            for ($j = 0; $j < 2; $j++) {
                DB::table('match_ups')->insert([
                    'game_id' => $gameId,
                    'winner_team_id' => rand(0, 1) ? $homeTeam : $awayTeam,
                    'home_team_kills' => rand(10, 30),
                    'home_team_gold' => rand(40, 70) + 0.5,
                    'away_team_kills' => rand(10, 30),
                    'away_team_gold' => rand(40, 70) + 0.5,
                    'home_team_side' => $j % 2 == 0 ? 'Blue' : 'Red',
                    'away_team_side' => $j % 2 == 0 ? 'Red' : 'Blue',
                    'home_team_towers' => rand(0, 11),
                    'away_team_towers' => rand(0, 11),
                    'created_at' => $now, 'updated_at' => $now
                ]);
            }
        }
    }
}
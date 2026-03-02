<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GamesAndMatchUpsSeeder extends Seeder
{
    public function run(): void
    {
        $leagues = DB::table('leagues')->pluck('id')->toArray();
        $players = DB::table('players')->pluck('id')->toArray();
        $now = Carbon::now();

        for ($i = 0; $i < 15; $i++) {
            // Seleccionamos una liga aleatoria
            $leagueId = $leagues[array_rand($leagues)];
            
            // Obtenemos equipos de ESA liga específicamente
            $teamsInLeague = DB::table('teams')->where('league_id', $leagueId)->get();

            if ($teamsInLeague->count() < 2) continue; // Saltar si la liga no tiene suficientes equipos

            $t1 = $teamsInLeague->random();
            $t2 = $teamsInLeague->where('id', '!=', $t1->id)->random();

            $gameId = DB::table('games')->insertGetId([
                'home_team_id' => $t1->id,
                'away_team_id' => $t2->id,
                'max_games' => 3,
                'home_team_score' => rand(0, 2),
                'away_team_score' => rand(0, 2),
                'is_active' => false,
                'league_id' => $leagueId,
                'mvp_id' => $players[array_rand($players)],
                'date' => $now->copy()->subDays($i)->toDateString(),
                'created_at' => $now, 
                'updated_at' => $now
            ]);

            for ($j = 0; $j < 2; $j++) {
                DB::table('match_ups')->insert([
                    'game_id' => $gameId,
                    'winner_team_id' => rand(0, 1) ? $t1->id : $t2->id,
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
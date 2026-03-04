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
        $seriesFormats = [1, 3, 5];
        $now = Carbon::now();

        for ($i = 0; $i < 15; $i++) {
            // Seleccionamos una liga aleatoria
            $leagueId = $leagues[array_rand($leagues)];
            
            // Obtenemos equipos de ESA liga específicamente
            $teamsInLeague = DB::table('teams')->where('league_id', $leagueId)->get();

            if ($teamsInLeague->count() < 2) continue; // Saltar si la liga no tiene suficientes equipos

            $t1 = $teamsInLeague->random();
            $t2 = $teamsInLeague->where('id', '!=', $t1->id)->random();
            $playersInSeries = DB::table('players')
                ->whereIn('team_id', [$t1->id, $t2->id])
                ->pluck('id')
                ->toArray();

            if (count($playersInSeries) === 0) continue;

            $maxGames = $seriesFormats[array_rand($seriesFormats)];
            $winsNeeded = intdiv($maxGames, 2) + 1;
            $homeWins = 0;
            $awayWins = 0;
            $matchUps = [];

            while ($homeWins < $winsNeeded && $awayWins < $winsNeeded) {
                $homeIsBlueSide = (count($matchUps) % 2 === 0);
                $winnerIsHome = (bool) rand(0, 1);

                if ($winnerIsHome) {
                    $homeWins++;
                } else {
                    $awayWins++;
                }

                $matchUps[] = [
                    'winner_team_id' => $winnerIsHome ? $t1->id : $t2->id,
                    'home_team_kills' => rand(10, 30),
                    'home_team_gold' => rand(40, 70) + 0.5,
                    'away_team_kills' => rand(10, 30),
                    'away_team_gold' => rand(40, 70) + 0.5,
                    'home_team_side' => $homeIsBlueSide ? 'Blue' : 'Red',
                    'away_team_side' => $homeIsBlueSide ? 'Red' : 'Blue',
                    'home_team_towers' => rand(0, 11),
                    'away_team_towers' => rand(0, 11),
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }

            $gameId = DB::table('games')->insertGetId([
                'home_team_id' => $t1->id,
                'away_team_id' => $t2->id,
                'max_games' => $maxGames,
                'home_team_score' => $homeWins,
                'away_team_score' => $awayWins,
                'is_active' => false,
                'league_id' => $leagueId,
                'mvp_id' => $playersInSeries[array_rand($playersInSeries)],
                'date' => $now->copy()->subDays($i)->toDateString(),
                'created_at' => $now, 
                'updated_at' => $now
            ]);

            foreach ($matchUps as $matchUp) {
                DB::table('match_ups')->insert([
                    'game_id' => $gameId,
                    ...$matchUp,
                ]);
            }
        }
    }
}
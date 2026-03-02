<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BetsSeeder extends Seeder
{
    public function run(): void
    {
        $leagues = DB::table('leagues')->pluck('id')->toArray();
        $now = Carbon::now();

        for ($i = 0; $i < 12; $i++) {
            // Elegir liga primero
            $leagueId = $leagues[array_rand($leagues)];
            
            // Buscar equipos de esa liga
            $teamsInLeague = DB::table('teams')->where('league_id', $leagueId)->get();

            if ($teamsInLeague->count() < 2) continue;

            $t1 = $teamsInLeague->random();
            $t2 = $teamsInLeague->where('id', '!=', $t1->id)->random();

            DB::table('bets')->insert([
                'date' => $now->copy()->addDays(rand(1, 7))->toDateString(),
                'time' => rand(10, 22) . ":00:00",
                'league_id' => $leagueId,
                'team1_id' => $t1->id,
                'team2_id' => $t2->id,
                'team1_value' => rand(110, 450) / 100,
                'team2_value' => rand(110, 450) / 100,
                'instance' => "Matchday #" . ($i + 1),
                'winner_team_id' => null, // Normalmente nulo si está activa
                'status' => rand(0, 1) ? 'Active' : 'Closed',
                'created_at' => $now, 
                'updated_at' => $now
            ]);
        }
    }
}
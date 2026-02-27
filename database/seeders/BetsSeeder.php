<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BetsSeeder extends Seeder
{
    public function run(): void
    {
        $teams = DB::table('teams')->get();
        $leagues = DB::table('leagues')->pluck('id')->toArray();
        $now = Carbon::now();

        for ($i = 0; $i < 10; $i++) {
            $t1 = $teams->random();
            $t2 = $teams->where('id', '!=', $t1->id)->random();

            DB::table('bets')->insert([
                'date' => $now->addDays(rand(1, 7))->toDateString(),
                'time' => rand(10, 22) . ":00:00",
                'league_id' => $leagues[array_rand($leagues)],
                'team1_id' => $t1->id,
                'team2_id' => $t2->id,
                'team1_value' => rand(110, 350) / 100,
                'team2_value' => rand(110, 350) / 100,
                'instance' => "Jornada Regular #$i",
                'winner_team_id' => rand(0, 1) ? $t1->id : $t2->id,
                'status' => rand(0, 1) ? 'Active' : 'Closed',
                'created_at' => $now, 'updated_at' => $now
            ]);
        }
    }
}
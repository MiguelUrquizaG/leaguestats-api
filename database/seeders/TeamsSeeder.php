<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TeamsSeeder extends Seeder
{
    public function run(): void
    {
        $countries = DB::table('countries')->pluck('id', 'name');
        $leagues = DB::table('leagues')->pluck('id', 'name');
        $now = Carbon::now();

        $teams = [

            /*
            |--------------------------------------------------------------------------
            | LEC (Europa)
            |--------------------------------------------------------------------------
            */
            ['name' => 'G2 Esports', 'logo' => '', 'country_id' => $countries['Europa'], 'lost_matches' => 5, 'won_matches' => 13, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fnatic', 'logo' => '', 'country_id' => $countries['Europa'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'MAD Lions KOI', 'logo' => '', 'country_id' => $countries['Europa'], 'lost_matches' => 9, 'won_matches' => 9, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Team Heretics', 'logo' => '', 'country_id' => $countries['Europa'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Karmine Corp', 'logo' => '', 'country_id' => $countries['Europa'], 'lost_matches' => 6, 'won_matches' => 12, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Team BDS', 'logo' => '', 'country_id' => $countries['Europa'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'SK Gaming', 'logo' => '', 'country_id' => $countries['Europa'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Excel Esports', 'logo' => '', 'country_id' => $countries['Europa'], 'lost_matches' => 12, 'won_matches' => 6, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vitality', 'logo' => '', 'country_id' => $countries['Europa'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rogue', 'logo' => '', 'country_id' => $countries['Europa'], 'lost_matches' => 13, 'won_matches' => 5, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | LCS (Norteamérica)
            |--------------------------------------------------------------------------
            */
            ['name' => 'Team Liquid', 'logo' => '', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 6, 'won_matches' => 12, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cloud9', 'logo' => '', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 5, 'won_matches' => 13, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '100 Thieves', 'logo' => '', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'NRG', 'logo' => '', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dignitas', 'logo' => '', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'FlyQuest', 'logo' => '', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Immortals', 'logo' => '', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 12, 'won_matches' => 6, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Evil Geniuses', 'logo' => '', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 9, 'won_matches' => 9, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shopify Rebellion', 'logo' => '', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'TSM', 'logo' => '', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 13, 'won_matches' => 5, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | LCK (Corea del Sur)
            |--------------------------------------------------------------------------
            */
            ['name' => 'T1', 'logo' => '', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 4, 'won_matches' => 14, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gen.G', 'logo' => '', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 5, 'won_matches' => 13, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'KT Rolster', 'logo' => '', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hanwha Life Esports', 'logo' => '', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dplus KIA', 'logo' => '', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 6, 'won_matches' => 12, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'DRX', 'logo' => '', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 9, 'won_matches' => 9, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nongshim RedForce', 'logo' => '', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'KDF', 'logo' => '', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fredit BRION', 'logo' => '', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 12, 'won_matches' => 6, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kwangdong Freecs', 'logo' => '', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 13, 'won_matches' => 5, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | LPL (China)
            |--------------------------------------------------------------------------
            */
            ['name' => 'JD Gaming', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 5, 'won_matches' => 11, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bilibili Gaming', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 4, 'won_matches' => 12, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Top Esports', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 6, 'won_matches' => 10, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Edward Gaming', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 7, 'won_matches' => 9, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Weibo Gaming', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 6, 'won_matches' => 10, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'LNG Esports', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 8, 'won_matches' => 8, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'FunPlus Phoenix', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 9, 'won_matches' => 7, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Invictus Gaming', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 8, 'won_matches' => 8, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rare Atom', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 10, 'won_matches' => 6, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ninjas in Pyjamas', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 9, 'won_matches' => 7, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Anyone\'s Legend', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 11, 'won_matches' => 5, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'OMG', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 12, 'won_matches' => 4, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'ThunderTalk Gaming', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 10, 'won_matches' => 6, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ultra Prime', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 11, 'won_matches' => 5, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'LGD Gaming', 'logo' => '', 'country_id' => $countries['China'], 'lost_matches' => 13, 'won_matches' => 3, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | CBLOL (Brasil)
            |--------------------------------------------------------------------------
            */
            ['name' => 'LOUD', 'logo' => '', 'country_id' => $countries['Brasil'], 'lost_matches' => 4, 'won_matches' => 14, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'paiN Gaming', 'logo' => '', 'country_id' => $countries['Brasil'], 'lost_matches' => 6, 'won_matches' => 12, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'FURIA', 'logo' => '', 'country_id' => $countries['Brasil'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'RED Canids', 'logo' => '', 'country_id' => $countries['Brasil'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'KaBuM! Esports', 'logo' => '', 'country_id' => $countries['Brasil'], 'lost_matches' => 9, 'won_matches' => 9, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fluxo', 'logo' => '', 'country_id' => $countries['Brasil'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'INTZ', 'logo' => '', 'country_id' => $countries['Brasil'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vivo Keyd', 'logo' => '', 'country_id' => $countries['Brasil'], 'lost_matches' => 12, 'won_matches' => 6, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Los Grandes', 'logo' => '', 'country_id' => $countries['Brasil'], 'lost_matches' => 13, 'won_matches' => 5, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Liberty', 'logo' => '', 'country_id' => $countries['Brasil'], 'lost_matches' => 14, 'won_matches' => 4, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | PCS (Sudeste Asiático)
            |--------------------------------------------------------------------------
            */
            ['name' => 'PSG Talon', 'logo' => '', 'country_id' => $countries['Sudeste Asiático'], 'lost_matches' => 5, 'won_matches' => 13, 'league_id' => $leagues['PCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'CTBC Flying Oyster', 'logo' => '', 'country_id' => $countries['Sudeste Asiático'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['PCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Team Flash', 'logo' => '', 'country_id' => $countries['Sudeste Asiático'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['PCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'J Team', 'logo' => '', 'country_id' => $countries['Sudeste Asiático'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['PCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Deep Cross Gaming', 'logo' => '', 'country_id' => $countries['Sudeste Asiático'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['PCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | LCO (Oceanía)
            |--------------------------------------------------------------------------
            */
            ['name' => 'Chiefs Esports Club', 'logo' => '', 'country_id' => $countries['Oceanía'], 'lost_matches' => 6, 'won_matches' => 12, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pentanet.GG', 'logo' => '', 'country_id' => $countries['Oceanía'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Peace', 'logo' => '', 'country_id' => $countries['Oceanía'], 'lost_matches' => 9, 'won_matches' => 9, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dire Wolves', 'logo' => '', 'country_id' => $countries['Oceanía'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ground Zero Gaming', 'logo' => '', 'country_id' => $countries['Oceanía'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kanga Esports', 'logo' => '', 'country_id' => $countries['Oceanía'], 'lost_matches' => 12, 'won_matches' => 6, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

        ];

        DB::table('teams')->insert($teams);
    }
}

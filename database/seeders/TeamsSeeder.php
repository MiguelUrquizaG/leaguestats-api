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
            ['name' => 'G2 Esports', 'logo' => 'https://liquipedia.net/commons/images/thumb/2/27/G2_Esports_2020_full_lightmode.png/600px-G2_Esports_2020_full_lightmode.png', 'country_id' => $countries['Europa'], 'lost_matches' => 5, 'won_matches' => 13, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fnatic', 'logo' => 'https://liquipedia.net/commons/images/thumb/f/f9/Fnatic_2020_allmode.png/600px-Fnatic_2020_allmode.png', 'country_id' => $countries['Europa'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'MAD Lions KOI', 'logo' => 'https://liquipedia.net/commons/images/thumb/6/6c/Movistar_KOI_2025_allmode.png/600px-Movistar_KOI_2025_allmode.png', 'country_id' => $countries['Europa'], 'lost_matches' => 9, 'won_matches' => 9, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Team Heretics', 'logo' => 'https://liquipedia.net/commons/images/thumb/a/a9/Team_Heretics_2024_allmode.png/600px-Team_Heretics_2024_allmode.png', 'country_id' => $countries['Europa'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Karmine Corp', 'logo' => 'https://liquipedia.net/commons/images/thumb/e/e1/Karmine_Corp_full_lightmode.png/600px-Karmine_Corp_full_lightmode.png', 'country_id' => $countries['Europa'], 'lost_matches' => 6, 'won_matches' => 12, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shifters', 'logo' => 'https://liquipedia.net/commons/images/thumb/1/15/Shifters_full_allmode.png/600px-Shifters_full_allmode.png', 'country_id' => $countries['Europa'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'SK Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/1/16/SK_Gaming_2022_full_lightmode.png/600px-SK_Gaming_2022_full_lightmode.png', 'country_id' => $countries['Europa'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Natus Vincere', 'logo' => 'https://liquipedia.net/commons/images/thumb/3/3f/Natus_Vincere_2021_lightmode.png/600px-Natus_Vincere_2021_lightmode.png', 'country_id' => $countries['Europa'], 'lost_matches' => 12, 'won_matches' => 6, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vitality', 'logo' => 'https://liquipedia.net/commons/images/thumb/e/e4/Team_Vitality_2023_lightmode.png/600px-Team_Vitality_2023_lightmode.png', 'country_id' => $countries['Europa'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'GIANTX', 'logo' => 'https://liquipedia.net/commons/images/thumb/8/8e/GIANTX_full_lightmode.png/600px-GIANTX_full_lightmode.png', 'country_id' => $countries['Europa'], 'lost_matches' => 13, 'won_matches' => 5, 'league_id' => $leagues['LEC'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | LCS (Norteamérica)
            |--------------------------------------------------------------------------
            */
            ['name' => 'Team Liquid', 'logo' => 'https://liquipedia.net/commons/images/thumb/f/f5/Team_Liquid_2024_full_lightmode.png/600px-Team_Liquid_2024_full_lightmode.png', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 6, 'won_matches' => 12, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cloud9', 'logo' => 'https://liquipedia.net/commons/images/thumb/a/a2/Cloud9_2023_full_allmode.png/600px-Cloud9_2023_full_allmode.png', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 5, 'won_matches' => 13, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '100 Thieves', 'logo' => 'https://liquipedia.net/commons/images/thumb/4/49/100_Thieves_full_lightmode.png/600px-100_Thieves_full_lightmode.png', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'NRG', 'logo' => 'https://liquipedia.net/commons/images/thumb/1/16/NRG_2024_allmode.png/600px-NRG_2024_allmode.png', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dignitas', 'logo' => 'https://liquipedia.net/commons/images/thumb/3/3a/Dignitas_2021_full_lightmode.png/600px-Dignitas_2021_full_lightmode.png', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'FlyQuest', 'logo' => 'https://liquipedia.net/commons/images/thumb/b/b2/FlyQuest_2024_full_lightmode.png/600px-FlyQuest_2024_full_lightmode.png', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'LYON', 'logo' => 'https://liquipedia.net/commons/images/thumb/4/47/LYON_2025_full_allmode.png/600px-LYON_2025_full_allmode.png', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 12, 'won_matches' => 6, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Evil Geniuses', 'logo' => 'https://liquipedia.net/commons/images/thumb/a/a2/Evil_Geniuses_2020_full_lightmode.png/600px-Evil_Geniuses_2020_full_lightmode.png', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 9, 'won_matches' => 9, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shopify Rebellion', 'logo' => 'https://liquipedia.net/commons/images/thumb/7/72/Shopify_Rebellion_text_2023_lightmode.png/600px-Shopify_Rebellion_text_2023_lightmode.png', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'TSM', 'logo' => 'https://liquipedia.net/commons/images/thumb/c/c8/TSM_2019_lightmode.png/600px-TSM_2019_lightmode.png', 'country_id' => $countries['Norteamérica'], 'lost_matches' => 13, 'won_matches' => 5, 'league_id' => $leagues['LCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |-------------------------------------------------------------------------- 
            | LCK (Corea del Sur)
            |--------------------------------------------------------------------------
            */
            ['name' => 'T1', 'logo' => 'https://liquipedia.net/commons/images/thumb/f/f0/T1_2019_full_allmode.png/600px-T1_2019_full_allmode.png', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 4, 'won_matches' => 14, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gen.G', 'logo' => 'https://liquipedia.net/commons/images/thumb/0/07/Gen.G_Esports_2026_allmode.png/600px-Gen.G_Esports_2026_allmode.png', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 5, 'won_matches' => 13, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'KT Rolster', 'logo' => 'https://liquipedia.net/commons/images/thumb/8/81/Kt_Rolster_2026_full_lightmode.png/600px-Kt_Rolster_2026_full_lightmode.png', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hanwha Life Esports', 'logo' => 'https://liquipedia.net/commons/images/thumb/9/9f/Hanwha_Life_Esports_full_lightmode.png/600px-Hanwha_Life_Esports_full_lightmode.png', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dplus KIA', 'logo' => 'https://liquipedia.net/commons/images/thumb/7/72/Dplus_full_lightmode.png/600px-Dplus_full_lightmode.png', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 6, 'won_matches' => 12, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'DRX', 'logo' => 'https://liquipedia.net/commons/images/thumb/f/f7/DRX_2023_full_lightmode.png/600px-DRX_2023_full_lightmode.png', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 9, 'won_matches' => 9, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nongshim RedForce', 'logo' => 'https://liquipedia.net/commons/images/thumb/d/d8/NS_Redforce_allmode.png/600px-NS_Redforce_allmode.png', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'KDF', 'logo' => 'https://liquipedia.net/commons/images/thumb/0/0e/DN_SOOPers_full_allmode.png/600px-DN_SOOPers_full_allmode.png', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fredit BRION', 'logo' => 'https://liquipedia.net/commons/images/thumb/8/8c/BRION_2023_full_lightmode.png/600px-BRION_2023_full_lightmode.png', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 12, 'won_matches' => 6, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kwangdong Freecs', 'logo' => 'https://liquipedia.net/commons/images/thumb/0/0e/DN_SOOPers_full_allmode.png/600px-DN_SOOPers_full_allmode.png', 'country_id' => $countries['Corea del Sur'], 'lost_matches' => 13, 'won_matches' => 5, 'league_id' => $leagues['LCK'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | LPL (China)
            |--------------------------------------------------------------------------
            */
            ['name' => 'JD Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/f/f3/JD_Gaming_2021_full_allmode.png/600px-JD_Gaming_2021_full_allmode.png', 'country_id' => $countries['China'], 'lost_matches' => 5, 'won_matches' => 11, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bilibili Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/7/74/Bilibili_Gaming_2021_full_allmode.png/600px-Bilibili_Gaming_2021_full_allmode.png', 'country_id' => $countries['China'], 'lost_matches' => 4, 'won_matches' => 12, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Top Esports', 'logo' => 'https://liquipedia.net/commons/images/thumb/2/2e/Top_Esports_full_allmode.png/600px-Top_Esports_full_allmode.png', 'country_id' => $countries['China'], 'lost_matches' => 6, 'won_matches' => 10, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Edward Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/9/98/EDward_Gaming_2017_lightmode.png/600px-EDward_Gaming_2017_lightmode.png', 'country_id' => $countries['China'], 'lost_matches' => 7, 'won_matches' => 9, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Weibo Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/4/48/Weibo_Gaming_full_lightmode.png/600px-Weibo_Gaming_full_lightmode.png', 'country_id' => $countries['China'], 'lost_matches' => 6, 'won_matches' => 10, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'LNG Esports', 'logo' => 'https://liquipedia.net/commons/images/thumb/8/80/LNG_Esports_2024_allmode.png/600px-LNG_Esports_2024_allmode.png', 'country_id' => $countries['China'], 'lost_matches' => 8, 'won_matches' => 8, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'FunPlus Phoenix', 'logo' => 'https://liquipedia.net/commons/images/thumb/2/20/FunPlus_Phoenix_2021_allmode.png/600px-FunPlus_Phoenix_2021_allmode.png', 'country_id' => $countries['China'], 'lost_matches' => 9, 'won_matches' => 7, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Invictus Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/c/ce/Invictus_Gaming_full_lightmode.png/600px-Invictus_Gaming_full_lightmode.png', 'country_id' => $countries['China'], 'lost_matches' => 8, 'won_matches' => 8, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rare Atom', 'logo' => 'https://liquipedia.net/commons/images/c/c2/Rare_Atom_Period_2022_allmode.png', 'country_id' => $countries['China'], 'lost_matches' => 10, 'won_matches' => 6, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ninjas in Pyjamas', 'logo' => 'https://liquipedia.net/commons/images/thumb/4/42/Ninjas_in_Pyjamas_2021_full_lightmode.png/600px-Ninjas_in_Pyjamas_2021_full_lightmode.png', 'country_id' => $countries['China'], 'lost_matches' => 9, 'won_matches' => 7, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Anyone\'s Legend', 'logo' => 'https://liquipedia.net/commons/images/thumb/1/13/Anyone%27s_Legend_full_lightmode.png/600px-Anyone%27s_Legend_full_lightmode.png', 'country_id' => $countries['China'], 'lost_matches' => 11, 'won_matches' => 5, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'OMG', 'logo' => 'https://liquipedia.net/commons/images/thumb/b/bb/Oh_My_God_2022_full_allmode.png/600px-Oh_My_God_2022_full_allmode.png', 'country_id' => $countries['China'], 'lost_matches' => 12, 'won_matches' => 4, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'ThunderTalk Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/7/7f/THUNDER_TALK_GAMING_full_lightmode.png/600px-THUNDER_TALK_GAMING_full_lightmode.png', 'country_id' => $countries['China'], 'lost_matches' => 10, 'won_matches' => 6, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ultra Prime', 'logo' => 'https://liquipedia.net/commons/images/thumb/4/40/Ultra_Prime_full_allmode.png/600px-Ultra_Prime_full_allmode.png', 'country_id' => $countries['China'], 'lost_matches' => 11, 'won_matches' => 5, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'LGD Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/2/2f/LGD_Gaming_Dec_2019_allmode.png/600px-LGD_Gaming_Dec_2019_allmode.png', 'country_id' => $countries['China'], 'lost_matches' => 13, 'won_matches' => 3, 'league_id' => $leagues['LPL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | CBLOL (Brasil)
            |--------------------------------------------------------------------------
            */
            ['name' => 'LOUD', 'logo' => 'https://liquipedia.net/commons/images/thumb/e/e2/LOUD_2025_full_allmode.png/600px-LOUD_2025_full_allmode.png', 'country_id' => $countries['Brasil'], 'lost_matches' => 4, 'won_matches' => 14, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'paiN Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/8/83/PaiN_Gaming_2017_lightmode.png/600px-PaiN_Gaming_2017_lightmode.png', 'country_id' => $countries['Brasil'], 'lost_matches' => 6, 'won_matches' => 12, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'FURIA', 'logo' => 'https://liquipedia.net/commons/images/thumb/b/bd/FURIA_Esports_full_lightmode.png/600px-FURIA_Esports_full_lightmode.png', 'country_id' => $countries['Brasil'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'RED Canids', 'logo' => 'https://liquipedia.net/commons/images/thumb/3/3b/Red_Canids_allmode.png/600px-Red_Canids_allmode.png', 'country_id' => $countries['Brasil'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'KaBuM! Esports', 'logo' => 'https://liquipedia.net/commons/images/thumb/f/f8/KaBuM%21_Esports_2022-12_full_lightmode.png/600px-KaBuM%21_Esports_2022-12_full_lightmode.png', 'country_id' => $countries['Brasil'], 'lost_matches' => 9, 'won_matches' => 9, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fluxo', 'logo' => 'https://liquipedia.net/commons/images/thumb/e/e3/Fluxo_lightmode.png/600px-Fluxo_lightmode.png', 'country_id' => $countries['Brasil'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'INTZ', 'logo' => 'https://liquipedia.net/commons/images/thumb/9/9f/Intz_2026_allmode.png/600px-Intz_2026_allmode.png', 'country_id' => $countries['Brasil'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vivo Keyd', 'logo' => 'https://liquipedia.net/commons/images/thumb/a/ab/Keyd_Stars_2022_full_lightmode.png/600px-Keyd_Stars_2022_full_lightmode.png', 'country_id' => $countries['Brasil'], 'lost_matches' => 12, 'won_matches' => 6, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Los Grandes', 'logo' => 'https://liquipedia.net/commons/images/thumb/d/d3/LOS_full_allmode.png/600px-LOS_full_allmode.png', 'country_id' => $countries['Brasil'], 'lost_matches' => 13, 'won_matches' => 5, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Liberty', 'logo' => 'https://liquipedia.net/commons/images/thumb/9/92/Liberty_2021_full_lightmode.png/600px-Liberty_2021_full_lightmode.png', 'country_id' => $countries['Brasil'], 'lost_matches' => 14, 'won_matches' => 4, 'league_id' => $leagues['CBLOL'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | PCS (Sudeste Asiático)
            |--------------------------------------------------------------------------
            */
            ['name' => 'PSG Talon', 'logo' => 'https://liquipedia.net/commons/images/thumb/d/dd/PSG_Talon_2025_full_allmode.png/600px-PSG_Talon_2025_full_allmode.png', 'country_id' => $countries['Sudeste Asiático'], 'lost_matches' => 5, 'won_matches' => 13, 'league_id' => $leagues['PCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'CTBC Flying Oyster', 'logo' => 'https://liquipedia.net/commons/images/thumb/8/86/CTBC_Flying_Oyster_2022_allmode.png/600px-CTBC_Flying_Oyster_2022_allmode.png', 'country_id' => $countries['Sudeste Asiático'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['PCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Team Flash', 'logo' => 'https://liquipedia.net/commons/images/thumb/3/3a/Team_Flash_full_lightmode.png/600px-Team_Flash_full_lightmode.png', 'country_id' => $countries['Sudeste Asiático'], 'lost_matches' => 8, 'won_matches' => 10, 'league_id' => $leagues['PCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'J Team', 'logo' => 'https://liquipedia.net/commons/images/thumb/2/21/J_Team_full_lightmode.png/600px-J_Team_full_lightmode.png', 'country_id' => $countries['Sudeste Asiático'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['PCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Deep Cross Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/4/4a/Deep_Cross_Gaming_full_lightmode.png/600px-Deep_Cross_Gaming_full_lightmode.png', 'country_id' => $countries['Sudeste Asiático'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['PCS'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

            /*
            |--------------------------------------------------------------------------
            | LCO (Oceanía)
            |--------------------------------------------------------------------------
            */
            ['name' => 'Chiefs Esports Club', 'logo' => 'https://liquipedia.net/commons/images/thumb/d/d3/Chiefs_Esports_Club_2024_allmode.png/600px-Chiefs_Esports_Club_2024_allmode.png', 'country_id' => $countries['Oceanía'], 'lost_matches' => 6, 'won_matches' => 12, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pentanet.GG', 'logo' => 'https://liquipedia.net/commons/images/f/f6/Pentanet.GG_allmode_full.png', 'country_id' => $countries['Oceanía'], 'lost_matches' => 7, 'won_matches' => 11, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Peace', 'logo' => 'https://liquipedia.net/commons/images/thumb/e/e0/PEACE_OCE_Logo.png/600px-PEACE_OCE_Logo.png', 'country_id' => $countries['Oceanía'], 'lost_matches' => 9, 'won_matches' => 9, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dire Wolves', 'logo' => 'https://liquipedia.net/commons/images/e/ee/Dire_Wolves_2020_full_allmode.png', 'country_id' => $countries['Oceanía'], 'lost_matches' => 10, 'won_matches' => 8, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ground Zero Gaming', 'logo' => 'https://liquipedia.net/commons/images/thumb/1/1c/Ground_Zero_Gaming_2019_allmode.png/600px-Ground_Zero_Gaming_2019_allmode.png', 'country_id' => $countries['Oceanía'], 'lost_matches' => 11, 'won_matches' => 7, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kanga Esports', 'logo' => 'https://liquipedia.net/commons/images/thumb/9/99/Kanga_Esports_2021_full_lightmode.png/600px-Kanga_Esports_2021_full_lightmode.png', 'country_id' => $countries['Oceanía'], 'lost_matches' => 12, 'won_matches' => 6, 'league_id' => $leagues['LCO'], 'team_wallpaper' => '', 'created_at' => $now, 'updated_at' => $now],

        ];

        DB::table('teams')->insert($teams);
    }
}

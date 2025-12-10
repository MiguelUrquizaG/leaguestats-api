<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class match_up extends Model
{
    use HasFactory;

    protected $fillable=[
        'game_id',
        'winner_team_id',
        'home_team_kills',
        'home_team_gold',
        'away_team_kills',
        'away_team_gold',
    ];
}

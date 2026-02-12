<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_team_id',
        'away_team_id',
        'max_games',
        'home_team_score',
        'away_team_score',
        'is_active',
        'league_id',
        'mvp_id',
        'date'
    ];
}

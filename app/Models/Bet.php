<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bet extends Model
{
   use HasFactory;

    protected $fillable=[
        'bet_value_home_team',
        'bet_value_away_team',
        'mvp_player',
    ];
}

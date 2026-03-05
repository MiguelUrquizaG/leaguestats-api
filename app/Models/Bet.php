<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bet extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'league_id',
        'team1_id',
        'team2_id',
        'team1_value',
        'team2_value',
        'instance',
        'status',
        'winner_team_id'
    ];

    // app/Models/Bet.php

public function league()
{
    return $this->belongsTo(League::class);
}

public function team1()
{
    return $this->belongsTo(Team::class, 'team1_id');
}

public function team2()
{
    return $this->belongsTo(Team::class, 'team2_id');
}

public function winnerTeam()
{
    return $this->belongsTo(Team::class, 'winner_team_id');
}
}

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
        'status'
    ];
}

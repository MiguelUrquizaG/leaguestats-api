<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'rated_matches',
        'followers',
        'country_id',
        'user_id',
        'banned',
        'team_id',
        'league_id',
        'isPremium',
        'balance'
    ];
}

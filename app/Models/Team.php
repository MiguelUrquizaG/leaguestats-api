<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'country_id',
        'lost_matches',
        'won_matches',
        'league_id',
        'team_wallpaper'
    ];

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function country()
    {
        return $this->belongsTo(Countries::class);
    }

}

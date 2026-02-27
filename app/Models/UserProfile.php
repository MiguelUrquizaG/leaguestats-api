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

    public function user()
    {
        // Un perfil pertenece a un usuario base
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        // Un perfil pertenece a un país
        return $this->belongsTo(Countries::class);
    }

    public function team()
    {
        // Un perfil tiene un equipo favorito/asociado
        return $this->belongsTo(Team::class);
    }

    public function league()
    {
        // Un perfil sigue a una liga
        return $this->belongsTo(League::class);
    }
}

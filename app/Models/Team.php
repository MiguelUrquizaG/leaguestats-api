<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
     use HasFactory;

    protected $fillable=[
        'name',
        'logo',
        'country_id',
        'lost_matches',
        'won_watches',
        'league_id'
    ];

}

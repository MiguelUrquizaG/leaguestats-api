<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class trainer extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'country_id',
        'team_id',
        'birth_date',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class countries extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'flag',
    ];

}

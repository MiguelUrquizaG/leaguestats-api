<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBets extends Model
{
    protected $fillable = [
        'user_id',
        'bet_id',
        'amount'
    ];

    public function user()
    {
        return $this->belongsTo(UserProfile::class);
    }

    public function bet()
    {
        return $this->belongsTo(Bet::class);
    }
}

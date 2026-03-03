<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class NewsComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id',
        'user_id',
        'likes',
        'comment',
    ];

    protected $casts = [
        'likes' => 'integer',
    ];

    public function news(): BelongsTo
    {
        return $this->belongsTo(news::class);
    }

    public function userProfile(): BelongsTo
    {
        return $this->belongsTo(UserProfile::class, 'user_id');
    }

    public function likedByUsers(): BelongsToMany
    {
        return $this->belongsToMany(
            UserProfile::class,
            'news_comment_likes',
            'news_comment_id',
            'user_profile_id'
        )->withTimestamps();
    }
}

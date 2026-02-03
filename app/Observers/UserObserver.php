<?php

namespace App\Observers;

use App\Models\User;
use App\Models\UserProfile;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        // UserProfile::create([
        //     'user_id' => $user->id,
        //     'username' => $user->name,
        //     'rated_matches' => 0,
        //     'followers' => 0,
        //     'country_id' => $user->country_id ?? 1,
        //     'banned' => false,
        //     'team_id'=>$user->team_id??1,
        //     'league_id'=>$user->league_id??1,
        //     'isPremium'=>false
        // ]);
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}

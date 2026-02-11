<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserProfile::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userProfile = new UserProfile();

        $userProfile->username = $request->username;
        $userProfile->rated_matches = $request->rated_matches;
        $userProfile->followers = $request->followers;
        $userProfile->country_id = $request->country_id;
        $userProfile->user_id = $request->user_id;
        $userProfile->banned = $request->banned;
        $userProfile->team_id = $request->team_id;
        $userProfile->league_id = $request->league_id;
        $userProfile->isPremium = $request->isPremium;
        $userProfile->balance = $request->balance;

        $userProfile->save();

        return response()->json($userProfile);

    }

    /**
     * Display the specified resource.
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }

    public function findUser(int $idUser)
    {
        return User::find($idUser);
    }

    public function changeAccountStatus(int $id)
    {
        $user = UserProfile::find($id);

        if ($user->banned) {
            $user->banned = 0;
        } else {
            $user->banned = 1;
        }

        $user->save();
    }
}

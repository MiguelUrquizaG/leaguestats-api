<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\UserProfile;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): Response
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->string('password')),
        ]);

        // $user->country_id = $request->country_id;
        // $user -> banned = $request->banned;
        // $user -> team_id=$request->team_id;
        // $user->league_id=$request->league_id;
        UserProfile::create([
            'user_id' => $user->id,
            'username' => $user->name,
            'rated_matches' => 0,
            'followers' => 0,
            'country_id' => $request->country_id ?? null,
            'banned' => $request->banned ?? false,
            'team_id' => $request->team_id ?? null,
            'league_id' => $request->league_id ?? null,
            'isPremium' => $request->isPremium ?? false,
        ]);

        event(new Registered($user));

        Auth::login($user);

        $token = $user->createToken('api')->plainTextToken;
        return response([
            'token' => $token,
            'user' => $user,
        ], 201);
    }
}

<?php
require __DIR__ . '/auth.php';

use App\Http\Controllers\AbilitiesController;
use App\Http\Controllers\AbilityController;
use App\Http\Controllers\BetController;
use App\Http\Controllers\ChampionController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HabilidadesController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\MatchUpController;
use App\Http\Controllers\NewsCommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SecuenciaController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserBetController;
use App\Http\Controllers\UserBetsController;
use App\Http\Controllers\UserProfileController;
use App\Models\Ability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('countries', [CountriesController::class, 'index']);
Route::get('leagues', [LeagueController::class, 'index']);
Route::get('teams', [TeamController::class, 'index']);

// Countries - GET disponible para todos, POST/PUT/DELETE solo para admin
Route::middleware('auth:sanctum')->group(function () {
    Route::post('countries', [CountriesController::class, 'store'])->middleware('admin.only');
    Route::get('countries/{country}', [CountriesController::class, 'show']);
    Route::put('countries/{country}', [CountriesController::class, 'update'])->middleware('admin.only');
    Route::delete('countries/{country}', [CountriesController::class, 'destroy'])->middleware('admin.only');
});

// Leagues - GET disponible para todos, POST/PUT/DELETE solo para admin
Route::middleware('auth:sanctum')->group(function () {
    Route::post('leagues', [LeagueController::class, 'store'])->middleware('admin.only');
    Route::get('leagues/{league}', [LeagueController::class, 'show']);
    Route::put('leagues/{league}', [LeagueController::class, 'update'])->middleware('admin.only');
    Route::delete('leagues/{league}', [LeagueController::class, 'destroy'])->middleware('admin.only');
    Route::get('leagues/{league}/teams', [LeagueController::class, 'findTeamsByLeague']);
});

// Teams - GET disponible para todos, POST/PUT/DELETE solo para admin
Route::middleware('auth:sanctum')->group(function () {
    Route::post('teams', [TeamController::class, 'store'])->middleware('admin.only');
    Route::get('teams/{team}', [TeamController::class, 'show']);
    Route::put('teams/{team}', [TeamController::class, 'update'])->middleware('admin.only');
    Route::delete('teams/{team}', [TeamController::class, 'destroy'])->middleware('admin.only');
    Route::get('teams/{team}/players', [TeamController::class, 'findTeamsByTeam']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('players', PlayerController::class);
});

// News - GET disponible para todos bajo auth, POST/PUT/DELETE solo para admin
Route::get('news', [NewsController::class, 'index']);
Route::get('news/{news}', [NewsController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('news', [NewsController::class, 'store'])->middleware('admin.only');
    Route::put('news/{news}', [NewsController::class, 'update'])->middleware('admin.only');
    Route::delete('news/{news}', [NewsController::class, 'destroy'])->middleware('admin.only');
    
    Route::get('news/{newsId}/comments', [NewsCommentController::class, 'findByNewsId']);
    Route::post('news/{newsId}/comments', [NewsCommentController::class, 'storeByNews']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('news-comments/liked', [NewsCommentController::class, 'findLikedByMe']);
    Route::apiResource('news-comments', NewsCommentController::class)->except(['create', 'edit']);
    Route::post('news-comments/{newsComment}/like', [NewsCommentController::class, 'like']);
    Route::post('news-comments/{newsComment}/unlike', [NewsCommentController::class, 'unlike']);
});

// Bets - GET disponible para todos bajo auth, POST/PUT/DELETE solo para admin
Route::middleware('auth:sanctum')->group(function () {
    Route::get('bets', [BetController::class, 'index']);
    Route::get('bets/active', [BetController::class, 'active']);
    Route::get('bets/{bet}', [BetController::class, 'show']);
    Route::post('bets', [BetController::class, 'store'])->middleware('admin.only');
    Route::put('bets/{bet}', [BetController::class, 'update'])->middleware('admin.only');
    Route::delete('bets/{bet}', [BetController::class, 'destroy'])->middleware('admin.only');
    Route::post('bets/calculate', [BetController::class, 'calculate']);
    Route::post('bets/close/{id}', [BetController::class, 'setWinner'])->middleware('admin.only');
});

// Games - GET disponible para todos bajo auth, POST/PUT/DELETE solo para admin
Route::middleware('auth:sanctum')->group(function () {
    Route::get('games', [GameController::class, 'index']);
    Route::get('games/{game}', [GameController::class, 'show']);
    Route::get('games/{id}/matchups', [GameController::class, 'findMatchByGameId']);
    Route::post('games', [GameController::class, 'store'])->middleware('admin.only');
    Route::put('games/{game}', [GameController::class, 'update'])->middleware('admin.only');
    Route::delete('games/{game}', [GameController::class, 'destroy'])->middleware('admin.only');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('match-ups', MatchUpController::class);
});
Route::get('usersProfile/search/{email}', [UserProfileController::class, 'findByEmail']);
Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('usersProfile', UserProfileController::class);
    Route::get('usersProfile/{id}/user', [UserProfileController::class, 'findUser']);
    Route::put('usersProfile/{id}/status', [UserProfileController::class, 'changeAccountStatus']);

});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('abilities', AbilityController::class);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('champions', ChampionController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('settings', SettingController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/usersProfile/subscribe-premium', [UserProfileController::class, 'subscribePremium']);
    Route::post('usersProfile/deposit', [UserProfileController::class, 'deposit']);
    Route::middleware('auth:sanctum')->post('/userBets/withdraw/{betId}', [BetController::class, 'withdraw']);
    Route::middleware('auth:sanctum')->get('/userBets/check/{betId}', [BetController::class, 'checkUserBet']);
    Route::apiResource('userBets', controller: UserBetsController::class);
    Route::get('userBets/{userId}/bets', [UserBetsController::class, 'findByUserId']);
});




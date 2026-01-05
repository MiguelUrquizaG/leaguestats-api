<?php
require __DIR__ . '/auth.php';

use App\Http\Controllers\BetController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SecuenciaController;
use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum') ->group(function(){
    Route::apiResource('countries',CountriesController::class);
});

Route::middleware('auth:sanctum') ->group(function(){
    Route::apiResource('leagues',LeagueController::class);
});

Route::middleware('auth:sanctum') ->group(function(){
    Route::apiResource('teams',TeamController::class);
});

Route::middleware('auth:sanctum') ->group(function(){
    Route::apiResource('players',PlayerController::class);
});

Route::middleware('auth:sanctum') ->group(function(){
    Route::apiResource('news',NewsController::class);
});
Route::middleware('auth:sanctum') ->group(function(){
    Route::apiResource('bets',BetController::class);
});




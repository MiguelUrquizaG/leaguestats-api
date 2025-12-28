<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_team_id')->constrained('teams','id')->cascadeOnDelete();
            $table->foreignId('away_team_id')->constrained('teams','id')->cascadeOnDelete();
            $table->integer('max_games');
            $table->integer('home_team_score');
            $table->integer('away_team_score');
            $table->boolean('is_active');
            $table->foreignId('league_id')->constrained('leagues')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};

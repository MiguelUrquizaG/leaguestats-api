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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->foreignId('country_id')->constrained('countries')->cascadeOnDelete();
            $table->integer('lost_matches');
            $table->integer('won_matches');
            $table->foreignId('league_id')->constrained('leagues')->cascadeOnDelete();
            $table->string('team_wallpaper');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};

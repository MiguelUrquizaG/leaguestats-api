<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Recuperamos los IDs necesarios para las relaciones
        $countries = DB::table('countries')->pluck('id', 'name');
        $leagues = DB::table('leagues')->pluck('id', 'name');
        $teams = DB::table('teams')->pluck('id', 'name');
        
        $now = Carbon::now();
        $password = Hash::make('12345678');

        // ---------------------------------------------------------
        // 1. Crear el usuario principal (Raul)
        // ---------------------------------------------------------
        $raulId = DB::table('users')->insertGetId([
            'name' => 'Raul',
            'email' => 'raul@email.com',
            'password' => $password,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('user_profiles')->insert([
            'user_id' => $raulId,
            'username' => 'Raul',
            'rated_matches' => 0,
            'followers' => 0,
            'country_id' => $countries['España'] ?? null,
            'banned' => false,
            'team_id' => $teams['G2 Esports'] ?? null,
            'league_id' => $leagues['LEC'] ?? null,
            'isPremium' => false,
            'balance' => 200,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // ---------------------------------------------------------
        // 2. Generar 19 usuarios adicionales
        // ---------------------------------------------------------
        $nombres = ['Ana', 'Carlos', 'Beatriz', 'David', 'Elena', 'Fernando', 'Gloria', 'Hugo', 'Irene', 'Jorge', 'Lucia', 'Marc', 'Natalia', 'Oscar', 'Paula', 'Ricardo', 'Sofia', 'Tomas', 'Valeria'];
        
        foreach ($nombres as $index => $nombre) {
            // Creamos el User y obtenemos su ID
            $userId = DB::table('users')->insertGetId([
                'name' => $nombre,
                'email' => strtolower($nombre) . $index . '@example.com',
                'password' => $password,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            // Creamos su UserProfile vinculado al ID anterior
            DB::table('user_profiles')->insert([
                'user_id' => $userId,
                'username' => $nombre,
                'rated_matches' => 0,
                'followers' => 0,
                'country_id' => $countries->random() ?? null,
                'banned' => false,
                'team_id' => $teams->random() ?? null,
                'league_id' => $leagues->random() ?? null,
                'isPremium' => (bool)rand(0, 1),
                'balance' => rand(0, 500),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
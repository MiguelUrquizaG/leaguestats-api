<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewsCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // 1. Recuperamos los IDs que necesitamos
        $newsIds = DB::table('news')->pluck('id');
        $userProfileIds = DB::table('user_profiles')->pluck('id');

        // Validamos que haya datos antes de continuar
        if ($newsIds->isEmpty() || $userProfileIds->isEmpty()) {
            $this->command->info('Por favor, ejecuta NewsSeeder y UsersSeeder primero.');
            return;
        }

        // Textos de ejemplo ambientados en el mundo competitivo (LoL)
        $comentariosEjemplo = [
            '¡El mejor fichaje de la temporada sin duda!',
            'Faker es el GOAT, era evidente que iba a renovar.',
            'No creo que este roster funcione, tienen mucho ego en el equipo.',
            'Qué ganas del MSI, este año LATAM tiene que dar la sorpresa.',
            'Excelente guía, la pondré en práctica en mis rankeds esta noche.',
            'Los cambios a los dragones van a romper el meta por completo...',
            'G2 siempre innovando, increíble lo que hacen por los esports.',
            'Madre mía, ¿17 años y ya debuta en la LCS? Qué locura.',
            'Ese draft en el 5to juego de la final fue terrible, merecían perder.',
            'Gracias por el tutorial del wave management, ¡al fin subí a Esmeralda!'
        ];

        foreach ($newsIds as $newsId) {
            // Generamos entre 3 y 6 comentarios por cada noticia
            $numComments = rand(3, 6);

            for ($i = 0; $i < $numComments; $i++) {
                // Elegimos un usuario aleatorio para ser el autor del comentario
                $authorId = $userProfileIds->random();

                // Elegimos un número aleatorio de "Me gusta" (de 0 a 5)
                // y sacamos usuarios únicos para dar esos likes
                $numLikes = rand(0, 5);
                $likerIds = $userProfileIds->random($numLikes);

                // 2. Insertar el Comentario
                $commentId = DB::table('news_comments')->insertGetId([
                    'news_id' => $newsId,
                    'user_id' => $authorId, // Recuerda que en tu migración esto es el ID del perfil
                    'likes' => $numLikes, // Mantenemos tu contador sincronizado
                    'comment' => $comentariosEjemplo[array_rand($comentariosEjemplo)],
                    'created_at' => $now->copy()->subMinutes(rand(1, 1000)), // Fechas realistas
                    'updated_at' => $now,
                ]);

                // 3. Insertar los "Me gusta" de ese comentario
                if ($numLikes > 0) {
                    $likesData = [];
                    foreach ($likerIds as $likerId) {
                        $likesData[] = [
                            'news_comment_id' => $commentId,
                            'user_profile_id' => $likerId,
                            'created_at' => $now,
                            'updated_at' => $now,
                        ];
                    }

                    // Usamos insertOrIgnore por seguridad extra ante la regla UNIQUE 
                    DB::table('news_comment_likes')->insertOrIgnore($likesData);
                }
            }
        }
    }
}
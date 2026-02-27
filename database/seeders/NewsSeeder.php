<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        $types = ['Transfer', 'New', 'Tutorial'];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('news')->insert([
                'title' => "Noticia de Esports #$i",
                'description' => "Esta es la descripción detallada de la noticia número $i sobre el panorama competitivo.",
                'photo' => "news_0$i.jpg",
                'type' => $types[array_rand($types)],
                'created_at' => $now->subHours($i),
                'updated_at' => $now,
            ]);
        }
    }
}
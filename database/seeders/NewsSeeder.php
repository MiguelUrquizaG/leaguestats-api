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

        $images = [
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHU8JUtSyi6bR1apEDUUTGAzQCAlqqB7Z7Wg&s',
            'https://estaticos-cdn.prensaiberica.es/clip/b70a1306-006e-45bc-a19d-b25fc6e0a073_16-9-aspect-ratio_default_0_x750y281.jpg',
            'https://www.legal-esport.com/imactus/esports-nations-cup-2026.jpg',
            'https://estaticos-cdn.prensaiberica.es/clip/0b945c3c-8a87-4cd2-b7da-afac61c4ec9e_16-9-aspect-ratio_default_0_x750y288.jpg',
            'https://objetos-xlk.estaticos-marca.com/uploads/2026/02/28/69a353a03e0b3.jpeg',
            'https://cdn.sanity.io/images/dsfx7636/news_live/9cba5bf9e2cf1d67665b555df8c682c0bf6b2321-1920x1080.jpg'
        ];

        $news = [
            [
                'title' => 'T1 Faker firma extensión de contrato por tres años más',
                'description' => 'El legendario midlaner Faker ha renovado su contrato con T1 hasta 2029. Con cinco títulos mundiales, seguirá siendo la cara del equipo más exitoso de la LCK.',
                'type' => 'Transfer',
            ],
            [
                'title' => 'G2 Esports anuncia nueva academia en colaboración con universidades europeas',
                'description' => 'G2 Esports lanza un programa de academia con cinco universidades europeas, ofreciendo becas que combinan estudios con entrenamiento profesional de esports.',
                'type' => 'New',
            ],
            [
                'title' => 'Riot Games presenta cambios masivos al sistema de dragones para la temporada 2026',
                'description' => 'El parche 14.5 introduce una renovación completa del sistema de dragones con efectos de alma rediseñados y spawn más predecibles. Los equipos deberán adaptar sus estrategias.',
                'type' => 'New',
            ],
            [
                'title' => 'Cloud9 ficha a promesa coreana de 17 años para su roster principal',
                'description' => 'Cloud9 sorprende con la contratación de un jungler prodigio de 17 años procedente de la liga de desarrollo coreana. Debutará en la LCS la próxima semana.',
                'type' => 'Transfer',
            ],
            [
                'title' => 'Guía definitiva: Cómo dominar el wave management en línea superior',
                'description' => 'Aprende las técnicas avanzadas de control de oleadas: slow push, fast push, freeze y crash. Incluye ejemplos prácticos de partidas de la LCK y consejos de profesionales.',
                'type' => 'Tutorial',
            ],
            [
                'title' => 'JD Gaming completa el roster perfecto tras dos años de planificación',
                'description' => 'JD Gaming alcanza su formación ideal con la llegada de su nuevo support. El roster incluye tres campeones del mundo y dos jugadores MVP de la LPL.',
                'type' => 'Transfer',
            ],
            [
                'title' => 'El MSI 2026 se celebrará en São Paulo con récord de equipos participantes',
                'description' => 'El MSI 2026 tendrá lugar en São Paulo, Brasil, por primera vez en Sudamérica. El torneo contará con 14 equipos, incluyendo slots para regiones emergentes.',
                'type' => 'New',
            ],
            [
                'title' => 'Tutorial: Optimiza tu build según el oro disponible - Guía de economía',
                'description' => 'Maximiza tu efectividad aprendiendo qué items comprar según tu oro exacto. Análisis de breakpoints de poder y comparación entre componentes vs items completos.',
                'type' => 'Tutorial',
            ],
            [
                'title' => 'LOUD se consagra bicampeón del CBLOL tras una final épica de 5 juegos',
                'description' => 'LOUD derrota a paiN Gaming 3-2 para reclamar su segundo título consecutivo del CBLOL. El ADC fue nombrado MVP de las finales con una actuación dominante en Kai\'Sa.',
                'type' => 'New',
            ],
            [
                'title' => 'Análisis de meta: Los 5 campeones que dominan el competitivo profesional',
                'description' => 'Cinco campeones emergen como picks prioritarios en todas las regiones. Azir domina mid con 87% de presencia y Rell se consolida como el support más valioso.',
                'type' => 'Tutorial',
            ],
            [
                'title' => 'MAD Lions KOI realiza cambios drásticos en el coaching staff',
                'description' => 'La organización europea anuncia la salida de su head coach y la llegada de un equipo técnico renovado liderado por un ex-jugador de T1.',
                'type' => 'Transfer',
            ],
            [
                'title' => 'Riot implementa nuevo sistema anti-toxicidad en el chat del competitivo',
                'description' => 'Las ligas profesionales tendrán moderación en tiempo real usando IA para detectar lenguaje inapropiado. Los infractores reincidentes enfrentarán multas y suspensiones.',
                'type' => 'New',
            ],
            [
                'title' => 'GenG presenta su nueva gaming house valorada en 8 millones de dólares',
                'description' => 'Gen.G inaugura sus nuevas instalaciones en Seúl con salas de entrenamiento individualizadas, gimnasio, nutricionista y dormitorios de lujo en un complejo de tres pisos.',
                'type' => 'New',
            ],
            [
                'title' => 'Tutorial avanzado: Macro game y rotaciones perfectas paso a paso',
                'description' => 'Domina el macro game con esta guía exhaustiva. Aprende a leer el mapa, ejecutar rotaciones coordinadas y convertir ventajas pequeñas en victorias.',
                'type' => 'Tutorial',
            ],
            [
                'title' => 'Escándalo en la LCS: equipo multado por violación de reglas salariales',
                'description' => 'La LCS impone una multa de $150,000 a una organización por incumplimiento del salario mínimo. La investigación reveló pagos retrasados y cláusulas abusivas.',
                'type' => 'New',
            ],
        ];

        foreach ($news as $index => $article) {
            DB::table('news')->insert([
                'title' => $article['title'],
                'description' => $article['description'],
                'photo' => $images[array_rand($images)],
                'type' => $article['type'],
                'created_at' => $now->copy()->subHours($index * 2),
                'updated_at' => $now,
            ]);
        }
    }
}
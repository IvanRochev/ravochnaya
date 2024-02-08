<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Сидер тестового наполнения базы
     */
    public function run(): void
    {
        //создаем записи первичные
        $events = \App\Models\Event::factory(7)->create();
        $residents = \App\Models\Resident::factory(15)->create();
        $merchandises = \App\Models\Merchandise::factory(4)->create();
        $tags = \App\Models\Tag::factory(12)->create();

        //тянем primary ключи
        $residents_id = $residents->pluck('id');
        $tags_id = $tags->pluck('id');

        //создаём вторичные записи через отношения
        $events->each(function ($event) use ($residents_id, $tags_id){
            //линкуем рандомные теги и резиденты для каждого ивента через pivot 
            $event->residents()->attach($residents_id->random(5));
            $event->tags()->attach($tags_id->random(3));
            //создаем рандомный контент для каждого ивента
            \App\Models\Content::factory(5)->create([
                'event_id' => $event->id,
            ]);
        });

        $residents->each(function ($resident) use ($tags_id){
            //линкуем рандомные теги для каждого резидента через pivot
            $resident->tags()->attach($tags_id->random(3));
            //создаем рандомные ссылки для каждого резидента
            \App\Models\ResidentLink::factory(3)->create([
                'resident_id' => $resident->id,
            ]);
        });

        $merchandises->each(function($merchandise){
            //создаем рандомные записи фоток для каждого товара
            \App\Models\MerchandisePhoto::factory(5)->create([
                'merchandise_id' => $merchandise->id,
            ]);
        });
    }
}

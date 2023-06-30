<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titleRandomizer1 = [
            'Металлоконструкций, Металла, Металлолома за наш счет 💲',
            'Очитака территорий от мусора за наш счет 💲',
            'В течении одного дня 🕐'
        ];
        $titleRandomizer2 = [
            'Бесплатно 💲',
            "Все виды техники 🚚",
            "Грузчики, Резчики 👷"
        ];
        Page::insert([
            [
                'slug'       => 'vyiezdnoj-priyomnyij-punkt',
                'title'      => 'Прием металла с выездом'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'contacts',
                'title'      => 'Контакты компании'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'demontazh',
                'title'      => 'Демонтаж металлоконструкций'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'punkt-priema-metalla',
                'title'      => 'Пункты приема металла'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'vyivoz-metalloloma',
                'title'      => 'Вывоз металлолома'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'czenyi-na-metall',
                'title'      => 'Цены на металлолом'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'uslugi',
                'title'      => 'Услуги'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'kak-sdat-metall',
                'title'      => 'Как сдать металлолом'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'uslugi-demontazha',
                'title'      => 'Демонтаж'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'gde-mozhno-sdat-metallolom-s-vyivozom',
                'title'      => 'Где можно сдать металлолом с вывозом в Московской области'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'chto-mozhno-sdat-na-metallolom',
                'title'      => 'Какой металлолом можно сдать'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'demontazh-goroda',
                'title'      => 'В каких городах мы делаем демонтаж'.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug'       => 'polzovatelskoe-soglashenie',
                'title'      => 'Пользовательское соглашение',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

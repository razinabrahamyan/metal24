<?php

namespace Database\Seeders;

use App\Models\MetaKeywords;
use App\Models\Page;
use App\Models\Slug;
use Illuminate\Database\Seeder;

class MetaKeyWordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetaKeywords::create([
            'slug'     => 'welcome',
            'keywords' => 'прием металлолома, цена металлолома, металл прием, вывоз металлолома, металлолом, сдать металлолом, прием металла, цветной металл, лом цена, черный металл, черных металлов, металлолом цена, цветмет, цветмет цена, медь лом, цветные металлы, прием лома',
        ]);

        foreach (Slug::all() as $slug) {
            MetaKeywords::create([
                'slug'     => $slug->slug,
                'keywords' => $this->randomizer(),
            ]);
        }

        foreach (Page::all() as $page) {
            MetaKeywords::create([
                'slug'     => $page->slug,
                'keywords' => $this->randomizer(),
            ]);
        }

        MetaKeywords::create([
            'slug'     => 'news',
            'keywords' => $this->randomizer(),
        ]);

        MetaKeywords::create([
            'slug'     => 'site.map',
            'keywords' => $this->randomizer(),
        ]);

        MetaKeywords::create([
            'slug'     => 'vakansii',
            'keywords' => $this->randomizer(),
        ]);
        MetaKeywords::create([
            'slug'     => 'sotrudnichestvo',
            'keywords' => $this->randomizer(),
        ]);
        MetaKeywords::create([
            'slug'     => 'nashi.raboti',
            'keywords' => $this->randomizer(),
        ]);
    }

    /**
     * @return string
     */
    private function randomizer() : string
    {
        $standartKeywords = [
            'прием металлолома',
            'цена металлолома',
            'прием металла',
            'металлолом цена',
            'металл прием',
            'вывоз металлолома',
            'металлолом',
            'сдать металлолом',
            'черный лом',
            'цветной металл',
            'лом цена',
            'москва',
            'черный металл',
            'цена черного металла',
            'пункт приема металлолома',
            'цветмет',
            'цветмет цена',
            'медь лом',
            'цветные металлы',
            'прием лома',
            'прием цветных металлов',
            'кг меди',
            'медь сегодня',
            'лом меди цена',
            'кг лом',
            'кг металла',
            'металлолом вывоз',
            'листовой металл',
            'черный металл лом цена',
            'прием металла цена',
            'цена черных металлов',
            'прием алюминия',
            'алюминий цена',
            'латунь цена',
            'сдавать медь',
            'сдавать металл',
            'лом металл цветной',
            'демонтаж металлоконструкций',
            'демонтаж гаражей',
            'сдать металлолом цена',
            'металлолом прием пункт',
            'скупка металлолома',
            'скупка цветного металла',
            'металлолом москва',
            'металлолом цена 1 кг',
            'металлолом кг цена',
            'металлолом тонна',
            'металлолом адрес',
            'адреса приема металлолома',
            'бесплатно',
            'бесплатный вывоз',
            'цена',
            'вывоз контейнера',
            'вывоз',
            'демонтаж',
            'цветной лом',
            'металл цена',
            'медь цена',
            'прием цветных металлов цены',
            'пункты цветного металла',
            'лом цветных металлов',
            'цветной металл цена',
            'черных металлов',
            'прием черного металла',
            'лом черных металлов',
            'лом черного металла',
            'кг черного металла',
            'лом черных металлов цена',
            'металл приемка',
            'черный лом цена',
            'металлолом приемка',
        ];

        $randomKeyWordsArray = [];
        $randomKeyWords = '';

        foreach ($standartKeywords as $standartKeyword) {
            $rand = $standartKeywords[array_rand($standartKeywords)];
            $randomKeyWords .= $rand.' ,';

            if (mb_strlen($randomKeyWords) <= 255) {
                $randomKeyWordsArray[] = $rand;
            } else {
                break;
            }
        }

        return implode(', ', $randomKeyWordsArray);
    }
}

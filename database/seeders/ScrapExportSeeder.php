<?php

namespace Database\Seeders;

use App\Models\ScrapExport;
use Illuminate\Database\Seeder;

class ScrapExportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Вывоз труб',
                'type'  => 'black',
            ],
            [
                'title' => 'Авто на металлолом',
                'type'  => 'black',
            ],
            [
                'title' => 'Вывоз чугуна',
                'type'  => 'black',
            ],
            [
                'title' => 'Вывоз стального лома',
                'type'  => 'black',
            ],
            [
                'title' => 'Вывоз арматуры',
                'type'  => 'black',
            ],
            [
                'title' => 'Вывоз железа',
                'type'  => 'black',
            ],
            [
                'title' => 'Вывоз Б/У баллонов',
                'type'  => 'black',
            ],
            [
                'title' => 'Вывоз бытового лома',
                'type'  => 'black',
            ],
            [
                'title' => 'Вывоз алюминия',
                'type'  => 'color',
            ],
            [
                'title' => 'Вывоз меди',
                'type'  => 'color',
            ],
            [
                'title' => 'Вывоз электродвигателей',
                'type'  => 'color',
            ],
            [
                'title' => 'Вывоз свинца',
                'type'  => 'color',
            ],
            [
                'title' => 'Вывоз нержавейки',
                'type'  => 'color',
            ],
            [
                'title' => 'Вывоз латуни',
                'type'  => 'color',
            ],
            [
                'title' => 'Вывоз магния',
                'type'  => 'color',
            ],
            [
                'title' => 'Вывоз бронзы',
                'type'  => 'color',
            ],
        ];

        foreach ($data as $export){
            ScrapExport::create($export);
        }
    }
}

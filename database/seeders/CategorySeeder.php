<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('market_id' => 1, 'title'=>'Медь'),
            array('market_id' => 1, 'title'=>'Алюминий'),
            array('market_id' => 1, 'title'=>'Бронза'),
            array('market_id' => 1, 'title'=>'Свинец'),
            array('market_id' => 1, 'title'=>'Латунь'),
            array('market_id' => 1, 'title'=>'Нержавейка'),

            array('market_id' => 4, 'title' => 'Сталь'),
            array('market_id' => 4, 'title' => 'Чугун'),
            array('market_id' => 4, 'title' => 'Оцинковка'),
            array('market_id' => 4, 'title' => 'Чермет'),

            array('market_id' => 7, 'title' => 'Титан'),
            array('market_id' => 7, 'title' => 'Вольфрам'),
            array('market_id' => 7, 'title' => 'Мельхиор'),
            array('market_id' => 7, 'title' => 'Баббит'),
            array('market_id' => 7, 'title' => 'Молибден'),
            array('market_id' => 7, 'title' => 'Никель'),
            array('market_id' => 7, 'title' => 'Цинк'),
            array('market_id' => 7, 'title' => 'Силумин'),
            array('market_id' => 7, 'title' => 'Припой'),
            array('market_id' => 7, 'title' => 'Олово'),


        );
        Category::insert($data);
    }
}

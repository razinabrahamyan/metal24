<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        $data = array(


            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Медь блеск'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Лом меди в силовом кабеле (более 50 мм2)'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Кусковая медь'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => '«Отборка» ( не менее 3 мм.)'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Обожженная (лом «жженка»)'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Медь в масле'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Электротехническая (в масле)'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Медная катанка'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Шинка трансформаторная медная'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Лом эмальпровода'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Медный микс (несортовая)'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Медь в стеклоткани'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Луженая медь'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Медная стружка (сечка)'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Медная проволока'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Радиаторы медные'),
            array('category_id' => 1, 'market_id' => $categories->where('id', 1)->first()->market_id, 'title' => 'Медно-алюминиевые радиаторы'),


            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Алюминиево-медные радиаторы'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Электротехнический алюминий ( в масле)'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Провод АС'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Лом алюминия в силовом кабеле (более 50 мм2)'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Пищевой алюминий «пищевка»'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Алюминиевый профиль (АД-31)'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Алюминиевые ерши (трубы с ребрами)'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Алюминиевые диски'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Офсетные листы ( офсет)'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Моторный алюминий'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Сплав АМГ'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Микс алюминия (несортовой лом)'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Автомобильные номера'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Сплав алюминия АМЦ'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Алюминиевые банки'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Алюминиевая стружка'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Алюминиевая фольга'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Лом алюминиевых радиаторов'),
            array('category_id' => 2, 'market_id' => $categories->where('id', 2)->first()->market_id, 'title' => 'Алюминиевая проволока'),


            array('category_id' => 3, 'market_id' => $categories->where('id', 3)->first()->market_id, 'title' => 'Марочная бронза (БрАж, БрОф, БрОц)'),
            array('category_id' => 3, 'market_id' => $categories->where('id', 3)->first()->market_id, 'title' => 'Микс бронзы (несортовой лом)'),
            array('category_id' => 3, 'market_id' => $categories->where('id', 3)->first()->market_id, 'title' => 'Кусковая бронза (кусок от 10 мм.)'),
            array('category_id' => 3, 'market_id' => $categories->where('id', 3)->first()->market_id, 'title' => 'Бронзовые изделия'),
            array('category_id' => 3, 'market_id' => $categories->where('id', 3)->first()->market_id, 'title' => 'Бронзовая стружка'),


            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Свинец в чушках'),
            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Лом свинца в силовом кабеле'),
            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Кабель со свинцовой оболочкой'),
            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Кабельный свинец (очищенный от гудрона)'),
            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Кусковой свинец (кусок более 10 мм.)'),
            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Свинцовые пластины'),
            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Кабельный свинец (не очищенный от гудрона)'),
            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Свинец «переплав»'),
            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Лом свинца в телефонном кабеле'),
            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Шиномонтажные грузики (балансировочные)'),
            array('category_id' => 4, 'market_id' => $categories->where('id', 4)->first()->market_id, 'title' => 'Свинцовая проволока'),


            array('category_id' => 5, 'market_id' => $categories->where('id', 5)->first()->market_id, 'title' => 'Марочная латунь Л-63'),
            array('category_id' => 5, 'market_id' => $categories->where('id', 5)->first()->market_id, 'title' => 'Марочная латунь Л–90'),
            array('category_id' => 5, 'market_id' => $categories->where('id', 5)->first()->market_id, 'title' => 'Лом латуни ЛС-59'),
            array('category_id' => 5, 'market_id' => $categories->where('id', 5)->first()->market_id, 'title' => 'Микс латуни (несортовая)'),
            array('category_id' => 5, 'market_id' => $categories->where('id', 5)->first()->market_id, 'title' => 'Кусковая латунь (кусок от 5мм.)'),
            array('category_id' => 5, 'market_id' => $categories->where('id', 5)->first()->market_id, 'title' => 'Лом латунных радиаторов'),
            array('category_id' => 5, 'market_id' => $categories->where('id', 5)->first()->market_id, 'title' => 'Латунная стружка'),


            array('category_id' => 6, 'market_id' => $categories->where('id', 6)->first()->market_id, 'title' => 'Лом высоколегированной стали (15-99% Ni)'),
            array('category_id' => 6, 'market_id' => $categories->where('id', 6)->first()->market_id, 'title' => 'Нержавейка 10% (габарит)'),
            array('category_id' => 6, 'market_id' => $categories->where('id', 6)->first()->market_id, 'title' => 'Нержавейка 10% (не габарит)'),
            array('category_id' => 6, 'market_id' => $categories->where('id', 6)->first()->market_id, 'title' => 'Нержавейка 8% (габарит)'),
            array('category_id' => 6, 'market_id' => $categories->where('id', 6)->first()->market_id, 'title' => 'Нержавейка 8% (не габарит)'),
            array('category_id' => 6, 'market_id' => $categories->where('id', 6)->first()->market_id, 'title' => 'Стружка нержавейки'),
            array('category_id' => 6, 'market_id' => $categories->where('id', 6)->first()->market_id, 'title' => 'Лом стали низколегированной (1-6% Ni)'),


            array('category_id' => 7, 'market_id' => $categories->where('id', 7)->first()->market_id, 'title' => 'Сталь негабаритная 5А'),
            array('category_id' => 7, 'market_id' => $categories->where('id', 7)->first()->market_id, 'title' => 'Сталь габаритная 3А/3А1'),
            array('category_id' => 7, 'market_id' => $categories->where('id', 7)->first()->market_id, 'title' => 'Проволока 13А'),
            array('category_id' => 7, 'market_id' => $categories->where('id', 7)->first()->market_id, 'title' => 'Стальная стружка 16А'),
//            array('slug' => '', 'category_id' => 7, 'title' => 'Сталь (бытовой черный лом) 12БЛ'),
//            array('slug' => '', 'category_id' => 7, 'title' => 'Сталь оцинкованная 12АС'),
//            array('slug' => '', 'category_id' => 7, 'title' => 'Арматура 12АР'),
//            array('slug' => '', 'category_id' => 7, 'title' => 'Сталь тонколистовая 4НН'),


            array('category_id' => 8, 'market_id' => $categories->where('id', 8)->first()->market_id, 'title' => 'Габаритный чугун 17А'),
            array('category_id' => 8, 'market_id' => $categories->where('id', 8)->first()->market_id, 'title' => 'Лом негабаритного чугуна 20А'),
            array('category_id' => 8, 'market_id' => $categories->where('id', 8)->first()->market_id, 'title' => 'Черный металл 22А'),

            array('category_id' => 9, 'market_id' => $categories->where('id', 9)->first()->market_id, 'title' => '12А ( жесть/оцинковка)'),


            array('category_id' => 10, 'market_id' => $categories->where('id', 10)->first()->market_id, 'title' => 'Черный лом габаритный 3Арм'),
            array('category_id' => 10, 'market_id' => $categories->where('id', 10)->first()->market_id, 'title' => 'Лом негабаритный 5Арм'),
            array('category_id' => 10, 'market_id' => $categories->where('id', 10)->first()->market_id, 'title' => 'Лом 13А (стальные канаты, проволока, арматура)'),
            array('category_id' => 10, 'market_id' => $categories->where('id', 10)->first()->market_id, 'title' => 'Черный лом мелкий 4А'),
            array('category_id' => 10, 'market_id' => $categories->where('id', 10)->first()->market_id, 'title' => 'Тонкостенный металлолома 12А1'),
            array('category_id' => 10, 'market_id' => $categories->where('id', 10)->first()->market_id, 'title' => 'Стружка черного металлолома'),
            array('category_id' => 10, 'market_id' => $categories->where('id', 10)->first()->market_id, 'title' => 'Арматура'),
            array('category_id' => 10, 'market_id' => $categories->where('id', 10)->first()->market_id, 'title' => 'Жесть'),


            array('category_id' => 11, 'market_id' => $categories->where('id', 11)->first()->market_id, 'title' => 'Лом титана ВТ1-0'),
            array('category_id' => 11, 'market_id' => $categories->where('id', 11)->first()->market_id, 'title' => 'Несортовой титан (микс)'),
            array('category_id' => 11, 'market_id' => $categories->where('id', 11)->first()->market_id, 'title' => 'Титановая стружка'),


            array('category_id' => 12, 'market_id' => $categories->where('id', 12)->first()->market_id, 'title' => 'Вольфрамовая проволока'),
            array('category_id' => 12, 'market_id' => $categories->where('id', 12)->first()->market_id, 'title' => 'Лом вольфрамовых электродов'),


            array('category_id' => 13, 'market_id' => $categories->where('id', 13)->first()->market_id, 'title' => 'Лом мельхиора МН-19'),
            array('category_id' => 13, 'market_id' => $categories->where('id', 13)->first()->market_id, 'title' => 'Мельхиор МН–40'),
            array('category_id' => 13, 'market_id' => $categories->where('id', 13)->first()->market_id, 'title' => 'Сплав МНЦ 15-20'),


            array('category_id' => 14, 'market_id' => $categories->where('id', 14)->first()->market_id, 'title' => 'Баббит Б-83'),
            array('category_id' => 14, 'market_id' => $categories->where('id', 14)->first()->market_id, 'title' => 'Лом баббита «самоплав»'),
            array('category_id' => 14, 'market_id' => $categories->where('id', 14)->first()->market_id, 'title' => 'Баббит Б-16'),


            array('category_id' => 15, 'market_id' => $categories->where('id', 15)->first()->market_id, 'title' => 'Лом молибдена печного'),
            array('category_id' => 15, 'market_id' => $categories->where('id', 15)->first()->market_id, 'title' => 'Прокат из молибдена'),

            array('category_id' => 17, 'market_id' => $categories->where('id', 17)->first()->market_id, 'title' => 'Лом ВК-ТК'),

        );

        Product::insert($data);

        $data1 = array(
            //has no category

            array('market_id' => 2, 'title' => 'Медный кабель'),
            array('market_id' => 2, 'title' => 'Силовой кабель'),
            array('market_id' => 2, 'title' => 'Телефонный кабель'),
            array('market_id' => 2, 'title' => 'Компьютерный кабель'),
            array('market_id' => 2, 'title' => 'Алюминиевый кабель'),
            array('market_id' => 2, 'title' => 'Свинцовый кабель'),
            array('market_id' => 2, 'title' => 'Монтажный кабель'),
            array('market_id' => 2, 'title' => 'Обмоточный кабель'),


            array('market_id' => 3, 'title' => 'Лом слитых аккумуляторов'),
            array('market_id' => 3, 'title' => 'Гелевые аккумуляторы'),
            array('market_id' => 3, 'title' => 'Автомобильные аккумуляторы'),
            array('market_id' => 3, 'title' => 'Свинцовые аккумуляторы'),
            array('market_id' => 3, 'title' => 'Тяговые аккумуляторы'),
            array('market_id' => 3, 'title' => 'Аккумуляторы от ИБП'),
            array('market_id' => 3, 'title' => 'Эбонитовые аккумуляторы'),
            array('market_id' => 3, 'title' => 'Щелочные аккумуляторы (ТНЖ, НК)'),

            array('market_id' => 5, 'title' => 'Трансформаторы медные'),
            array('market_id' => 5, 'title' => 'Трансформаторы алюминиевые'),

            array('market_id' => 6, 'title' => 'Электрогенераторы'),
            array('market_id' => 6, 'title' => 'Лом стартеров'),
            array('market_id' => 6, 'title' => 'Компрессоры'),
            //---END-has no category
        );

        Product::insert($data1);

        $data2 = [
            array('market_id' => 7,'category_id'=>16, 'title' => 'Никель'),
            array('market_id' => 7,'category_id'=>18, 'title' => 'Силумин'),
            array('market_id' => 7,'category_id'=>19, 'title' => 'Припой'),
            array('market_id' => 7,'category_id'=>20, 'title' => 'Олово'),
        ];
        Product::insert($data2);

    }
}

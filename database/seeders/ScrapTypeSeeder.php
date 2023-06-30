<?php

namespace Database\Seeders;

use App\Models\ScrapType;
use Illuminate\Database\Seeder;

class ScrapTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'product_id' => 67,
                'title' => '3А',
                'description' => 'Габаритный черный металл. Толщина стенки от 4 мм. Максимальный размер куска не более 1500 мм х 500 мм х 500 мм. (Балки, швеллер, уголок)'
            ),
            array(
                'product_id' => 68,
                'title' => '5А',
                'description' => 'Негабаритный металлолом. Толщина стенки от 4 мм. Размер куска не регламентируется'
            ),
            array(
                'product_id' => 69,
                'title' => '4НН',
                'description' => 'Тонколистовой металлолом. Толщина стенки менее 4мм. (Требуется дополнительная переработка металла).'
            ),
            array(
                'product_id' => 70,
                'title' => '12БЛ',
                'description' => 'Бытовой черный лом. Толщина стенки менее 4 мм (кузова легковых автомобилей, газовые плиты, стиральные машинки).'
            ),
            array('product_id' => 71,'title' => '12АС', 'description' => 'Оцинкованный лом.'),
            array('product_id' => 72,'title' => '12АР', 'description' => 'Арматура. Диаметр металла более 8 мм.'),
            array('product_id' => 73,'title' => '13А', 'description' => 'Проволока. Диаметр металла 4-6 мм., кроме сталистой'),
            array('product_id' => 74,'title' => '16А', 'description' => 'Стружка стальная (вьюнообразная)'),
            array('product_id' => 75,'title' => '17А', 'description' => 'Габаритный чугун (размеры не более 800х500х500 мм.)'),
            array('product_id' => 76,'title' => '20А', 'description' => 'Негабаритный чугунный лом (станины, маленькие станки, задвижки)'),
        );

        ScrapType::insert($data);
    }
}

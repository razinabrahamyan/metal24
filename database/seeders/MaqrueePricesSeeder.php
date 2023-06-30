<?php

namespace Database\Seeders;

use App\Models\MarqueePrice;
use Illuminate\Database\Seeder;

class MaqrueePricesSeeder extends Seeder
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
                "title"     => "Медь блеск",
                "price"     => "650₽",
                "direction" => "up",
                "href"      => 'priem-medi-blesk'
            ],
            [
                "title"     => "Медь кусок",
                "price"     => "610₽",
                "direction" => "up",
                "href"      => 'priem-kuskovoj-medi'
            ],
            [
                "title"     => "Черный металл",
                "price"     => "31₽",
                "direction" => "up",
                "href"      => 'priem-chernogo-loma'
            ],
            [
                "title"     => "Медь микс",
                "price"     => "650₽",
                "direction" => "up",
                "href"      => 'priem-miks-medi-nesortovaya-med'
            ],
            [
                "title"     => "Медь луженая",
                "price"     => "470₽",
                "direction" => "down",
                "href"      => 'priem-luzhenoj-medi'
            ],
            [
                "title"     => "Латунь",
                "price"     => "410₽",
                "direction" => "up",
                "href"      => 'priem-latuni'
            ],
            [
                "title"     => "Бронза",
                "price"     => "450₽",
                "direction" => "up",
                "href"      => 'priem-bronzyi'
            ],
            [
                "title"     => "Латунные радиаторы",
                "price"     => "360₽",
                "direction" => "down",
                "href"      => 'priem-latunnyix-radiatorov'
            ],
            [
                "title"     => "Алюминий электротех",
                "price"     => "155₽",
                "direction" => "up",
                "href"      => 'priem-elektrotexnicheskogo-alyuminiya'
            ],
            [
                "title"     => "Алюминий профиль",
                "price"     => "130₽",
                "direction" => "up",
                "href"      => 'priem-alyuminievogo-profilya-ad-31'
            ],
            [
                "title"     => "Алюминий диски",
                "price"     => "105₽",
                "direction" => "down",
                "href"      => 'alyuminievyie-diski'
            ],
            [
                "title"     => "Алюминий",
                "price"     => "100₽",
                "direction" => "up",
                "href"      => 'priem-alyuminiya'
            ],
            [
                "title"     => "Алюминий моторка",
                "price"     => "105₽",
                "direction" => "down",
                "href"      => 'priem-motornogo-alyuminiya'
            ],
            [
                "title"     => "Нержавейка 8%",
                "price"     => "95₽",
                "direction" => "up",
                "href"      => 'priem-nerzhavejki-8-gabarit'
            ],
            [
                "title"     => "Нержавейка 10%",
                "price"     => "105₽",
                "direction" => "up",
                "href"      => 'priem-nerzhavejka-10-gabarit'
            ],
            [
                "title"     => "Кабель",
                "price"     => "495₽",
                "direction" => "down",
                "href"      => 'priem-loma-kabelya'
            ],
            [
                "title"     => "Свинец",
                "price"     => "100₽",
                "direction" => "down",
                "href"      => 'priem-svincza'
            ],
            [
                "title"     => "АКБ",
                "price"     => "50₽",
                "direction" => "up",
                "href"      => 'priem-akkumulyatorov'
            ],
        ];

        foreach ($data as $item) {
            MarqueePrice::create($item);
        }
    }
}

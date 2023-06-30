<?php

namespace Database\Seeders;

use App\Models\DismantlingRegion;
use App\Models\Regions;
use Illuminate\Database\Seeder;

class DismantlingRegionsSeeder extends Seeder
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
                'title'       => 'Демонтаж металлолома в Центральном административном округе Москвы (ЦАО)',
                'dative_name' => 'Центральном административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Северном административном округе Москвы (САО)',
                'dative_name' => 'Северном административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Северо-Восточном административном округе Москвы(СВАО)',
                'dative_name' => 'Северо-Восточном административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Восточном административном округе Москвы (ВАО)',
                'dative_name' => 'Восточном административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в юго-Восточном административном округе Москвы (ЮВАО)',
                'dative_name' => 'Юго-Восточном административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Южном административном округе Москвы (ЮАО)',
                'dative_name' => 'Южном административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Юго-Западном административном округе Москвы (ЮЗАО)',
                'dative_name' => 'Юго-Западном административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Западном административном округе Москвы (ЗАО)',
                'dative_name' => 'Западном административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Северо-Западном административном округе Москвы (СЗАО)',
                'dative_name' => 'Северо-Западном административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Зеленоградском административном округе Москвы (ЗелАО)',
                'dative_name' => 'Зеленоградском административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Троицком административном округе Москвы (ТАО)',
                'dative_name' => 'Троицком административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Новомосковском административном округе Москвы (НАО)',
                'dative_name' => 'Новомосковском административном округе Москвы',
                'type'        => 'region',
            ],
            [
                'title'       => 'Демонтаж металлолома в Апрелевке',
                'dative_name' => 'Апрелевке',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Балашихе',
                'dative_name' => 'Балашихе',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Белозёрском',
                'dative_name' => 'Белозёрском',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Бронницах',
                'dative_name' => 'Бронницах',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Веере',
                'dative_name' => 'Веере',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Видном',
                'dative_name' => 'Видном',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Волоколамске',
                'dative_name' => 'Волоколамске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Воскресенске',
                'dative_name' => 'Воскресенске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Высоковске',
                'dative_name' => 'Высоковске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Галицыно',
                'dative_name' => 'Галицыно',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Дедовское',
                'dative_name' => 'Дедовское',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Дзержинском',
                'dative_name' => 'Дзержинском',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Дмитрове',
                'dative_name' => 'Дмитрове',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Домодедово',
                'dative_name' => 'Домодедово',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Дрезне',
                'dative_name' => 'Дрезне',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Дубне',
                'dative_name' => 'Дубне',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Егорьевске',
                'dative_name' => 'Егорьевске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Жуковском',
                'dative_name' => 'Жуковском',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Зарайске',
                'dative_name' => 'Зарайске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Звенигороде',
                'dative_name' => 'Звенигороде',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Ивантеевке',
                'dative_name' => 'Ивантеевке',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Истре',
                'dative_name' => 'Истре',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Кашире',
                'dative_name' => 'Кашире',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Клину',
                'dative_name' => 'Клину',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Коломне',
                'dative_name' => 'Коломне',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Королёве',
                'dative_name' => 'Королёве',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Красноармейске',
                'dative_name' => 'Красноармейске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Красногорске',
                'dative_name' => 'Красногорске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Краснозаводске',
                'dative_name' => 'Краснозаводске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Краснознаменске',
                'dative_name' => 'Краснознаменске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Кубинке',
                'dative_name' => 'Кубинке',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Куровском',
                'dative_name' => 'Куровском',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Ликино-Дулёво',
                'dative_name' => 'Ликино-Дулёво',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Лобне',
                'dative_name' => 'Лобне',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Лосино-Петровском',
                'dative_name' => 'Лосино-Петровском',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Луховицах',
                'dative_name' => 'Луховицах',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Лыткарино',
                'dative_name' => 'Лыткарино',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Люберцах',
                'dative_name' => 'Люберцах',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Можайске',
                'dative_name' => 'Можайске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Мытищах',
                'dative_name' => 'Мытищах',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Наро-Фоминске',
                'dative_name' => 'Наро-Фоминске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Ногинске',
                'dative_name' => 'Ногинске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Одинцово',
                'dative_name' => 'Одинцово',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Озерах',
                'dative_name' => 'Озерах',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Орехово-Зуево',
                'dative_name' => 'Орехово-Зуево',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Павловском Посаде',
                'dative_name' => 'Павловском Посаде',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Пересвете',
                'dative_name' => 'Пересвете',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Подольске',
                'dative_name' => 'Подольске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Протвино',
                'dative_name' => 'Протвино',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Пушкине',
                'dative_name' => 'Пушкине',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Пущино',
                'dative_name' => 'Пущино',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Раменском',
                'dative_name' => 'Раменском',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Реутове',
                'dative_name' => 'Реутове',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Рошале',
                'dative_name' => 'Рошале',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Рузе',
                'dative_name' => 'Рузе',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Сергиевом Посаде',
                'dative_name' => 'Сергиевом Посаде',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Серпухове',
                'dative_name' => 'Серпухове',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Солнечногорске',
                'dative_name' => 'Солнечногорске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Старой Купавне',
                'dative_name' => 'Старой Купавне',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Ступино',
                'dative_name' => 'Ступино',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Талдоме',
                'dative_name' => 'Талдоме',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Фрязино',
                'dative_name' => 'Фрязино',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Химках',
                'dative_name' => 'Химках',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Хотьково',
                'dative_name' => 'Хотьково',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Черноголовке',
                'dative_name' => 'Черноголовке',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Чехове',
                'dative_name' => 'Чехове',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Шатуре',
                'dative_name' => 'Шатуре',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Щёлково',
                'dative_name' => 'Щёлково',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Электрогорске',
                'dative_name' => 'Электрогорске',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Электростали',
                'dative_name' => 'Электростали',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Электроуглях',
                'dative_name' => 'Электроуглях',
                'type'        => 'city',
            ],
            [
                'title'       => 'Демонтаж металлолома в Яхморе',
                'dative_name' => 'Яхморе',
                'type'        => 'city',
            ],
            ['type' => 'district', 'dative_name' => 'Академический', 'title' => 'Демонтаж металлолома в  районе Академический'],
            ['type' => 'district', 'dative_name' => 'Алексеевский', 'title' => 'Демонтаж металлолома в  районе Алексеевский'],
            ['type' => 'district', 'dative_name' => 'Алтуфьевский', 'title' => 'Демонтаж металлолома в  районе Алтуфьевский'],
            ['type' => 'district', 'dative_name' => 'Арбат', 'title' => 'Демонтаж металлолома в  районе Арбат'],
            ['type' => 'district', 'dative_name' => 'Аэропорт', 'title' => 'Демонтаж металлолома в  районе Аэропорт'],
            ['type' => 'district', 'dative_name' => 'Бабушкинский', 'title' => 'Демонтаж металлолома в  районе Бабушкинский'],
            ['type' => 'district', 'dative_name' => 'Басманный', 'title' => 'Демонтаж металлолома в  районе Басманный'],
            ['type' => 'district', 'dative_name' => 'Беговой', 'title' => 'Демонтаж металлолома в  районе Беговой'],
            ['type' => 'district', 'dative_name' => 'Бескудниковский', 'title' => 'Демонтаж металлолома в  районе Бескудниковский'],
            ['type' => 'district', 'dative_name' => 'Бибирево', 'title' => 'Демонтаж металлолома в  районе Бибирево'],
            ['type' => 'district', 'dative_name' => 'Бирюлево', 'title' => 'Демонтаж металлолома в  районе Бирюлево'],
            ['type' => 'district', 'dative_name' => 'Богородское', 'title' => 'Демонтаж металлолома в  районе Богородское'],
            ['type' => 'district', 'dative_name' => 'Братеево', 'title' => 'Демонтаж металлолома в  районе Братеево'],
            ['type' => 'district', 'dative_name' => 'Бутово Северное', 'title' => 'Демонтаж металлолома в  районе Бутово Северное'],
            ['type' => 'district', 'dative_name' => 'Бутово Южное', 'title' => 'Демонтаж металлолома в  районе Бутово Южное'],
            ['type' => 'district', 'dative_name' => 'Бутырский', 'title' => 'Демонтаж металлолома в  районе Бутырский'],
            ['type' => 'district', 'dative_name' => 'Вешняки', 'title' => 'Демонтаж металлолома в  районе Вешняки'],
            ['type' => 'district', 'dative_name' => 'Внуково', 'title' => 'Демонтаж металлолома в  районе Внуково'],
            ['type' => 'district', 'dative_name' => 'Войковский', 'title' => 'Демонтаж металлолома в  районе Войковский'],
            ['type' => 'district', 'dative_name' => 'Восточный', 'title' => 'Демонтаж металлолома в  районе Восточный'],
            ['type' => 'district', 'dative_name' => 'Выхино-Жулебино', 'title' => 'Демонтаж металлолома в  районе Выхино-Жулебино'],
            ['type' => 'district', 'dative_name' => 'Гагаринский', 'title' => 'Демонтаж металлолома в  районе Гагаринский'],
            ['type' => 'district', 'dative_name' => 'Головинский', 'title' => 'Демонтаж металлолома в  районе Головинский'],
            ['type' => 'district', 'dative_name' => 'Гольяново', 'title' => 'Демонтаж металлолома в  районе Гольяново'],
            ['type' => 'district', 'dative_name' => 'Даниловский', 'title' => 'Демонтаж металлолома в  районе Даниловский'],
            ['type' => 'district', 'dative_name' => 'Дегунино Восточное', 'title' => 'Демонтаж металлолома в  районе Дегунино Восточное'],
            ['type' => 'district', 'dative_name' => 'Дегунино Западное', 'title' => 'Демонтаж металлолома в  районе Дегунино Западное'],
            ['type' => 'district', 'dative_name' => 'Дмитровский', 'title' => 'Демонтаж металлолома в  районе Дмитровский'],
            ['type' => 'district', 'dative_name' => 'Донской', 'title' => 'Демонтаж металлолома в  районе Донской'],
            ['type' => 'district', 'dative_name' => 'Дорогомилово', 'title' => 'Демонтаж металлолома в  районе Дорогомилово'],
            ['type' => 'district', 'dative_name' => 'Замоскворечье', 'title' => 'Демонтаж металлолома в  районе Замоскворечье'],
            ['type' => 'district', 'dative_name' => 'Зюзино', 'title' => 'Демонтаж металлолома в  районе Зюзино'],
            ['type' => 'district', 'dative_name' => 'Бутово', 'title' => 'Демонтаж металлолома в  районе Бутово'],
            ['type' => 'district', 'dative_name' => 'Зябликово', 'title' => 'Демонтаж металлолома в  районе Зябликово'],
            ['type' => 'district', 'dative_name' => 'Ивановское', 'title' => 'Демонтаж металлолома в  районе Ивановское'],
            ['type' => 'district', 'dative_name' => 'Измайлово', 'title' => 'Демонтаж металлолома в  районе Измайлово'],
            ['type' => 'district', 'dative_name' => 'Капотня', 'title' => 'Демонтаж металлолома в  районе Капотня'],
            ['type' => 'district', 'dative_name' => 'Коньково', 'title' => 'Демонтаж металлолома в  районе Коньково'],
            ['type' => 'district', 'dative_name' => 'Коптево', 'title' => 'Демонтаж металлолома в  районе Коптево'],
            ['type' => 'district', 'dative_name' => 'Косино-Ухтомский', 'title' => 'Демонтаж металлолома в  районе Косино-Ухтомский'],
            ['type' => 'district', 'dative_name' => 'Котловка', 'title' => 'Демонтаж металлолома в  районе Котловка'],
            ['type' => 'district', 'dative_name' => 'Красносельский', 'title' => 'Демонтаж металлолома в  районе Красносельский'],
            ['type' => 'district', 'dative_name' => 'Крылатское', 'title' => 'Демонтаж металлолома в  районе Крылатское'],
            ['type' => 'district', 'dative_name' => 'Крюково', 'title' => 'Демонтаж металлолома в  районе Крюково'],
            ['type' => 'district', 'dative_name' => 'Кузьминки', 'title' => 'Демонтаж металлолома в  районе Кузьминки'],
            ['type' => 'district', 'dative_name' => 'Кунцево', 'title' => 'Демонтаж металлолома в  районе Кунцево'],
            ['type' => 'district', 'dative_name' => 'Куркино', 'title' => 'Демонтаж металлолома в  районе Куркино'],
            ['type' => 'district', 'dative_name' => 'Левобережный', 'title' => 'Демонтаж металлолома в  районе Левобережный'],
            ['type' => 'district', 'dative_name' => 'Лефортово', 'title' => 'Демонтаж металлолома в  районе Лефортово'],
            ['type' => 'district', 'dative_name' => 'Лианозово', 'title' => 'Демонтаж металлолома в  районе Лианозово'],
            ['type' => 'district', 'dative_name' => 'Ломоносовский', 'title' => 'Демонтаж металлолома в  районе Ломоносовский'],
            ['type' => 'district', 'dative_name' => 'Лосиноостровский', 'title' => 'Демонтаж металлолома в  районе Лосиноостровский'],
            ['type' => 'district', 'dative_name' => 'Люблино', 'title' => 'Демонтаж металлолома в  районе Люблино'],
            ['type' => 'district', 'dative_name' => 'Марфино', 'title' => 'Демонтаж металлолома в  районе Марфино'],
            ['type' => 'district', 'dative_name' => 'Марьина роща', 'title' => 'Демонтаж металлолома в  районе Марьина роща'],
            ['type' => 'district', 'dative_name' => 'Марьино', 'title' => 'Демонтаж металлолома в  районе Марьино'],
            ['type' => 'district', 'dative_name' => 'Матушкино', 'title' => 'Демонтаж металлолома в  районе Матушкино'],
            ['type' => 'district', 'dative_name' => 'Медведково Северное', 'title' => 'Демонтаж металлолома в  районе Медведково Северное'],
            ['type' => 'district', 'dative_name' => 'Медведково Южное', 'title' => 'Демонтаж металлолома в  районе Медведково Южное'],
            ['type' => 'district', 'dative_name' => 'Метрогородок', 'title' => 'Демонтаж металлолома в  районе Метрогородок'],
            ['type' => 'district', 'dative_name' => 'Мещанский', 'title' => 'Демонтаж металлолома в  районе Мещанский'],
            ['type' => 'district', 'dative_name' => 'Митино', 'title' => 'Демонтаж металлолома в  районе Митино'],
            ['type' => 'district', 'dative_name' => 'Можайский', 'title' => 'Демонтаж металлолома в  районе Можайский'],
            ['type' => 'district', 'dative_name' => 'Молжаниновский', 'title' => 'Демонтаж металлолома в  районе Молжаниновский'],
            ['type' => 'district', 'dative_name' => 'Москворечье-Сабурово', 'title' => 'Демонтаж металлолома в  районе Москворечье-Сабурово'],
            ['type' => 'district', 'dative_name' => 'Нагатино-Садовники', 'title' => 'Демонтаж металлолома в  районе Нагатино-Садовники'],
            ['type' => 'district', 'dative_name' => 'Нагатинский затон', 'title' => 'Демонтаж металлолома в  районе Нагатинский затон'],
            ['type' => 'district', 'dative_name' => 'Нагорный', 'title' => 'Демонтаж металлолома в  районе Нагорный'],
            ['type' => 'district', 'dative_name' => 'Некрасовка', 'title' => 'Демонтаж металлолома в  районе Некрасовка'],
            ['type' => 'district', 'dative_name' => 'Нижегородский', 'title' => 'Демонтаж металлолома в  районе Нижегородский'],
            ['type' => 'district', 'dative_name' => 'Новогиреево', 'title' => 'Демонтаж металлолома в  районе Новогиреево'],
            ['type' => 'district', 'dative_name' => 'Новокосино', 'title' => 'Демонтаж металлолома в  районе Новокосино'],
            ['type' => 'district', 'dative_name' => 'Ново-Переделкино', 'title' => 'Демонтаж металлолома в  районе Ново-Переделкино'],
            ['type' => 'district', 'dative_name' => 'Обручевский', 'title' => 'Демонтаж металлолома в  районе Обручевский'],
            ['type' => 'district', 'dative_name' => 'Орехово-Борисово Северное', 'title' => 'Демонтаж металлолома в  районе Орехово-Борисово Северное'],
            ['type' => 'district', 'dative_name' => 'Орехово-Борисово Южное', 'title' => 'Демонтаж металлолома в  районе Орехово-Борисово Южное'],
            ['type' => 'district', 'dative_name' => 'Останкинский', 'title' => 'Демонтаж металлолома в  районе Останкинский'],
            ['type' => 'district', 'dative_name' => 'Отрадное', 'title' => 'Демонтаж металлолома в  районе Отрадное'],
            ['type' => 'district', 'dative_name' => 'Очаково-Матвеевское', 'title' => 'Демонтаж металлолома в  районе Очаково-Матвеевское'],
            ['type' => 'district', 'dative_name' => 'Перово', 'title' => 'Демонтаж металлолома в  районе Перово'],
            ['type' => 'district', 'dative_name' => 'Печатники', 'title' => 'Демонтаж металлолома в  районе Печатники'],
            ['type' => 'district', 'dative_name' => 'Покровское-Стрешнево', 'title' => 'Демонтаж металлолома в  районе Покровское-Стрешнево'],
            ['type' => 'district', 'dative_name' => 'Преображенское', 'title' => 'Демонтаж металлолома в  районе Преображенское'],
            ['type' => 'district', 'dative_name' => 'Пресненский', 'title' => 'Демонтаж металлолома в  районе Пресненский'],
            ['type' => 'district', 'dative_name' => 'Проспект Вернадского', 'title' => 'Демонтаж металлолома в  районе Проспект Вернадского'],
            ['type' => 'district', 'dative_name' => 'Раменки', 'title' => 'Демонтаж металлолома в  районе Раменки'],
            ['type' => 'district', 'dative_name' => 'Ростокино', 'title' => 'Демонтаж металлолома в  районе Ростокино'],
            ['type' => 'district', 'dative_name' => 'Рязанский', 'title' => 'Демонтаж металлолома в  районе Рязанский'],
            ['type' => 'district', 'dative_name' => 'Савёлки', 'title' => 'Демонтаж металлолома в  районе Савёлки'],
            ['type' => 'district', 'dative_name' => 'Савёловский', 'title' => 'Демонтаж металлолома в  районе Савёловский'],
            ['type' => 'district', 'dative_name' => 'Свиблово', 'title' => 'Демонтаж металлолома в  районе Свиблово'],
            ['type' => 'district', 'dative_name' => 'Северный', 'title' => 'Демонтаж металлолома в  районе Северный'],
            ['type' => 'district', 'dative_name' => 'Силино', 'title' => 'Демонтаж металлолома в  районе Силино'],
            ['type' => 'district', 'dative_name' => 'Сокол', 'title' => 'Демонтаж металлолома в  районе Сокол'],
            ['type' => 'district', 'dative_name' => 'Соколиная гора', 'title' => 'Демонтаж металлолома в  районе Соколиная гора'],
            ['type' => 'district', 'dative_name' => 'Сокольники', 'title' => 'Демонтаж металлолома в  районе Сокольники'],
            ['type' => 'district', 'dative_name' => 'Солнцево', 'title' => 'Демонтаж металлолома в  районе Солнцево'],
            ['type' => 'district', 'dative_name' => 'Старое Крюково', 'title' => 'Демонтаж металлолома в  районе Старое Крюково'],
            ['type' => 'district', 'dative_name' => 'Строгино', 'title' => 'Демонтаж металлолома в  районе Строгино'],
            ['type' => 'district', 'dative_name' => 'Таганский', 'title' => 'Демонтаж металлолома в  районе Таганский'],
            ['type' => 'district', 'dative_name' => 'Тверской', 'title' => 'Демонтаж металлолома в  районе Тверской'],
            ['type' => 'district', 'dative_name' => 'Текстильщики', 'title' => 'Демонтаж металлолома в  районе Текстильщики'],
            ['type' => 'district', 'dative_name' => 'Тёплый Стан', 'title' => 'Демонтаж металлолома в  районе Тёплый Стан'],
            ['type' => 'district', 'dative_name' => 'Тимирязевский', 'title' => 'Демонтаж металлолома в  районе Тимирязевский'],
            ['type' => 'district', 'dative_name' => 'Тропарёво-Никулино', 'title' => 'Демонтаж металлолома в  районе Тропарёво-Никулино'],
            ['type' => 'district', 'dative_name' => 'Тушино Северное', 'title' => 'Демонтаж металлолома в  районе Тушино Северное'],
            ['type' => 'district', 'dative_name' => 'Тушино Южное', 'title' => 'Демонтаж металлолома в  районе Тушино Южное'],
            ['type' => 'district', 'dative_name' => 'Филёвский парк', 'title' => 'Демонтаж металлолома в  районе Филёвский парк'],
            ['type' => 'district', 'dative_name' => 'Фили-Давыдково', 'title' => 'Демонтаж металлолома в  районе Фили-Давыдково'],
            ['type' => 'district', 'dative_name' => 'Хамовники', 'title' => 'Демонтаж металлолома в  районе Хамовники'],
            ['type' => 'district', 'dative_name' => 'Ховрино', 'title' => 'Демонтаж металлолома в  районе Ховрино'],
            ['type' => 'district', 'dative_name' => 'Хорошёво-Мневники', 'title' => 'Демонтаж металлолома в  районе Хорошёво-Мневники'],
            ['type' => 'district', 'dative_name' => 'Хорошёвский', 'title' => 'Демонтаж металлолома в  районе Хорошёвский'],
            ['type' => 'district', 'dative_name' => 'Царицыно', 'title' => 'Демонтаж металлолома в  районе Царицыно'],
            ['type' => 'district', 'dative_name' => 'Черёмушки', 'title' => 'Демонтаж металлолома в  районе Черёмушки'],
            ['type' => 'district', 'dative_name' => 'Чертаново Северное', 'title' => 'Демонтаж металлолома в  районе Чертаново Северное'],
            ['type' => 'district', 'dative_name' => 'Чертаново Центральное', 'title' => 'Демонтаж металлолома в  районе Чертаново Центральное'],
            ['type' => 'district', 'dative_name' => 'Чертаново Южное', 'title' => 'Демонтаж металлолома в  районе Чертаново Южное'],
            ['type' => 'district', 'dative_name' => 'Щукино', 'title' => 'Демонтаж металлолома в  районе Щукино'],
            ['type' => 'district', 'dative_name' => 'Южнопортовый', 'title' => 'Демонтаж металлолома в  районе Южнопортовый'],
            ['type' => 'district', 'dative_name' => 'Якиманка', 'title' => 'Демонтаж металлолома в  районе Якиманка'],
            ['type' => 'district', 'dative_name' => 'Ярославский', 'title' => 'Демонтаж металлолома в  районе Ярославский'],
            ['type' => 'district', 'dative_name' => 'Ясенево', 'title' => 'Демонтаж металлолома в  районе Ясенево'],
        ];

        foreach ($data as $region) {
            DismantlingRegion::create($region);
        }
    }
}
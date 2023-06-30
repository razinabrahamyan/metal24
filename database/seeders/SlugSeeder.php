<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Dismantling;
use App\Models\DismantlingRegion;
use App\Models\Market;
use App\Models\Product;
use App\Models\Regions;
use App\Models\ScrapExport;
use App\Models\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class SlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content_id = 1;
        $data = [
            ['h1' => 'Прием цветного металла', 'title' => '💲 Цена на цветной металлолом - Прием цветного металла в 🏙️ Москве', 'id' => 1, 'slug' => 'priem-czvetnogo-metalla'],
            ['h1' => 'Прием кабеля', 'title' => 'Сдать кабель и провода в пункт приема металлолома - 💲 Цена за 1 кг лома в 🏙️ Москве', 'id' => 2, 'slug' => 'priem-loma-kabelya'],
            ['h1' => 'Прием аккумуляторов', 'title' => 'Прием аккумуляторов б/у в Москве - 💲 Цена на аккумуляторные батареи (АКБ)', 'id' => 3, 'slug' => 'priem-akkumulyatorov'],
            ['h1' => 'Прием черного лома', 'title' => 'Прием черного лома в Москве и МО - Сдать черный металл с вывозом, 💲 цены за 1кг металлолома', 'id' => 4, 'slug' => 'priem-chernogo-loma'],
            ['h1' => 'Прием трансформаторов', 'title' => 'Пункт прием трансформаторов:💲 Выгодно сдать трансформаторы б.у на лом в 🏙️ Москве и Московской области', 'id' => 5, 'slug' => 'priem-transformatorov'],
            ['h1' => 'Прием электродвигателей', 'title' => 'Сдать электродвигатели на лом: Лучшая 💲 цена приема электродвигателей в 🏙️ Москве за 1 тонну', 'id' => 6, 'slug' => 'priem-elektrodvigatelej'],
            ['h1' => 'Прием редкоземельных металлов', 'title' => 'Прием редкоземельных металлов - 💲 Дорого сдать лом РЗМ в Москве и 🏙️ Московской Области', 'id' => 7, 'slug' => 'redkozemelnyij-metall'],
        ];


        foreach ($data as $item) {
            $slug = new Slug();
            $market = Market::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $slug->content_id = $content_id;
            $market->slug()->save($slug);
            $content_id++;
        }

        $data = [
            ['title' => 'Прием меди в 🏙️ Москве - 💲 Цена меди за 1 кг, сдать медь в скупку лома', 'h1' => 'Прием меди', 'id' => 1, 'slug' => 'priem-medi'],
            ['title' => 'Прием алюминия - 💲 Цена в 🏙️ Москве за 1 кг алюминия, тонну лома алюминиевого лома', 'h1' => 'Прием алюминия', 'id' => 2, 'slug' => 'priem-alyuminiya'],
            ['title' => 'Прием бронзы в 🏙️ Москве за деньги за 1 кг, тонну - 💲 Дорого сдать лом бронзовый Московской области', 'h1' => 'Прием бронзы', 'id' => 3, 'slug' => 'priem-bronzyi'],
            ['title' => 'Прием свинца - Лучшая 💲 цена на свинцовый лом, сдать свинец от 1 кг в 🏙️ Москве', 'h1' => 'Прием свинца', 'id' => 4, 'slug' => 'priem-svincza'],
            ['title' => 'Прием латуни - Высокая 💲 цена за кг латунного лома в 🏙️ Москве с 🚚 вывозом', 'h1' => 'Прием латуни', 'id' => 5, 'slug' => 'priem-latuni'],
            ['title' => 'Прием нержавейки - 💲 Цена нержавеющего металла за 1кг, 1 тонну в 🏙️ Москве и МО', 'h1' => 'Прием нержавейки', 'id' => 6, 'slug' => 'priem-nerzhavejki'],
            ['title' => 'Прием стали - 💲 Цена на сталь за 1 кг, тонну в 🏙️ Москве, сдать стальной лом с 🚚 вывозом в Московской области', 'h1' => 'Прием стали', 'id' => 7, 'slug' => 'priem-stali'],
            ['title' => 'Прием чугуна в 🏙️ Москве с 🚚 вывозом -💲 Дорого сдать чугун на металлолом, 💲 цена на чугунный лом за 1кг, тонну', 'h1' => 'Прием чугуна', 'id' => 8, 'slug' => 'priem-lom-chuguna'],
            ['title' => 'Сдать оцинковку - Прием металлома с 🚚 вывозом в Москве - 💲 цена за кг, тонну', 'h1' => 'Прием оцинковки', 'id' => 9, 'slug' => 'priem-lom-oczinkovki'],
            ['title' => 'Прием чермета в 🏙️ Москве и МО - Сдать чермет дорого 🚚 вывоз, 💲 цена черного металлома за 1кг лома', 'h1' => 'Прием чермета', 'id' => 10, 'slug' => 'priem-chermeta'],
            ['title' => 'Сдать титан 💲 дорого - Прием от 1 кг цветного лома в 🏙️ Москве, цена титана на 📅 сегодня', 'h1' => 'Прием титана', 'id' => 11, 'slug' => 'priem-titana'],
            ['title' => 'Прием вольфрама по лучшей 💲 цене за кг в 🏙️ Москве 🚚 Самовывоз', 'h1' => 'Прием вольфрама', 'id' => 12, 'slug' => 'priem-volframa'],
            ['title' => 'Сдать мельхиор в приемный пункт металлолома "ЛМК - Москва" - Лучшая 💲 цеан за кг в 🏙️ Москве', 'h1' => 'Прием мельхиора', 'id' => 13, 'slug' => 'priem-lom-melxiora'],
            ['title' => 'Прием баббита с нашим 🚚 вывозом - 💲 Цена за кг на сегодня в 🏙️ Москве, тонну', 'h1' => 'Прием баббита', 'id' => 14, 'slug' => 'priem-babbita'],
            ['title' => 'Прием молибден - Сдать от 1 кг 💲 дорого в Москве и 🏙️ Московской области, 💲 цена молибдена в пунктах сдачи металлолома', 'h1' => 'Прием молибдена', 'id' => 15, 'slug' => 'priem-molibdena'],
            ['title' => 'Прием никеля в 🏙️ Москве и Мо - Дорого сдать никель за 💲 деньги', 'h1' => 'Прием никеля', 'id' => 16, 'slug' => 'priem-lom-nikelya'],
            ['title' => 'Сдать цинк на металлолом - Прием от 1 кг в 🏙️ Москве и Московской области, 💲 цена цинка на 📅 сегодня', 'h1' => 'Прием цинка', 'id' => 17, 'slug' => 'priem-lom-czinka'],
            ['title' => 'Прием силумина - Скупка по высокой 💲 цене в 🏙️ Москве и Мо, прайс-лист на силумин в ЛМК', 'h1' => 'Прием силуина', 'id' => 18, 'slug' => 'priem-silumina'],
            ['title' => 'Сдать припой дорого - Прием и 🚚 вывоз припоя от 1 кг в 🏙️ Москве и Мо, 💲 цена на 📅 сегодня', 'h1' => 'Прием припоя', 'id' => 19, 'slug' => 'priem-lom-pripoya'],
            ['title' => 'Прием олова в 🏙️ Москве и Московской Области - Сдать металлолом по лучшей 💲 цене за 1 кг', 'h1' => 'Прием олова', 'id' => 20, 'slug' => 'priem-lom-olova'],
        ];

        foreach ($data as $item) {
            $slug = new Slug();
            $market = Category::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $slug->content_id = $content_id;
            $market->slug()->save($slug);
            $content_id++;
        }


        $data = [
            ['title' => 'Прием меди блеск - Высокая 💲 цена на цветной металлолом "блестяшка" в 🏙️ Москве', 'h1' => 'Прием меди блеск', 'id' => 1, 'slug' => 'priem-medi-blesk'],
            ['title' => 'Прием меди в силовом кабеле - Сдать от 1 кг, 💲 цена на сегодня в 🏙️ Москве и Мо, тонны', 'h1' => 'Прием меди в силовом кабеле', 'id' => 2, 'slug' => 'priem-medi-v-silovom-kabele'],
            ['title' => 'Прием кусковой меди - Скупка с 🚚 вывозом в 🏙️ Москве, 💲 цена за 1 кг цветного лома, тонну', 'h1' => 'Прием кусковой меди', 'id' => 3, 'slug' => 'priem-kuskovoj-medi'],
            ['title' => 'Сдать медь "отборку" - Прием от 1кг в 🏙️ Москве и Московской области, высокая 💲 цена на 📅 сегодня, тонны', 'h1' => 'Прием меди "отборка"', 'id' => 4, 'slug' => 'priem-medi-otborka'],
            ['title' => 'Прием обожженной меди - 💲 Цена за 1 кг «жженки» медной в 🏙️ Москве на сегодня, тонну', 'h1' => 'Прием обожженной меди', 'id' => 5, 'slug' => 'priem-obozhzhenoj-mezhi'],
            ['title' => 'Сдать медь в масле в 🏙️ Москве и Московской области - Цветной металл 💲 дорого прием и 🚚 вывоз от 1кг, тонны', 'h1' => 'Прием меди в масле', 'id' => 6, 'slug' => 'priem-medi-v-masle'],
            ['title' => 'Прием электротехнической меди в масле от 1 кг 💲 дорого в Москве и Московской Области', 'h1' => 'Прием электротехнической меди в масле', 'id' => 7, 'slug' => 'priem-elektrotexnicheskoj-medi-v-masle'],
            ['title' => 'Прием медной катанки - Сдать от 1 кг 💲 дорого в 🏙️ Москве и Московской области, тонны', 'h1' => 'Прием медной катанки', 'id' => 8, 'slug' => 'priem-mednoj-katanki'],
            ['title' => 'Прием шинки трансформаторной медной от 1кг дорого в Москве, тонны', 'h1' => 'Шинка трансформаторная медная', 'id' => 9, 'slug' => 'shinka-transformatornaya-mednaya'],
            ['title' => 'Сдать эмальпровод - Прием цветного металлома от 1 кг лома в Москве дорого', 'h1' => 'Прием лома эмальпровода', 'id' => 10, 'slug' => 'priem-loma-emalprovoda'],
            ['title' => 'Прием меди микс - Дорого сдать медный микс в 🏙️ Москве, 💲 цена цветного лома за 1кг', 'h1' => 'Прием меди микс', 'id' => 11, 'slug' => 'priem-miks-medi-nesortovaya-med'],
            ['title' => 'Сдать медь в стеклоткани - Прием от 1кг, высокая 💲 цена на 📅 сегодня', 'h1' => 'Прием меди в стеклоткани', 'id' => 12, 'slug' => 'priem-medi-v-steklotkani'],
            ['title' => 'Прием луженой меди в 🏙️ Москве и Московской Области - 💲 Дорого за 1кг лома меди', 'h1' => 'Прием луженой меди', 'id' => 13, 'slug' => 'priem-luzhenoj-medi'],
            ['title' => 'Прием медной стружки (сечки) в 🏙️ Москве 💲 дорого за 1 кг цветного лома', 'h1' => 'Прием медной стружки (сечки)', 'id' => 14, 'slug' => 'priem-mednoj-struzhki-sechki'],
            ['title' => 'Прием медной проволоки - 💲 Дорого сдать от 1кг проволоки из меди,🚚 вывоз цветного металла', 'h1' => 'Прием медной проволоки', 'id' => 15, 'slug' => 'priem-mednoj-provoloki'],
            ['title' => 'Прием медных радиаторов - Высокая 💲 цена за 1кг лома радиаторов в 🏙️ Москве', 'h1' => 'Прием медных радиаторов', 'id' => 16, 'slug' => 'radiatoryi-mednyie'],
            ['title' => 'Сдать медно-алюминиевые радиаторы - Прием и 🚚 Вывоз от 1кг, 💲 дорого в Москве и 🏙️ Московской Области', 'h1' => 'Прием медно-алюминиевых радиаторов', 'id' => 17, 'slug' => 'priem-medno-alyuminievyix-radiatorov'],
        ];

        $data1 = [
            ['title' => 'Прием алюминиево-медных радиаторов - Высокая 💲 цена за 1 кг цветного металлолома в 🏙️ Москве', 'h1' => 'Прием алюминиево-медных радиаторов', 'id' => 18, 'slug' => 'priem-alyuminievo-mednyix-radiatorov'],
            ['title' => 'Прием электротехнического алюминия - 💲 Цена за 1 кг выше рыночной в 🏙️ Москве и Московской Области', 'h1' => 'Прием электротехнического алюминия', 'id' => 19, 'slug' => 'priem-elektrotexnicheskogo-alyuminiya'],
            ['title' => 'Сдать провод АС на Металлолом - Прием и вывоз от 1 кг алюминия в Москве,💲 цена на 📅 сегодня', 'h1' => 'Прием провода АС', 'id' => 20, 'slug' => 'priem-provoda-as'],
            ['title' => 'Прием алюминия в силовом кабеле - 💲 Высокая Цена за 1 кг на сегодня в Москве и Мо', 'h1' => 'Прием алюминия в силовом кабеле', 'id' => 21, 'slug' => 'priem-alyuminiya-v-silovom-kabele'],
            ['title' => 'Прием пищевого алюминия - Максимальная 💲 цена сегодня за 1кг цветного металла', 'h1' => 'Прием пищевого алюминия', 'id' => 22, 'slug' => 'priem-pishhevogo-alyuminiya'],
            ['title' => 'Сдать алюминиевый профиль дорого - прием цветного лома,🚚 вывоз алюминиевого профиля в Москве', 'h1' => 'Прием алюминиевого профиля', 'id' => 23, 'slug' => 'priem-alyuminievogo-profilya-ad-31'],
            ['title' => 'Прием алюминиевых ершей - 💲 дорого сдать трубы с ребрами в Москве и Московской области', 'h1' => 'Прием алюминиевых ершей (трубы с ребрами)', 'id' => 24, 'slug' => 'alyuminievyie-ershi-trubyi'],
            ['title' => 'Прием алюминиевых дисков - 💲 цена за 1 кг цветного металла выше рынка по 🏙️ Москве и Московской области', 'h1' => 'Прием алюминиевых дисков', 'id' => 25, 'slug' => 'alyuminievyie-diski'],
            ['title' => 'Прием офсета - 💲 дорого сдать металлолом от 1 кг офсетного алюминиевого лома в Москве', 'h1' => 'Прием офсета', 'id' => 26, 'slug' => 'priem-ofseta'],
            ['title' => 'Сдать моторный алюминий - прием и 🚚 вывоз моторки от 1кг 💲 дорого в Москве и Мо', 'h1' => 'Прием моторного алюминия', 'id' => 27, 'slug' => 'priem-motornogo-alyuminiya'],
            ['title' => 'Прием сплава алюминия АМГ - продать цветной Металлолом дорого за 💲 деньги в 🏙️ Москве', 'h1' => 'Прием сплава алюминия АМГ', 'id' => 28, 'slug' => 'priem-splava-alyuminiya-amg'],
            ['title' => 'Прием микс алюминия - сдать от 1 кг несортового алюминия, MIX Алюминий 💲 дорого', 'h1' => 'Прием микс алюминия (несортовой алюминий)', 'id' => 29, 'slug' => 'priem-miks-alyuminiya'],
            ['title' => 'Прием лома автомобильных номеров - максимальная 💲 цена в Москве и МО', 'h1' => 'Прием лома автомобильных номеров', 'id' => 30, 'slug' => 'priem-avtomobilnyix-nomerov'],
            ['title' => 'Сдать сплав алюминия АМЦ - прием от 1кг алюминия 💲 дорого в Москве', 'h1' => 'Прием сплава алюминия АМЦ', 'id' => 31, 'slug' => 'priem-splava-alyuminiya-amcz'],
            ['title' => 'Прием алюминиевых банок - 💲 дорого сдать от 1кг цветного лома банки в 🏙️ Москве и Области', 'h1' => 'Прием алюминиевых банок', 'id' => 32, 'slug' => 'priem-alyuminievyix-banok'],
            ['title' => 'Сдать алюминиевую стружку - прием от 1 кг лома алюминиевой стружки,💲 дорого', 'h1' => 'Прием алюминиевой стружки', 'id' => 33, 'slug' => 'priem-alyuminievoj-struzhki'],
            ['title' => 'Прием алюминиевой фольги от 1кг в Москве и Мо - дорого сдать фольгу,💲 цена на алюминий 📅 сегодня', 'h1' => 'Прием алюминиевой фольги', 'id' => 34, 'slug' => 'alyuminievaya-folga'],
            ['title' => 'Прием алюминиевых радиаторов - сдать цветной металл 💲 дорого за 1 кг в Москве', 'h1' => 'Прием алюминиевых радиаторов', 'id' => 35, 'slug' => 'priem-alyuminievyix-radiatorov'],
            ['title' => 'Прием алюминиевой проволоки в 🏙️ Москве - 💲 цены за цветной лом проволоки', 'h1' => 'Прием алюминиевой проволоки', 'id' => 36, 'slug' => 'priem-alyuminievoj-provoloki'],
        ];

        $data2 = [
            ['title' => 'Прием марочной бронзы - Цена на сегодня - Вывоз бронзовых изделий от 1 тонны 🚚', 'h1' => 'Прием марочной бронзы (БрАж, БрОф, БрОц)', 'id' => 37, 'slug' => 'priem-marochnoj-bronzyi-brazh-brof-brocz'],
            ['title' => 'Прием несортовой бронзы (микс) - Сдать бронзу MIX дорого от 1 тонны в Москве 💲', 'h1' => 'Микс бронзы (несортовой лом)', 'id' => 38, 'slug' => 'miks-bronzyi-nesortovoj-lom'],
            ['title' => 'Прием кусковой бронзы - сдать кусковую бронзу дорого в Москве 💲', 'h1' => 'Прием кусковой бронзы', 'id' => 39, 'slug' => 'priem-kuskovoj-bronzyi'],
            ['title' => 'Сдать бронзовые изделия - Цена на сегодня - Вывоз бронзовых изделий от 1 тонны 🚚', 'h1' => 'Прием бронзовых изделий', 'id' => 40, 'slug' => 'priem-bronzovyix-izdelij'],
            ['title' => 'Прием бронзовой стружки - Цена на сегодня - Вывоз бронзовой стружки от 1 тонны 🚚', 'h1' => 'Прием бронзовой стружки', 'id' => 41, 'slug' => 'priem-bronzovoj-struzhki'],
        ];

        $data3 = [
            ['title' => 'Прием свинца в чушках - Цена за тонну свинцовых чушек в Москве - Вывоз от 1 тонны 🚚', 'h1' => 'Прием свинца в чушках', 'id' => 42, 'slug' => 'priem-svincza-v-chushkax'],
            ['title' => 'Прием свинца в силовом кабеле - Цены, адреса пунктов в Москве - Вывоз от 1 тонны 🚚', 'h1' => 'Прием свинца в силовом кабеле', 'id' => 43, 'slug' => 'priem-svincza-v-silovom-kabele'],
            ['title' => 'Прием кабеля со свинцовой оболочкой - Максимальная цена за тонну в Москве 💲', 'h1' => 'Прием кабеля со свинцовой оболочкой', 'id' => 44, 'slug' => 'priem-kabelya-so-svinczovoj-obolochkoj'],
            ['title' => 'Прием очищенного свинцового кабеля - Дорого за тонну в Москве 💲', 'h1' => 'Прием кабельного свинца (очищенного от гудрона)', 'id' => 45, 'slug' => 'priem-kabelnogo-svincza-ochishhennogo'],
            ['title' => 'Прием кусоквого свинца - Вывоз свинца в Москве, цена за 1 тонны 🚚', 'h1' => 'Прием кускового свинца', 'id' => 46, 'slug' => 'kuskovoj-svinecz-kusok-bolee-10-mm'],
            ['title' => 'Прием свинцовых пластин - Вывоз свинца в Москве, цена за 1 тонны 🚚', 'h1' => 'Прием свинцовых пластин', 'id' => 47, 'slug' => 'priem-svinczovyix-plastin'],
            ['title' => 'Прием кабельного свинца (неочищенного) - От 1 тонны дорого в Москве 🏙️', 'h1' => 'Кабельный свинец (не очищенный от гдурона)', 'id' => 48, 'slug' => 'kabelnyij-svinecz-ne-ochishhennyij-ot-gudrona'],
            ['title' => 'Прием свина переплав - Прием от 1 тонны лома свинца в Москве 🏙️', 'h1' => 'Прием свинца «переплав»', 'id' => 49, 'slug' => 'priem-svincza-pereplav'],
            ['title' => 'Прием свинца в телефонном кабеле от 1 тонны - Цена выше рыночной', 'h1' => 'Прием свинца в телефонном кабеле', 'id' => 50, 'slug' => 'priem-svincza-v-telefonnom-kabele'],
            ['title' => 'Прием шиномонтажных свинцовых грузиков - Сдать балансировочные грузики в Москве 🏙️', 'h1' => 'Прием шиномонтажных свинцовых грузиков', 'id' => 51, 'slug' => 'priem-shinomontazhnyix-gruzikov'],
            ['title' => 'Прием свинцовой проволоки на лом - Дорого от 1 тонны 💲', 'h1' => 'Прием свинцовой проволоки', 'id' => 52, 'slug' => 'priem-svinczovoj-provoloki']
        ];

        $data4 = [
            ['title' => 'Прием марочной латуни Л-63 от 1 тонны в Москве - Цена на сегодня 💲', 'h1' => 'Прием марочной латуни Л-63', 'id' => 53, 'slug' => 'priem-marochnoj-latuni-l-63'],
            ['title' => 'Прием марочной латуни Л-90 - Лучшая цена на сегодня в Москве 💲', 'h1' => 'Прием марочной латуни Л-90', 'id' => 54, 'slug' => 'priem-marochnoj-latuni-l-90'],
            ['title' => 'Прием латуни ЛС-59 - Прием от 1 тонны латуни в Москве 💲', 'h1' => 'Прием латуни ЛС-59', 'id' => 55, 'slug' => 'priem-latuni-ls-59'],
            ['title' => 'Прием микс латуни - Дорого сдать несортовой лом MIX в Москве 💲', 'h1' => 'Прием микс латуни (несортовая)', 'id' => 56, 'slug' => 'priem-miks-latuni'],
            ['title' => 'Прием кусковой латуни от 1 тонны в Москве - Цена на латунь сегодня 💲', 'h1' => 'Прием кусковой латуни', 'id' => 57, 'slug' => 'priem-kuskovoj-latuni'],
            ['title' => 'Прием латунных радиаторов - Сдать по лучшей цене на сегодня в Москве 💲', 'h1' => 'Прием латунных радиаторов', 'id' => 58, 'slug' => 'priem-latunnyix-radiatorov'],
            ['title' => 'Прием латунной стружки - Цена приема за тонну на сегодня в Москве 💲', 'h1' => 'Прием латунной стружки', 'id' => 59, 'slug' => 'priem-latunnoj-struzhki'],
        ];

        $data5 = [
            ['title' => 'Прием высоколегированной стали (15-99% Ni) - Прием от 1 тонны - Сдать дорого в Москве 💲', 'h1' => 'Прием высоколегированной стали (15-99% Ni)', 'id' => 60, 'slug' => 'priem-vyisokolegirovannoj-stali-15-99-ni'],
            ['title' => 'Прием габаритной нержавейки 10% - Прием от 1 тонны - Цена за тонну на сегодня 💲', 'h1' => 'Прием нержавейка 10% (габарит)', 'id' => 61, 'slug' => 'priem-nerzhavejka-10-gabarit'],
            ['title' => 'Прием нержавейки 10% (не габарит.) - Прием от 1 тонны - Дорого за тонну лома на сегодня 💲', 'h1' => 'Прием нержавейки 10% (не габарит)', 'id' => 62, 'slug' => 'priem-nerzhavejki-10-ne-gabarit'],
            ['title' => 'Прием нержавейки 8% (габарит) - Сдать дорого за тонны в Москве 💲', 'h1' => 'Прием нержавейки 8% (габарит)', 'id' => 63, 'slug' => 'priem-nerzhavejki-8-gabarit'],
            ['title' => 'Прием нержавейки 8% (не габарит) - цена приема за тонны в Москве 💲', 'h1' => 'Прием нержавейки 8% (не габарит)', 'id' => 64, 'slug' => 'priem-nerzhavejki-8-ne-gabarit'],
            ['title' => 'Прием стружки нержавейки - Прием от 1 тонны стружки нержавеющей стали 💲', 'h1' => 'Прием стружки нержавейки', 'id' => 65, 'slug' => 'priem-struzhki-nerzhavejki'],
            ['title' => 'Прием низколегированной стали (1-6% Ni) - Сдать от 1 тонны в Москве 🏙️', 'h1' => 'Прием низколегированной стали (1-6% Ni)', 'id' => 66, 'slug' => 'lom-stali-nizkolegirovannoj-1-6-ni']
        ];

        $data6 = [
            ['title' => 'Прием стали негабаритной (лом 5А) в Москве - Сколько стоит сталь негабаритная (лом 5А) за 1 тонну - Сдать с вывозом 💲', 'h1' => 'Прием стали негабаритной (лом 5А)', 'id' => 67, 'slug' => 'priem-stali-5a'],
            ['title' => 'Прием стали габаритной 3А/3А1 в Москве - Сколько стоит сталь габаритной 3А/3А1 за 1 тонну - Сдать с вывозом 💲', 'h1' => 'Прием стали габаритной 3А/3А1 ', 'id' => 68, 'slug' => 'priem-stali-3a-3a1'],
            ['title' => 'Прием стальной проволки в Москве - Сколько стоит стальная проволка за 1 тонну - Сдать с вывозом 💲', 'h1' => 'Прием стальной проволоки', 'id' => 69, 'slug' => 'priem-stalnoj-provoloki'],
            ['title' => 'Прием стальной стружки в Москве - Сколько стоит стружка за 1 тонны, сдать с вывозом 💲', 'h1' => 'Прием стальной стружки 16А', 'id' => 70, 'slug' => 'stalnaya-struzhka-16-a'],
        ];

        $data7 = [
            ['title' => 'Прием габаритного чугуна 17А - Прием с вывозом в Москве 💲', 'h1' => 'Габаритный чугун 17А', 'id' => 71, 'slug' => 'gabaritnyij-chugun-17a'],
            ['title' => 'Прием  негабаритного чугуна 20А дорого за 1 тонну в Москве 💲', 'h1' => 'Лом негабаритного чугуна 20А', 'id' => 72, 'slug' => 'lom-negabaritnogo-chuguna-20a'],
            ['title' => 'Прием черного металла 22А - Сдать с вывозом выгодно в Москве 💲', 'h1' => 'Прием черного металла 22А', 'id' => 73, 'slug' => 'priem-chernogo-metalla-22a'],
            ['title' => 'Прием лома 12А (жесть/оцинковка) - Цена за тонну на сегодня 💲', 'h1' => 'Прием лома 12А (жесть/оцинковка)', 'id' => 74, 'slug' => '12a-zhest-oczinkovka'],
        ];

        $data8 = [
            ['title' => 'Прием лома габаритного 3Арм - Сдать с вывозом в Москве 🏙️', 'h1' => 'Прием лома габаритного 3Арм', 'id' => 75, 'slug' => 'priem-loma-gabaritnogo-3arm'],
            ['title' => 'Прием лома негабаритного 5Арм - Сдать с вывозом металлолом в Москве 🏙️', 'h1' => 'Прием лома негабаритного 5Арм', 'id' => 76, 'slug' => 'priem-loma-negabaritnogo-5arm'],
            ['title' => 'Сдать лом 13А (стальные канаты, проволока, арматура) в Москве - Цены на металлолом 💲', 'h1' => 'Лом 13А (стальные канаты, проволока, арматура)', 'id' => 77, 'slug' => 'lom-13a-stalnyie-kanatyi-provoloka-armatura'],
            ['title' => 'Прием черного металла 4А ( мелкий лом ) - Лучшая цена на сегодня в Москве 💲', 'h1' => 'Прием черного металла 4А (мелкий лом)', 'id' => 78, 'slug' => 'priem-chernogo-metalla-4a'],
            ['title' => 'Прием тонкостенного металлолома 12А1 - Сдать с вывозом в Москве 🏙️', 'h1' => 'Прием тонкостенного металлолома 12А1', 'id' => 79, 'slug' => 'priem-tonkostennogo-metalloloma-12a1'],
            ['title' => 'Прием стружки черного металлолома - Сдать лом с вывозом в Москве 🏙️', 'h1' => 'Прием стружки черного металлолома', 'id' => 80, 'slug' => 'priem-struzhki-chernogo-metalloloma'],
            ['title' => 'Прием арматуры на металлолом - Сдать с вывозом, цены на лом в Москве на арматуру 💲', 'h1' => 'Прием арматуры', 'id' => 81, 'slug' => 'priem-armaturyi'],
            ['title' => 'Прием жести - Лучшая цена на жесть за 1 тонну в Москве  🏙️', 'h1' => 'Прием жести', 'id' => 82, 'slug' => 'priem-zhesti'],
        ];

        $data9 = [
            ['title' => 'Прием титана ВТ1-0 - Вывоз от 1 тонны в Москве 🏙️', 'h1' => 'Прием титана ВТ1-0', 'id' => 83, 'slug' => 'priem-titana-vt1-0'],
            ['title' => 'Прием несортового титана (микс) - Максимальная цена за титан MIX в Москве за тонну 💲', 'h1' => 'Прием несортового титана (микс)', 'id' => 84, 'slug' => 'priem-nesortovogo-titana-miks'],
            ['title' => 'Прием стружки титана - Прием лома стружки от 1 тонны в Москве 🏙️', 'h1' => 'Стружка титана', 'id' => 85, 'slug' => 'struzhka-titana'],
            ['title' => 'Прием Волфрамовой проволки - Вывоз от 1 тонны в Москве 🏙️', 'h1' => 'Вольфрамовая проволока', 'id' => 86, 'slug' => 'volfram-provoloka'],
            ['title' => 'Прием лома вольфрамовых электродов - Скупка электродов в Москве 🏙️', 'h1' => 'Прием лома вольфрамовых электродов', 'id' => 87, 'slug' => 'lom-volframovyix-elektrodov'],
            ['title' => 'Прием мельхиора МН-19 с вывозом в Москве - Цена на сегодня 💲', 'h1' => 'Прием мельхиора МН-19', 'id' => 88, 'slug' => 'priem-melxiora-mn-19'],
            ['title' => 'Прием мельхиора МН–40 от 1 тонны, лучшая цена в Москве 💲', 'h1' => 'Прием мельхиора МН–40', 'id' => 89, 'slug' => 'priem-melxiora-mn–40'],
            ['title' => 'Сдать сплав МНЦ 15-20 - Прием от 1 тонны дороже рынка по Москве 💲', 'h1' => 'Прием сплава МНЦ 15-20', 'id' => 90, 'slug' => 'priem-splava-mncz-15-20'],
            ['title' => 'Прием баббита Б-83 - Цена скупки на сегодня в Москве 🏙️', 'h1' => 'Прием баббита Б-83', 'id' => 91, 'slug' => 'priem-babbita-b-83'],
            ['title' => 'Сдать баббит «самоплав» дорого в пункт приема 💲', 'h1' => 'Прием баббита «самоплав»', 'id' => 92, 'slug' => 'priem-babbita-samoplav'],
            ['title' => 'Прием баббита Б-16 - Цена за 1 тонну в Москве 💲', 'h1' => 'Прием баббита Б-16', 'id' => 93, 'slug' => 'priem-babbita-b-16'],
            ['title' => 'Прием молибдена печного - Максимальная цена на сегодня в Москве 🏙️', 'h1' => 'Прием молибдена печного', 'id' => 94, 'slug' => 'lom-molibdena-pechnogo'],
            ['title' => 'Прием проката из молибдена - Сдать от 1 тонны в Москве 🏙️', 'h1' => 'Прием проката из молибдена', 'id' => 95, 'slug' => 'prokat-iz-molibdena'],
            ['title' => 'Прием лома ВК-ТК - Сдать дорого о 1 тонны в Москве 🏙️', 'h1' => 'Прием лома ВК-ТК', 'id' => 96, 'slug' => 'priem-loma-vk-tk'],
        ];

        $data10 = [
            ['title' => 'Прием медного кабеля в Москве - Цена на медные провода за 1 тонну 💲', 'h1' => 'Прием медного кабеля', 'id' => 97, 'slug' => 'priem-mednogo-kabelya'],
            ['title' => 'Прием силового кабеля от 1 тонны с вывозом в Москве 🏙️', 'h1' => 'Прием силового кабеля', 'id' => 98, 'slug' => 'priem-silovogo-kabelya'],
            ['title' => 'Прием телефонного кабеля - Сдать дорого в Москве 💲', 'h1' => 'Прием телефонного кабеля', 'id' => 99, 'slug' => 'priem-telefonnogo-kabelya'],
            ['title' => 'Прием компьютерного кабеля - Дорого, от 1 тонны в Москве  🏙️', 'h1' => 'Прием компьютерного кабеля', 'id' => 100, 'slug' => 'priem-kompyuternogo-kabelya'],
            ['title' => 'Прием алюминиевого кабеля и провода в Москве - Цены за 1 тонны кабеля с алюминиевой жилой 💲', 'h1' => 'Прием алюминиевого кабеля', 'id' => 101, 'slug' => 'priem-alyuminievogo-kabelya'],
            ['title' => 'Прием свинцового кабеля в Москве - Лучшая цена за 1 тонны лома 💲', 'h1' => 'Прием свинцового кабеля', 'id' => 102, 'slug' => 'svinczovyij-kabel'],
            ['title' => 'Прием монтажного кабель на лом - Прием от 1 тонны, сдать дорого 💲', 'h1' => 'Прием монтажного кабеля', 'id' => 103, 'slug' => 'priem-montazhnogo-kabelya'],
            ['title' => 'Прием обмоточного кабеля - Прием с вывозом в Москве 🏙️', 'h1' => 'Прием обмоточного кабеля', 'id' => 104, 'slug' => 'priem-obmotochnogo-kabelya'],
            ['title' => 'Прием слитых аккумуляторов - Цены на сегодня за АКБ в Москве 💲', 'h1' => 'Прием слитых аккумуляторов', 'id' => 105, 'slug' => 'priem-slityix-akkumulyatorov'],
            ['title' => 'Прием гелевых аккумуляторов - Сдать АКБ в Москве 🏙️ за наличные 💲', 'h1' => 'Прием гелевых аккумуляторов', 'id' => 106, 'slug' => 'priem-gelevyix-akkumulyatorov'],
            ['title' => 'Прием автомобильных аккумуляторов б/у c вывозом - Цены за тонны 💲', 'h1' => 'Прием автомобильных аккумуляторов', 'id' => 107, 'slug' => 'priem-avtomobilnyix-akkumulyatorov'],
            ['title' => 'Прием свинцовых аккумуляторов в Москве 🏙️ - Сдать свинцовые АКБ за наличные с вывозом 💲', 'h1' => 'Прием свинцовых аккумуляторов', 'id' => 108, 'slug' => 'priem-svinczovyix-akkumulyatorov'],
            ['title' => 'Прием тяговых аккумуляторов за деньги 💲 - Дорого сдать тяговые АКБ от 1шт. в Москве 🏙️', 'h1' => 'Прием тяговых аккумуляторов', 'id' => 109, 'slug' => 'priem-tyagovyix-akkumulyatorov'],
            ['title' => 'Прием аккумуляторов от ИБП - Сдать АКБ от UPS по цене за 1 тонну в Москве 💲', 'h1' => 'Прием аккумуляторов от ИБП', 'id' => 110, 'slug' => 'priem-akkumulyatorov-ot-ibp'],
            ['title' => 'Прием эбонитовых аккумуляторов - От 1 тонны, сдать с вывозом эбонитовые АКБ в Москве 🏙️ - Сдать дорого 💲', 'h1' => 'Прием эбонитовых аккумуляторов', 'id' => 111, 'slug' => 'priem-ebonitovyix-akkumulyatorov'],
            ['title' => 'Прием щелочных аккумуляторов (ТНЖ, НК) от 1 тонны в Москве 💲 - Сдать щелочные аккумуляторы в Москве 🏙️', 'h1' => 'Прием щелочных аккумуляторов (ТНЖ, НК)', 'id' => 112, 'slug' => 'priem-shhelochnyix-akkumulyatorov'],
            ['title' => 'Прием трансформаторов с медной шиной - Сдать дорого в Москве 💲', 'h1' => 'Прием трансформаторов с медной шиной', 'id' => 113, 'slug' => 'priem-transformatorov-s-mednoj-shinoj'],
            ['title' => 'Прием трансформаторов с алюминиевой шиной - Сдать трансформатор дорого - Цена приема сегодня 💲', 'h1' => 'Прием трансформаторов с алюминиевой шиной', 'id' => 114, 'slug' => 'priem-transformatorov-s-alyuminievoj-shinoj'],
            ['title' => 'Прием электрогенераторов на лом - Прием с вывозом, цены на сегодня 💲', 'h1' => 'Прием электрогенераторов', 'id' => 115, 'slug' => 'priem-loma-elektrogeneratoryi'],
            ['title' => 'Прием стартеров дорого 💲 - Сдать стартер на металлолом в Москве 🏙️', 'h1' => 'Прием стартеров', 'id' => 116, 'slug' => 'priem-loma-starterov'],
            ['title' => 'Прием компрессоров б.у на лом - Сдать компрессора по лучшей цене в Москве 💲', 'h1' => 'Прием компрессоров', 'id' => 117, 'slug' => 'priem-loma-kompressoryi'],
            ['title' => 'Прием никеля в Москве - Дорого сдать никель от 1 тонны за наличные 💲', 'h1' => 'Прием никеля', 'id' => 118, 'slug' => 'priem-lom-nikelya'],
            ['title' => 'Прием силумина - Скупка по высокой цене в Москве, прайс-лист на силумин 💲', 'h1' => 'Прием силумина', 'id' => 119, 'slug' => 'priem-silumina'],
            ['title' => 'Прием припоя дорого - Сдать припой от 1 тонны в Москве 🏙️', 'h1' => 'Прием припоя', 'id' => 120, 'slug' => 'priem-lom-pripoya'],
            ['title' => 'Прием олова в Москве - Сдать лом по лучшей цене за 1 тонны 💲', 'h1' => 'Прием олова', 'id' => 121, 'slug' => 'priem-lom-olova']
        ];

        foreach ($data as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        foreach ($data1 as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        foreach ($data2 as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        foreach ($data3 as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        foreach ($data4 as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        foreach ($data5 as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        foreach ($data6 as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        foreach ($data7 as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        foreach ($data8 as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        foreach ($data9 as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        foreach ($data10 as $item) {
            $slug = new Slug();
            $market = Product::find($item['id']);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $item['h1'];
            $slug->title = $item['title'];
            $market->slug()->save($slug);
            $content_id++;
        }

        $data11 = [
            ['slug' => 'priem-metalla-v-czao'],
            ['slug' => 'priem-metalla-v-sao'],
            ['slug' => 'priem-metalla-v-svao'],
            ['slug' => 'priem-metalla-v-vao'],
            ['slug' => 'priem-metalla-v-yvao'],
            ['slug' => 'priem-metalla-v-yao'],
            ['slug' => 'priem-metalla-v-yzao'],
            ['slug' => 'priem-metalla-v-zao'],
            ['slug' => 'priem-metalla-v-szao'],
            ['slug' => 'priem-metalla-v-zelao'],
            ['slug' => 'priem-metalla-v-tao'],
            ['slug' => 'priem-metalla-v-nao'],
            ['slug' => 'priem-metalla-v-aprelevke'],
            ['slug' => 'priem-metalla-v-balashixe'],
            ['slug' => 'priem-metalla-v-beloozyorskom'],
            ['slug' => 'priem-metalla-v-bronniczax'],
            ['slug' => 'priem-metalla-v-veree'],
            ['slug' => 'priem-metalla-v-vidnom'],
            ['slug' => 'priem-metalla-v-volokolamske'],
            ['slug' => 'priem-metalla-v-voskresenske'],
            ['slug' => 'priem-metalla-v-visokovske'],
            ['slug' => 'priem-metalla-v-goliczyino'],
            ['slug' => 'priem-metalla-v-dedovsk'],
            ['slug' => 'priem-metalla-v-dzerzhinskom'],
            ['slug' => 'priem-metalla-v-dmitrove'],
            ['slug' => 'priem-metalla-v-domodedovo'],
            ['slug' => 'priem-metalla-v-drezne'],
            ['slug' => 'priem-metalla-v-dubne'],
            ['slug' => 'priem-metalla-v-egorevske'],
            ['slug' => 'priem-metalla-v-zhukovskom'],
            ['slug' => 'priem-metalla-v-zaraiske'],
            ['slug' => 'priem-metalla-v-zvenigorode'],
            ['slug' => 'priem-metalla-v-ivanteevke'],
            ['slug' => 'priem-metalla-v-istre'],
            ['slug' => 'priem-metalla-v-kashire'],
            ['slug' => 'priem-metalla-v-klinu'],
            ['slug' => 'priem-metalla-v-kolomne'],
            ['slug' => 'priem-metalla-v-koroleve'],
            ['slug' => 'priem-metalla-v-krasnoarmeiske'],
            ['slug' => 'priem-metalla-v-krasnogorske'],
            ['slug' => 'priem-metalla-v-krasnozovodske'],
            ['slug' => 'priem-metalla-v-krasnozamenske'],
            ['slug' => 'priem-metalla-v-kubinke'],
            ['slug' => 'priem-metalla-v-kurovskom'],
            ['slug' => 'priem-metalla-v-likino-dulevo'],
            ['slug' => 'priem-metalla-v-lobne'],
            ['slug' => 'priem-metalla-v-losino-petrovskom'],
            ['slug' => 'priem-metalla-v-lukhovicskh'],
            ['slug' => 'priem-metalla-v-litkarino'],
            ['slug' => 'priem-metalla-v-lubercakh'],
            ['slug' => 'priem-metalla-v-mojaiske'],
            ['slug' => 'priem-metalla-v-mitishakh'],
            ['slug' => 'priem-metalla-v-naro-fominske'],
            ['slug' => 'priem-metalla-v-noginske'],
            ['slug' => 'priem-metalla-v-odincovo'],
            ['slug' => 'priem-metalla-v-ozerakh'],
            ['slug' => 'priem-metalla-v-orkhovo-zuevo'],
            ['slug' => 'priem-metalla-v-pavloskom-posade'],
            ['slug' => 'priem-metalla-v-peresvete'],
            ['slug' => 'priem-metalla-v-podolske'],
            ['slug' => 'priem-metalla-v-protvino'],
            ['slug' => 'priem-metalla-v-pushkine'],
            ['slug' => 'priem-metalla-v-pushino'],
            ['slug' => 'priem-metalla-v-remenskom'],
            ['slug' => 'priem-metalla-v-reutove'],
            ['slug' => 'priem-metalla-v-roshale'],
            ['slug' => 'priem-metalla-v-ruze'],
            ['slug' => 'priem-metalla-v-sergievom-posade'],
            ['slug' => 'priem-metalla-v-serpukhove'],
            ['slug' => 'priem-metalla-v-solnechnogorke'],
            ['slug' => 'priem-metalla-v-staroi-kupavne'],
            ['slug' => 'priem-metalla-v-stupino'],
            ['slug' => 'priem-metalla-v-taldome'],
            ['slug' => 'priem-metalla-v-fryazino'],
            ['slug' => 'priem-metalla-v-khimkakh'],
            ['slug' => 'priem-metalla-v-khotkovo'],
            ['slug' => 'priem-metalla-v-chernogolovke'],
            ['slug' => 'priem-metalla-v-chekhove'],
            ['slug' => 'priem-metalla-v-shature'],
            ['slug' => 'priem-metalla-v-shelkovo'],
            ['slug' => 'priem-metalla-v-elektrogorske'],
            ['slug' => 'priem-metalla-v-elektrostali'],
            ['slug' => 'priem-metalla-v-elektroulgyakh'],
            ['slug' => 'priem-metalla-v-yakhmore'],
            ['slug' => 'priem-metalla-v-rajone-akademichesky'],
            ['slug' => 'priem-metalla-v-rajone-alekseevskij'],
            ['slug' => 'priem-metalla-v-rajone-altufevskij'],
            ['slug' => 'priem-metalla-v-rajone-arbat'],
            ['slug' => 'priem-metalla-v-rajone-aeroport'],
            ['slug' => 'priem-metalla-v-rajone-babushkinskij'],
            ['slug' => 'priem-metalla-v-rajone-basmannyij'],
            ['slug' => 'priem-metalla-v-rajone-begovoj'],
            ['slug' => 'priem-metalla-v-rajone-beskudnikovskij'],
            ['slug' => 'priem-metalla-v-rajone-bibirevo'],
            ['slug' => 'priem-metalla-v-rajone-biryulevo'],
            ['slug' => 'priem-metalla-v-rajone-bogorodskoe'],
            ['slug' => 'priem-metalla-v-rajone-brateevo'],
            ['slug' => 'priem-metalla-v-rajone-butovo-severnoe'],
            ['slug' => 'priem-metalla-v-rajone-butovo-yuzhnoe'],
            ['slug' => 'priem-metalla-v-rajone-butyirskij'],
            ['slug' => 'priem-metalla-v-rajone-veshnyaki'],
            ['slug' => 'priem-metalla-v-rajone-vnukovo'],
            ['slug' => 'priem-metalla-v-rajone-vojkovskij'],
            ['slug' => 'priem-metalla-v-rajone-vostochnyij'],
            ['slug' => 'priem-metalla-v-rajone-vyixino-zhulebino'],
            ['slug' => 'priem-metalla-v-rajone-gagarinskij'],
            ['slug' => 'priem-metalla-v-rajone-golovinskij'],
            ['slug' => 'priem-metalla-v-rajone-golyanovo'],
            ['slug' => 'priem-metalla-v-rajone-danilovskij'],
            ['slug' => 'priem-metalla-v-rajone-degunino-vostochnoe'],
            ['slug' => 'priem-metalla-v-rajone-degunino-zapadnoe'],
            ['slug' => 'priem-metalla-v-rajone-dmitrovskij'],
            ['slug' => 'priem-metalla-v-rajone-donskoj'],
            ['slug' => 'priem-metalla-v-rajone-dorogomilovo'],
            ['slug' => 'priem-metalla-v-rajone-zamoskvoreche'],
            ['slug' => 'priem-metalla-v-rajone-zyuzino'],
            ['slug' => 'priem-metalla-v-rajone-butovo'],
            ['slug' => 'priem-metalla-v-rajone-zyablikovo'],
            ['slug' => 'priem-metalla-v-rajone-ivanovskoe'],
            ['slug' => 'priem-metalla-v-rajone-izmajlovo'],
            ['slug' => 'priem-metalla-v-rajone-kapotnya'],
            ['slug' => 'priem-metalla-v-rajone-konkovo'],
            ['slug' => 'priem-metalla-v-rajone-koptevo'],
            ['slug' => 'priem-metalla-v-rajone-kosino-uxtomskij'],
            ['slug' => 'priem-metalla-v-rajone-kotlovka'],
            ['slug' => 'priem-metalla-v-rajone-krasnoselskij'],
            ['slug' => 'priem-metalla-v-rajone-kryilatskoe'],
            ['slug' => 'priem-metalla-v-rajone-kryukovo'],
            ['slug' => 'priem-metalla-v-rajone-kuzminki'],
            ['slug' => 'priem-metalla-v-rajone-kunczevo'],
            ['slug' => 'priem-metalla-v-rajone-kurkino'],
            ['slug' => 'priem-metalla-v-rajone-levoberezhnyij'],
            ['slug' => 'priem-metalla-v-rajone-lefortovo'],
            ['slug' => 'priem-metalla-v-rajone-lianozovo'],
            ['slug' => 'priem-metalla-v-rajone-lomonosovskij'],
            ['slug' => 'priem-metalla-v-rajone-losinoostrovskij'],
            ['slug' => 'priem-metalla-v-rajone-lyublino'],
            ['slug' => 'priem-metalla-v-rajone-marfino'],
            ['slug' => 'priem-metalla-v-rajone-marina-roshha'],
            ['slug' => 'priem-metalla-v-rajone-marino'],
            ['slug' => 'priem-metalla-v-rajone-matushkino'],
            ['slug' => 'priem-metalla-v-rajone-medvedkovo-severnoe'],
            ['slug' => 'priem-metalla-v-rajone-medvedkovo-yuzhnoe'],
            ['slug' => 'priem-metalla-v-rajone-metrogorodok'],
            ['slug' => 'priem-metalla-v-rajone-meshhanskij'],
            ['slug' => 'priem-metalla-v-rajone-mitino'],
            ['slug' => 'priem-metalla-v-rajone-mozhajskij'],
            ['slug' => 'priem-metalla-v-rajone-molzhaninovskij'],
            ['slug' => 'priem-metalla-v-rajone-moskvoreche-saburovo'],
            ['slug' => 'priem-metalla-v-rajone-nagatino-sadovniki'],
            ['slug' => 'priem-metalla-v-rajone-nagatinskij-zaton'],
            ['slug' => 'priem-metalla-v-rajone-nagornyij'],
            ['slug' => 'priem-metalla-v-rajone-nekrasovka'],
            ['slug' => 'priem-metalla-v-rajone-nizhegorodskij'],
            ['slug' => 'priem-metalla-v-rajone-novogireevo'],
            ['slug' => 'priem-metalla-v-rajone-novokosino'],
            ['slug' => 'priem-metalla-v-rajone-novo-peredelkino'],
            ['slug' => 'priem-metalla-v-rajone-obruchevskij'],
            ['slug' => 'priem-metalla-v-rajone-orexovo-borisovo-severnoe'],
            ['slug' => 'priem-metalla-v-rajone-orexovo-borisovo-yuzhnoe'],
            ['slug' => 'priem-metalla-v-rajone-ostankinskij'],
            ['slug' => 'priem-metalla-v-rajone-otradnoe'],
            ['slug' => 'priem-metalla-v-rajone-ochakovo-matveevskoe'],
            ['slug' => 'priem-metalla-v-rajone-perovo'],
            ['slug' => 'priem-metalla-v-rajone-pechatniki'],
            ['slug' => 'priem-metalla-v-rajone-pokrovskoe-streshnevo'],
            ['slug' => 'priem-metalla-v-rajone-preobrazhenskoe'],
            ['slug' => 'priem-metalla-v-rajone-presnenskij'],
            ['slug' => 'priem-metalla-v-rajone-prospekt-vernadskogo'],
            ['slug' => 'priem-metalla-v-rajone-ramenki'],
            ['slug' => 'priem-metalla-v-rajone-rostokino'],
            ['slug' => 'priem-metalla-v-rajone-ryazanskij'],
            ['slug' => 'priem-metalla-v-rajone-savyolki'],
            ['slug' => 'priem-metalla-v-rajone-savyolovskij'],
            ['slug' => 'priem-metalla-v-rajone-sviblovo'],
            ['slug' => 'priem-metalla-v-rajone-severnyij'],
            ['slug' => 'priem-metalla-v-rajone-silino'],
            ['slug' => 'priem-metalla-v-rajone-sokol'],
            ['slug' => 'priem-metalla-v-rajone-sokolinaya-gora'],
            ['slug' => 'priem-metalla-v-rajone-sokolniki'],
            ['slug' => 'priem-metalla-v-rajone-solnczevo'],
            ['slug' => 'priem-metalla-v-rajone-staroe-kryukovo'],
            ['slug' => 'priem-metalla-v-rajone-strogino'],
            ['slug' => 'priem-metalla-v-rajone-taganskij'],
            ['slug' => 'priem-metalla-v-rajone-tverskoj'],
            ['slug' => 'priem-metalla-v-rajone-tekstilshhiki'],
            ['slug' => 'priem-metalla-v-rajone-tyoplyij-stan'],
            ['slug' => 'priem-metalla-v-rajone-timiryazevskij'],
            ['slug' => 'priem-metalla-v-rajone-troparyovo-nikulino'],
            ['slug' => 'priem-metalla-v-rajone-tushino-severnoe'],
            ['slug' => 'priem-metalla-v-rajone-tushino-yuzhnoe'],
            ['slug' => 'priem-metalla-v-rajone-filyovskij-park'],
            ['slug' => 'priem-metalla-v-rajone-fili-davyidkovo'],
            ['slug' => 'priem-metalla-v-rajone-xamovniki'],
            ['slug' => 'priem-metalla-v-rajone-xovrino'],
            ['slug' => 'priem-metalla-v-rajone-xoroshyovo-mnevniki'],
            ['slug' => 'priem-metalla-v-rajone-xoroshyovskij'],
            ['slug' => 'priem-metalla-v-rajone-czariczyino'],
            ['slug' => 'priem-metalla-v-rajone-cheryomushki'],
            ['slug' => 'priem-metalla-v-rajone-chertanovo-severnoe'],
            ['slug' => 'priem-metalla-v-rajone-chertanovo-czentralnoe'],
            ['slug' => 'priem-metalla-v-rajone-chertanovo-yuzhnoe'],
            ['slug' => 'priem-metalla-v-rajone-shhukino'],
            ['slug' => 'priem-metalla-v-rajone-yuzhnoportovyij'],
            ['slug' => 'priem-metalla-v-rajone-yakimanka'],
            ['slug' => 'priem-metalla-v-rajone-yaroslavskij'],
            ['slug' => 'priem-metalla-v-rajone-yasenevo'],
        ];

        $titleRandomizer1 = [
            'Вывоз металлолома в Москве и МО 🚚',
            'Прием и вывоз металла в Москве 🚚',
            'Приемка металлолома с самовывозом в Москве и МО 🚚',
            'Приемка черного и цветного металла с самовывозом 🚚',
            'Приемка черного и цветного металлолома с самовывозом 🚚',
            'Приемка черного и цветного лома с самовывозом 🚚',
            'Приемка черного и цветного металлолома в Москве 🚚',
            'Сдать металл в Москве дорого 🚚',
        ];

        $titleRandomizer2 = [
            'Прием черного лома дорого 💲',
            'Прием черного металлолома дорого 💲',
            'Прием черного металла дорого 💲',
            'Прием чермета дорого 💲',
            'Прием цветмета дорого 💲',
            'Сдать металлолом в Москве 💲',
            'Сдать цветной металлолом в Москве 💲',
            'Сдать лом в Москве и МО 💲',
        ];

        foreach ($data11 as $key => $item) {
            $slug = new Slug();
            $region = Regions::find($key + 1);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->title = 'Примем металлолом в '.$region['dative_name'].' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)];
            $slug->h1 = 'Примем металлолом в '.$region['dative_name'];
            $region->slug()->save($slug);
            $content_id++;
        }

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
        $data12 = [
            ['slug' => 'demontazh-metallokonstruktsiy'],
            ['slug' => 'demontazh-angarov'],
            ['slug' => 'demontazh-garazhey'],
            ['slug' => 'demontazh-kranov'],
            ['slug' => 'demontazh-kotelnikh'],
            ['slug' => 'demontazh-torgovikh-pavilonov'],
            ['slug' => 'demontazh-skladov'],
            ['slug' => 'demontazh-zavodov'],
            ['slug' => 'demontazh-tseha'],
            ['slug' => 'demontazh-utilizatsiya-spetstekhniki'],

            ['slug' => 'demontazh-kassovihk-komnat'],
            ['slug' => 'demontazh-bankovskih-khranilish'],
            ['slug' => 'demontazh-kran-balok'],
            ['slug' => 'demontazh-kozlovikh-kranov'],
            ['slug' => 'demontazh-mostovikh-kranov'],
            ['slug' => 'demontazh-bashenikh-kranov'],
            ['slug' => 'demontazh-avtokranov'],
            ['slug' => 'demontazh-gruzovikov'],
            ['slug' => 'demontazh-eskavatorov'],
            ['slug' => 'demontazh-buldozerov'],
            ['slug' => 'demontazh-traktorov'],
            ['slug' => 'demontazh-avtocistern'],
            ['slug' => 'demontazh-vagonov'],
            ['slug' => 'demontazh-ventilacii'],
            ['slug' => 'demontazh-rezervov'],
            ['slug' => 'demontazh-stankov'],
            ['slug' => 'demontazh-liftov'],
            ['slug' => 'demontazh-elektrodvigatelei'],
            ['slug' => 'demontazh-reduktorov'],
            ['slug' => 'demontazh-konteinerov'],
            ['slug' => 'demontazh-seifov'],
            ['slug' => 'demontazh-vivisok'],
            ['slug' => 'demontazh-trub'],
            ['slug' => 'demontazh-kabelya'],
            ['slug' => 'demontazh-zaborov'],
            ['slug' => 'demontazh-vishek'],
            ['slug' => 'demontazh-vodonapornoy-bashni'],
            ['slug' => 'demontazh-bitovok'],
            ['slug' => 'demontazh-kungov'],
            ['slug' => 'demontazh-podyomnikov'],
            ['slug' => 'demontazh-krishi'],
            ['slug' => 'demontazh-dimovikh-trub'],
            ['slug' => 'demontazh-lestnic'],
        ];

        foreach ($data12 as $key => $item) {
            $slug = new Slug();
            $dismantling = Dismantling::find($key + 1);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $dismantling->title;
            $slug->title = $dismantling->title.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)];;
            $dismantling->slug()->save($slug);
            $content_id++;
        }

        $titleRandomizer1 = [
            'Металла, Металлолома, Черного лома 🚚',
            'Актуальные цены на металлолом 📈',
        ];
        $titleRandomizer2 = [
            'Высокая цена по всей Москве и МО 💲',
            'Высокая цена на Московском рынке 💲',
            'Цветного металла, дорого в Москве 💲',
            'Цветного металлолома, дорого в Москве 💲',
        ];

        $data13 = [
            ['slug' => 'vyivoz-trub-na-metalllolom'],
            ['slug' => 'vyivoz-avto-na-metalllolom'],
            ['slug' => 'vyivoz-chuguna-na-metalllolom'],
            ['slug' => 'vyivoz-stailnova-loma-na-metalllolom'],
            ['slug' => 'vyivoz-armaturi-na-metalllolom'],
            ['slug' => 'vyivoz-jeleza-na-metalllolom'],
            ['slug' => 'vyivoz-bu-balonov-na-metalllolom'],
            ['slug' => 'vyivoz-bytovogo-metalllolom'],
            ['slug' => 'vyivoz-aluminia-na-metalllolom'],
            ['slug' => 'vyivoz-medi-na-metalllolom'],
            ['slug' => 'vyivoz-elektrodvigateley-na-metalllolom'],
            ['slug' => 'vyivoz-svinca-na-metalllolom'],
            ['slug' => 'vyivoz-nerjaveiki-na-metalllolom'],
            ['slug' => 'vyivoz-latuni-na-metalllolom'],
            ['slug' => 'vyivoz-magnia-na-metalllolom'],
            ['slug' => 'vyivoz-bronzi-na-metalllolom'],
        ];

        foreach ($data13 as $key => $item) {
            $slug = new Slug();
            $scrapExport = ScrapExport::find($key + 1);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $scrapExport->title;
            $slug->title = $scrapExport->title.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)];;
            $scrapExport->slug()->save($slug);
            $content_id++;
        }

        $data14 = [
            ['slug' => 'demontazh-metalloloma-v-czao'],
            ['slug' => 'demontazh-metalloloma-v-sao'],
            ['slug' => 'demontazh-metalloloma-v-svao'],
            ['slug' => 'demontazh-metalloloma-v-vao'],
            ['slug' => 'demontazh-metalloloma-v-yvao'],
            ['slug' => 'demontazh-metalloloma-v-yao'],
            ['slug' => 'demontazh-metalloloma-v-yzao'],
            ['slug' => 'demontazh-metalloloma-v-zao'],
            ['slug' => 'demontazh-metalloloma-v-szao'],
            ['slug' => 'demontazh-metalloloma-v-zelao'],
            ['slug' => 'demontazh-metalloloma-v-tao'],
            ['slug' => 'demontazh-metalloloma-v-nao'],
            ['slug' => 'demontazh-metalloloma-v-aprelevke'],
            ['slug' => 'demontazh-metalloloma-v-balashixe'],
            ['slug' => 'demontazh-metalloloma-v-beloozyorskom'],
            ['slug' => 'demontazh-metalloloma-v-bronniczax'],
            ['slug' => 'demontazh-metalloloma-v-veree'],
            ['slug' => 'demontazh-metalloloma-v-vidnom'],
            ['slug' => 'demontazh-metalloloma-v-volokolamske'],
            ['slug' => 'demontazh-metalloloma-v-voskresenske'],
            ['slug' => 'demontazh-metalloloma-v-visokovske'],
            ['slug' => 'demontazh-metalloloma-v-goliczyino'],
            ['slug' => 'demontazh-metalloloma-v-dedovsk'],
            ['slug' => 'demontazh-metalloloma-v-dzerzhinskom'],
            ['slug' => 'demontazh-metalloloma-v-dmitrove'],
            ['slug' => 'demontazh-metalloloma-v-domodedovo'],
            ['slug' => 'demontazh-metalloloma-v-drezne'],
            ['slug' => 'demontazh-metalloloma-v-dubne'],
            ['slug' => 'demontazh-metalloloma-v-egorevske'],
            ['slug' => 'demontazh-metalloloma-v-zhukovskom'],
            ['slug' => 'demontazh-metalloloma-v-zaraiske'],
            ['slug' => 'demontazh-metalloloma-v-zvenigorode'],
            ['slug' => 'demontazh-metalloloma-v-ivanteevke'],
            ['slug' => 'demontazh-metalloloma-v-istre'],
            ['slug' => 'demontazh-metalloloma-v-kashire'],
            ['slug' => 'demontazh-metalloloma-v-klinu'],
            ['slug' => 'demontazh-metalloloma-v-kolomne'],
            ['slug' => 'demontazh-metalloloma-v-koroleve'],
            ['slug' => 'demontazh-metalloloma-v-krasnoarmeiske'],
            ['slug' => 'demontazh-metalloloma-v-krasnogorske'],
            ['slug' => 'demontazh-metalloloma-v-krasnozovodske'],
            ['slug' => 'demontazh-metalloloma-v-krasnozamenske'],
            ['slug' => 'demontazh-metalloloma-v-kubinke'],
            ['slug' => 'demontazh-metalloloma-v-kurovskom'],
            ['slug' => 'demontazh-metalloloma-v-likino-dulevo'],
            ['slug' => 'demontazh-metalloloma-v-lobne'],
            ['slug' => 'demontazh-metalloloma-v-losino-petrovskom'],
            ['slug' => 'demontazh-metalloloma-v-lukhovicskh'],
            ['slug' => 'demontazh-metalloloma-v-litkarino'],
            ['slug' => 'demontazh-metalloloma-v-lubercakh'],
            ['slug' => 'demontazh-metalloloma-v-mojaiske'],
            ['slug' => 'demontazh-metalloloma-v-mitishakh'],
            ['slug' => 'demontazh-metalloloma-v-naro-fominske'],
            ['slug' => 'demontazh-metalloloma-v-noginske'],
            ['slug' => 'demontazh-metalloloma-v-odincovo'],
            ['slug' => 'demontazh-metalloloma-v-ozerakh'],
            ['slug' => 'demontazh-metalloloma-v-orkhovo-zuevo'],
            ['slug' => 'demontazh-metalloloma-v-pavloskom-posade'],
            ['slug' => 'demontazh-metalloloma-v-peresvete'],
            ['slug' => 'demontazh-metalloloma-v-podolske'],
            ['slug' => 'demontazh-metalloloma-v-protvino'],
            ['slug' => 'demontazh-metalloloma-v-pushkine'],
            ['slug' => 'demontazh-metalloloma-v-pushino'],
            ['slug' => 'demontazh-metalloloma-v-remenskom'],
            ['slug' => 'demontazh-metalloloma-v-reutove'],
            ['slug' => 'demontazh-metalloloma-v-roshale'],
            ['slug' => 'demontazh-metalloloma-v-ruze'],
            ['slug' => 'demontazh-metalloloma-v-sergievom-posade'],
            ['slug' => 'demontazh-metalloloma-v-serpukhove'],
            ['slug' => 'demontazh-metalloloma-v-solnechnogorke'],
            ['slug' => 'demontazh-metalloloma-v-staroi-kupavne'],
            ['slug' => 'demontazh-metalloloma-v-stupino'],
            ['slug' => 'demontazh-metalloloma-v-taldome'],
            ['slug' => 'demontazh-metalloloma-v-fryazino'],
            ['slug' => 'demontazh-metalloloma-v-khimkakh'],
            ['slug' => 'demontazh-metalloloma-v-khotkovo'],
            ['slug' => 'demontazh-metalloloma-v-chernogolovke'],
            ['slug' => 'demontazh-metalloloma-v-chekhove'],
            ['slug' => 'demontazh-metalloloma-v-shature'],
            ['slug' => 'demontazh-metalloloma-v-shelkovo'],
            ['slug' => 'demontazh-metalloloma-v-elektrogorske'],
            ['slug' => 'demontazh-metalloloma-v-elektrostali'],
            ['slug' => 'demontazh-metalloloma-v-elektroulgyakh'],
            ['slug' => 'demontazh-metalloloma-v-yakhmore'],
            ['slug' => 'demontazh-metalloloma-v-rajone-akademichesky'],
            ['slug' => 'demontazh-metalloloma-v-rajone-alekseevskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-altufevskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-arbat'],
            ['slug' => 'demontazh-metalloloma-v-rajone-aeroport'],
            ['slug' => 'demontazh-metalloloma-v-rajone-babushkinskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-basmannyij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-begovoj'],
            ['slug' => 'demontazh-metalloloma-v-rajone-beskudnikovskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-bibirevo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-biryulevo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-bogorodskoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-brateevo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-butovo-severnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-butovo-yuzhnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-butyirskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-veshnyaki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-vnukovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-vojkovskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-vostochnyij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-vyixino-zhulebino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-gagarinskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-golovinskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-golyanovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-danilovskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-degunino-vostochnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-degunino-zapadnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-dmitrovskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-donskoj'],
            ['slug' => 'demontazh-metalloloma-v-rajone-dorogomilovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-zamoskvoreche'],
            ['slug' => 'demontazh-metalloloma-v-rajone-zyuzino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-butovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-zyablikovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-ivanovskoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-izmajlovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-kapotnya'],
            ['slug' => 'demontazh-metalloloma-v-rajone-konkovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-koptevo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-kosino-uxtomskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-kotlovka'],
            ['slug' => 'demontazh-metalloloma-v-rajone-krasnoselskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-kryilatskoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-kryukovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-kuzminki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-kunczevo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-kurkino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-levoberezhnyij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-lefortovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-lianozovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-lomonosovskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-losinoostrovskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-lyublino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-marfino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-marina-roshha'],
            ['slug' => 'demontazh-metalloloma-v-rajone-marino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-matushkino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-medvedkovo-severnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-medvedkovo-yuzhnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-metrogorodok'],
            ['slug' => 'demontazh-metalloloma-v-rajone-meshhanskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-mitino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-mozhajskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-molzhaninovskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-moskvoreche-saburovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-nagatino-sadovniki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-nagatinskij-zaton'],
            ['slug' => 'demontazh-metalloloma-v-rajone-nagornyij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-nekrasovka'],
            ['slug' => 'demontazh-metalloloma-v-rajone-nizhegorodskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-novogireevo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-novokosino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-novo-peredelkino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-obruchevskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-orexovo-borisovo-severnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-orexovo-borisovo-yuzhnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-ostankinskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-otradnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-ochakovo-matveevskoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-perovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-pechatniki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-pokrovskoe-streshnevo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-preobrazhenskoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-presnenskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-prospekt-vernadskogo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-ramenki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-rostokino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-ryazanskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-savyolki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-savyolovskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-sviblovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-severnyij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-silino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-sokol'],
            ['slug' => 'demontazh-metalloloma-v-rajone-sokolinaya-gora'],
            ['slug' => 'demontazh-metalloloma-v-rajone-sokolniki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-solnczevo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-staroe-kryukovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-strogino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-taganskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-tverskoj'],
            ['slug' => 'demontazh-metalloloma-v-rajone-tekstilshhiki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-tyoplyij-stan'],
            ['slug' => 'demontazh-metalloloma-v-rajone-timiryazevskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-troparyovo-nikulino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-tushino-severnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-tushino-yuzhnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-filyovskij-park'],
            ['slug' => 'demontazh-metalloloma-v-rajone-fili-davyidkovo'],
            ['slug' => 'demontazh-metalloloma-v-rajone-xamovniki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-xovrino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-xoroshyovo-mnevniki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-xoroshyovskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-czariczyino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-cheryomushki'],
            ['slug' => 'demontazh-metalloloma-v-rajone-chertanovo-severnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-chertanovo-czentralnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-chertanovo-yuzhnoe'],
            ['slug' => 'demontazh-metalloloma-v-rajone-shhukino'],
            ['slug' => 'demontazh-metalloloma-v-rajone-yuzhnoportovyij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-yakimanka'],
            ['slug' => 'demontazh-metalloloma-v-rajone-yaroslavskij'],
            ['slug' => 'demontazh-metalloloma-v-rajone-yasenevo'],
        ];

        foreach ($data14 as $key => $item) {
            $slug = new Slug();
            $dismantlingRegion = DismantlingRegion::find($key + 1);
            $slug->slug = $item['slug'];
            $slug->content_id = $content_id;
            $slug->h1 = $dismantlingRegion->title;
            $slug->title = $dismantlingRegion->title.' - '.$titleRandomizer1[array_rand($titleRandomizer1)].' - '.$titleRandomizer2[array_rand($titleRandomizer2)];;;
            $dismantlingRegion->slug()->save($slug);
            $content_id++;
        }
    }
}

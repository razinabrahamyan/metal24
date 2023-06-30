<?php

use App\Models\Category;
use App\Models\Dismantling;
use App\Models\DismantlingRegion;
use App\Models\Regions;
use App\Models\Slug;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Support\Str;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('welcome'));
});

$slug = Slug::where('slug', request()->segment(1))->with('slugable')->first();

//------------------------ Menu BreadCrumbs ----------------------------------------------------
if (isset($slug) && $slug->slugable->getTable() === "products") {
    if ($slug->slugable['category_id']) {
        $category = Category::with('market.slug', 'slug')->find($slug->slugable['category_id']);

        Breadcrumbs::for('markets', function ($trail) use($category) {
            $trail->parent('home');
            $trail->push($category->market['title'], route($category->market['slug']['slug']));
        });

        Breadcrumbs::for('categories', function ($trail) use($category) {
            $trail->parent('markets');
            $trail->push($category->title, route($category['slug']['slug']));
        });

        Breadcrumbs::for('products', function ($trail) use($slug){
            $trail->parent('categories');
            $trail->push($slug->slugable()->first()->title, route($slug->slug));
        });
    } else {
        $market = $slug->slugable()->first()->market()->with('slug')->first();
        Breadcrumbs::for('markets', function ($trail) use($market) {
            $trail->parent('home');
            $trail->push($market->title, route($market->slug['slug']));
        });

        Breadcrumbs::for('products', function ($trail) use($slug){
            $trail->parent('markets');
            $trail->push($slug->slugable()->first()->title, route(request()->segment(1)));
        });
    }
}

if (isset($slug) && $slug->slugable->getTable() === "categories") {
    $market = $slug->slugable()->first()->market()->with('slug')->first();
    Breadcrumbs::for('markets', function ($trail) use($market) {
        $trail->parent('home');
        $trail->push($market->title, route($market->slug['slug']));
    });

    Breadcrumbs::for('categories', function ($trail) use($slug) {
        $trail->parent('markets');
        $trail->push($slug->slugable()->first()->title, route($slug->slug));
    });
}

if (isset($slug) && $slug->slugable->getTable() === "markets") {
    Breadcrumbs::for('markets', function ($trail) use($slug){
        $trail->parent('home');
        $trail->push($slug->slugable()->first()->title, route(request()->segment(1)));
    });
}
// --------------- End Menu Breadcrumbs -----------------------------------------------------

Breadcrumbs::for('demontazh', function ($trail) {
    $trail->parent('home');
    $trail->push('Демонтаж', route('demontazh'));
});

if (!empty($slug)) {
    if (Str::contains(request()->segment(1), 'demontazh-')) {
        Breadcrumbs::for(request()->segment(1), function ($trail) use ($slug) {
            $trail->parent('demontazh');
            $trail->push($slug->slugable['title'], route($slug->slug));
        });
    }
}

Breadcrumbs::for('punkt-priema-metalla', function ($trail) {
    $trail->parent('home');
    $trail->push('Пункты приема металла', route('punkt-priema-metalla'));
});

/*Где можно сдать металлолом с вывозом*/
Breadcrumbs::for('gde-mozhno-sdat-metallolom-s-vyivozom', function ($trail, $title) {
    $trail->parent('home');
    $trail->push('Где можно сдать металлолом с вывозом в Московской области', route('gde-mozhno-sdat-metallolom-s-vyivozom'));
});

/*Какой металлолом можно сдать*/
Breadcrumbs::for('chto-mozhno-sdat-na-metallolom', function ($trail, $title) {
    $trail->parent('home');
    $trail->push('Какой металлолом можно сдать', route('chto-mozhno-sdat-na-metallolom'));
});

/*В каких городах мы делаем демонтаж*/
Breadcrumbs::for('demontazh-goroda', function ($trail) {
    $trail->parent('home');
    $trail->push('В каких городах мы делаем демонтаж', route('demontazh-goroda'));
});

//----------------------Вывоз и прием металлолома------------------------
Breadcrumbs::for('vyivoz-metalloloma', function ($trail, $title = null) {
    $trail->parent('home');
    $trail->push('Вывоз металлолома', route('vyivoz-metalloloma'));
});


if (!Str::contains(request()->segment(1), 'vyivoz-metalloloma') && Str::contains(request()->segment(1), 'vyivoz-'))
{
    Breadcrumbs::for(request()->segment(1), function ($trail) use($slug){
        $trail->parent('vyivoz-metalloloma');
        $trail->push($slug->slugable['title'], route($slug->slug));
    });
}
//-----------------------------------------------------

//---------------------Цены-----------------------------
Breadcrumbs::for('czenyi-na-metall', function ($trail)  {
    $trail->parent('home');
    $trail->push('Цены на металлолом', route('czenyi-na-metall'));
});
//-------------------------------------------------------------------------

//---------------------Выездной Приемный Пункт--------------------------
Breadcrumbs::for('vyiezdnoj-priyomnyij-punkt', function ($trail)  {
    $trail->parent('home');
    $trail->push('Прием металла с выездом' , route('vyiezdnoj-priyomnyij-punkt'));
});

if (Str::contains(request()->segment(1), 'priem-metalla-'))
{
    Breadcrumbs::for(request()->segment(1), function ($trail)  use($slug){
        $trail->parent('vyiezdnoj-priyomnyij-punkt');
        $trail->push($slug->slugable['title'] , route($slug->slug));
    });

}
//---------------------------------------------------------------

//--------------------Контакты---------------------------------
Breadcrumbs::for('contacts', function ($trail)  {
    $trail->parent('home');
    $trail->push('Контакты компании' , route('contacts'));
});
//-------------------------------------------------------------

Breadcrumbs::for('uslugi', function ($trail) {
    $trail->parent('home');
    $trail->push('Услуги', route('uslugi'));
});

Breadcrumbs::for('kak-sdat-metall', function ($trail) {
    $trail->parent('home');
    $trail->push('Как сдать металлолом', route('kak-sdat-metall'));
});

Breadcrumbs::for('uslugi-demontazha', function ($trail) {
    $trail->parent('home');
    $trail->push('Услуги демонтажа', route('uslugi-demontazha'));
});

//--------------------Политика конфиденциальности---------------------------------
Breadcrumbs::for('polzovatelskoe-soglashenie', function ($trail) {
    $trail->parent('home');
    $trail->push('Политика конфиденциальности', route('polzovatelskoe-soglashenie'));
});
//--------------------------------------------------------------------------------

//---------------------Новости---------------------------------------
Breadcrumbs::for('novosti', function ($trail) {
    $trail->parent('home');
    $trail->push('Новости', route('news'));
});

if (Str::contains(request()->segment(1), 'novosti-'))
{
    Breadcrumbs::for(request()->segment(1), function ($trail, $title) {
        $trail->parent('novosti');
        $trail->push($title, route(request()->segment(1)));
    });
}

Breadcrumbs::for('nashi-rabotyi', function ($trail) {
    $trail->parent('home');
    $trail->push('Наши работы', route('nashi.raboti'));
});

Breadcrumbs::for('sotrudnichestvo', function ($trail) {
    $trail->parent('home');
    $trail->push('Сотрудничество', route('sotrudnichestvo'));
});

Breadcrumbs::for('vakansii', function ($trail) {
    $trail->parent('home');
    $trail->push('Вакансии', route('vakansii'));
});

Breadcrumbs::for('karta-sayta', function ($trail) {
    $trail->parent('home');
    $trail->push('Карта сайта', route('site.map'));
});

<?php

namespace App\Library\Services;

use App\Library\Services\Contracts\RoutingContract;
use App\Models\Address;
use App\Models\Dismantling;
use App\Models\DismantlingRegion;
use App\Models\Market;
use App\Models\MarqueePrice;
use App\Models\Page;
use App\Models\Product;
use App\Models\Regions;
use App\Models\ScrapExport;
use App\Models\Slug;
use App\Traits\SidebarTrait;

class RoutingService implements RoutingContract
{
    use SidebarTrait;

    private $markets;
    private $addresses;
    private $marquee;
    private $routeName;

    /**
     * RoutingService constructor.
     */
    public function __construct()
    {
        $this->markets = $this->getSideBar()['markets'];
        $this->addresses = $this->getSideBar()['addresses'];
        $this->marquee = $this->getSideBar()['marquee'];
        $this->routeName = request()->route()->getName();
    }

    public function index()
    {
        return [
            "markets"   => $this->markets,
            'addresses' => $this->addresses,
            "title"     => "Прием металлолома в Москве 🚚 скупка черного лома 💵",
            "marquee"   => $this->marquee,
        ];
    }

    public function content() : array
    {
        $marketPrices = $categoriesPrices = $productPrice = [];
        $slug = Slug::with(['content'])->where('slug', $this->routeName)->first();
        $slugable = $slug->slugable()->first();

        switch (get_class($slugable)) {
            case 'App\Models\Market':
            {
                $marketPrices = Product::with(['metalPrice', 'category', 'market'])->where('market_id', $slugable->id)
                                       ->get()->groupBy('category_id');
                break;
            }
            case 'App\Models\Category':
            {
                $categoriesPrices = Product::with(['metalPrice', 'category', 'market'])
                                           ->where('category_id', $slugable->id)
                                           ->get();
                break;
            }
            case 'App\Models\Product':
            {
                $productPrice = Product::with(['metalPrice'])->where('id', $slugable->id)->first();
                break;
            }
        }

        if (!empty($slug->title)) {
            $title = $slug->title;
        } elseif (!empty($slug->h1)) {
            $title = $slug->h1;
        } else {
            $title = $slug->slugable()->first()->title;
        }

        return [
            'marketPrices'     => $marketPrices,
            'categoriesPrices' => $categoriesPrices,
            'productPrice'     => $productPrice,
            'route_name'       => $this->routeName,
            'markets'          => $this->markets,
            'addresses'        => $this->addresses,
            'content'          => $slug->content,
            'title'            => $title,
            "marquee"          => MarqueePrice::all(),
            "table"            => $slug->slugable->getTable(),
            "h1"               => $slug->h1,
            "nextSlug"         => Slug::find($slug->id + 1),
            "prevSlug"         => Slug::find($slug->id - 1),
        ];
    }

    public function page()
    {
        $scrapExport = $regions = $dismantling = $marketPrices = $marketPricesByCategory = [];
        $page = Page::where('slug', $this->routeName)->first();

        switch ($this->routeName) {
            case 'vyiezdnoj-priyomnyij-punkt':
            {
                $getRegions = Regions::with(['slug'])->get();
                $regions = [
                    'regions' => $getRegions->where('type', 'region'),
//                    'cities'    => $getRegions->where('type', 'city'),
//                    'districts' => $getRegions->where('type', 'district'),
                ];
                break;
            }
            case 'vyivoz-metalloloma':
            {
                $getScrapExport = ScrapExport::with(['slug'])->get();
                $scrapExport = [
                    'black' => $getScrapExport->where('type', 'black'),
                    'color' => $getScrapExport->where('type', 'color'),
                ];
                break;
            }
            case 'czenyi-na-metall':
            {
                $model = Product::with(['metalPrice', 'category', 'market']);
                $marketPrices = $model->get()->groupBy('market_id');
                $marketPricesByCategory = $model->get();
                $cher_id = 10; //Do not change!
                $chermet = $marketPricesByCategory->groupBy('category_id')[$cher_id];
                $marketPricesByCategory = $marketPricesByCategory->groupBy('category_id')->forget($cher_id)->prepend($chermet, $cher_id);

                break;
            }
            case 'demontazh':
            {
                $dismantling = Dismantling::with(['slug'])->get();
                break;
            }
            case 'uslugi-demontazha':
            {
                $dismantling = Dismantling::with(['slug'])->paginate(9);
                $items = $dismantling->items();
                if (!empty($items) && !empty(request()->get('page'))) {
                    $firstElemTitle = $items[0]->title ?? '';
                    $replace = preg_replace('/(.*?)(-.*)/is', $firstElemTitle.' $2', $page->title);
                    $page->title = $replace;
                }
                break;
            }
            case 'gde-mozhno-sdat-metallolom-s-vyivozom':
            {
                $cities = Regions::with(['slug'])->whereIn('type', ['city', 'district'])->paginate(12);
                $regions = [
                    'regions' => Regions::with(['slug'])->where('type', 'region')->get(),
                    'cities'  => $cities,
                ];

                $items = $cities->items();
                if (!empty($items) && !empty(request()->get('page'))) {
                    $firstElemTitle = $items[0]->title ?? '';
                    $replace = preg_replace('/(.*?)(-.*)/is', $firstElemTitle.' $2', $page->title);
                    $page->title = $replace;
                }
                break;
            }
            case 'demontazh-goroda':
            {
                $cities = DismantlingRegion::with(['slug'])->whereIn('type', ['city', 'district'])->paginate(12);
                $regions = [
                    'regions' => DismantlingRegion::with(['slug'])->where('type', 'region')->get(),
                    'cities'  => $cities,
                ];

                $items = $cities->items();
                if (!empty($items) && !empty(request()->get('page'))) {
                    $firstElemTitle = $items[0]->title ?? '';
                    $replace = preg_replace('/(.*?)(-.*)/is', $firstElemTitle.' $2', $page->title);
                    $page->title = $replace;
                }
                break;
            }
        }

        return [
            'route_name'             => $this->routeName,
            'markets'                => $this->markets,
            'addresses'              => $this->addresses,
            'title'                  => $page->title,
            "regions"                => $regions,
            "dismantling"            => $dismantling,
            "scrapExport"            => $scrapExport,
            "marquee"                => MarqueePrice::all(),
            "marketPrices"           => $marketPrices,
            "marketPricesByCategory" => $marketPricesByCategory
        ];
    }
}

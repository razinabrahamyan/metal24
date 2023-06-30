<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Market;
use App\Models\MarqueePrice;
use App\Models\Slug;
use App\Traits\SidebarTrait;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    use SidebarTrait;
    private $markets;
    private $addresses;
    private $marquee;

    public function __construct()
    {
        $this->markets = $this->getSideBar()['markets'];
        $this->addresses = $this->getSideBar()['addresses'];
        $this->marquee = $this->getSideBar()['marquee'];
    }

    public function __invoke()
    {
        $model = Slug::class;
        $slug = new $model;
        $vyvoz = $slug
            ->where('slug', '!=', 'vyivoz-metalloloma')
            ->where('slug', 'like', 'vyivoz-%')
            ->get();

        $demontazh = $slug
            ->where('slug', '!=', 'demontazh')
            ->where('slug', 'like', 'demontazh-%')
            ->get();

        $priem_s_vyiezdom = $slug
            ->where('slug', 'like', 'priem-metalla-v%')
            ->get();

        return view('sitemap.index' , [
            'markets'          => $this->markets,
            'addresses'        => $this->addresses,
            'marquee'          => $this->marquee,
            'vyvoz'            => $vyvoz,
            'demontazh'        => $demontazh,
            'priem_s_vyiezdom' => $priem_s_vyiezdom,
            "title"            => "Карта сайта - Вывоз и прием черного и цветного лома",
        ]);
    }
}

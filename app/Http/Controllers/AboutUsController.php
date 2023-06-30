<?php

namespace App\Http\Controllers;

use App\Traits\SidebarTrait;
use Illuminate\Http\Request;

class AboutUsController extends Controller
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
        $arr = [
            'vakansii' =>   "Приемка черного и цветного лома с самовывозом 🚚 - Сдать металлолом в Москве 💲",
            'sotrudnichestvo' => "Сдать металл в Москве дорого 🚚 - Прием чермета дорого 💲",
            'nashi-rabotyi' => "Приемка черного и цветного металлолома в Москве 🚚 - Прием черного металлолома дорого 💲",
        ];
        $slug = \request()->segment(1);
        return view("pages.$slug", [
            'markets'          => $this->markets,
            'addresses'        => $this->addresses,
            'marquee'          => $this->marquee,
            'title_rand' => $arr[$slug]
        ]);
    }
}

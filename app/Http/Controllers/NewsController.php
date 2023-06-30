<?php

namespace App\Http\Controllers;

use App\Library\Services\Contracts\NewsContract;
use App\Models\News;
use App\Models\Slug;
use App\Traits\SidebarTrait;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use SidebarTrait;

    protected $newsService;
    private $markets;
    private $addresses;
    private $marquee;

    public function __construct()
    {
        $this->markets = $this->getSideBar()['markets'];
        $this->addresses = $this->getSideBar()['addresses'];
        $this->marquee = $this->getSideBar()['marquee'];
    }

    public function index()
    {
        return view('pages.news.index' , [
            'markets' => $this->markets,
            'addresses' => $this->addresses,
            "marquee"   => $this->marquee,
            'news' => News::all(),
            'title_rand' => 'Вывоз металлолома в Москве и МО 🚚 - Прием черного металла дорого 💲'
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $arr = [
            "novosti-priema-loma-tsam" => "Приемка металлолома с самовывозом в Москве и МО 🚚 - Прием черного металлолома дорого 💲",
            "novosti-priema-elektrodvigateley" => "Приемка металлолома с самовывозом в Москве и МО 🚚 - Сдать цветной металлолом в Москве 💲",
            "novosti-priema-ballonov-b-u" => "Сдать металл в Москве дорого 🚚 - Прием черного лома дорого 💲",
            "novosti-priema-ebonitovykh-akkumulyatorov" => "Сдать металл в Москве дорого 🚚 - Прием черного металлолома дорого 💲",
            "novosti-priema-polipropilenovikh-akkumulyatorov" => "Приемка черного и цветного металлолома с самовывозом 🚚 - Прием чермета дорого 💲",
            "novosti-priema-gelevykh-akkumulyatorov" => "Приемка черного и цветного металла с самовывозом 🚚 - Прием чермета дорого 💲",
            "novosti-priema-mednoy-strujki" => "Вывоз металлолома в Москве и МО 🚚 - Прием черного металла дорого 💲",
            "novosti-priema-mednoy-blestyashki" => "Приемка черного и цветного лома с самовывозом 🚚 - Прием черного лома дорого 💲",
            "novosti-priema-medi-kuskovoy" => "Приемка черного и цветного металлолома в Москве 🚚 - Прием цветмета дорого 💲",
            "novosti-priema-latunnykh-radiatorov" => "Приемка черного и цветного металла с самовывозом 🚚 - Сдать лом в Москве и МО 💲",
            "novosti-priema-svincovikh-gruzikov-avtomobilnikh" => "Приемка черного и цветного металла с самовывозом 🚚 - Прием чермета дорого 💲",
            "novosti-priema-svincovogo-kabelya" => "Приемка черного и цветного металлолома с самовывозом 🚚 - Прием чермета дорого 💲",
            "novosti-priema-alyuminievogo-kabelya" => "Приемка черного и цветного металлолома с самовывозом 🚚 - Прием чермета дорого 💲",
            "novosti-priema-mednogo-kabelya" => "Приемка металлолома с самовывозом в Москве и МО 🚚 - Прием черного металла дорого 💲",
            "novosti-priema-nesortovogo-alyuminiya" => "Приемка черного и цветного металла с самовывозом 🚚 - Прием черного металла дорого 💲",
            "novosti-priema-motornogo-alyuminiya" => "Приемка черного и цветного лома с самовывозом 🚚 - Сдать металлолом в Москве 💲",
            "novosti-priema-aluminievogo-lista" => "Приемка металлолома с самовывозом в Москве и МО 🚚 - Сдать лом в Москве и МО 💲",
            "novosti-priema-elektrotexnicheskogo-alyuminiya" => "Прием и вывоз металла в Москве 🚚 - Сдать металлолом в Москве 💲",
            "novosti-priema-pishhevogo-alyuminiya" => "Приемка металлолома с самовывозом в Москве и МО 🚚 - Сдать металлолом в Москве 💲",
            "novosti-priema-alyuminievyikh-radiatorov" => "Приемка черного и цветного металлолома с самовывозом 🚚 - Сдать цветной металлолом в Москве 💲",
            "novosti-priema-alyuminievyikh-banok" => "Прием и вывоз металла в Москве 🚚 - Сдать цветной металлолом в Москве 💲",
            "novosti-priema-lyuminievogo-profilja" => "Приемка черного и цветного металла с самовывозом 🚚 - Прием цветмета дорого 💲",
            "novosti-sdachi-metallicheskogo-loma" => "Приемка металлолома с самовывозом в Москве и МО 🚚 - Прием черного металла дорого 💲",
            "novosti-kuda-i-po-kakoj-czene-sdat-metallolom" => "Приемка черного и цветного металлолома в Москве 🚚 - Прием чермета дорого 💲"  ,
        ];
        $news_slug = request()->segment(1);
        $slug = Slug::query()
            ->where('slug', request()->segment(1))
            ->with('slugable')
            ->first();

        return view('pages.news.details' , [
            'news' => $slug->slugable,
            'markets' => $this->markets,
            'addresses' => $this->addresses,
            "marquee"   => $this->marquee,
            "title_rand" => $arr[$news_slug]
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

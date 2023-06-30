<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Slug;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SiteMapXMLGenerator extends Controller
{
    private $sitemap;

    /**
     * SiteMapXMLGenerator constructor.
     */
    public function __construct()
    {
        $this->sitemap = App::make("sitemap");
    }

    /**
     * generate and refresh sitemap.xml
     */
    public function generateXML()
    {
        $this->prepareXMLRoutes();
        $this->sitemap->store('xml', 'sitemap');
    }

    /**
     * Preparing routes for xml file
     * @return $this
     */
    public function prepareXMLRoutes() : SiteMapXMLGenerator
    {
        $add = [];
        $this->sitemap->add(URL::to('/'), now(), '1.0', 'daily');

        foreach (Slug::all() as $slug) {
            $add[$slug->slug] = $slug;
        }

        foreach (Page::all() as $slug) {
            $add[$slug->slug] = $slug;
        }

        foreach ($add as $item) {
            $this->sitemap->add(URL::to($item->slug), now(), '0.8', 'daily');
        }

        $this->sitemap->add(URL::to('/novosti'), now(), '0.8', 'daily');
        $this->sitemap->add(URL::to('/karta-sayta'), now(), '0.8', 'daily');

        $this->sitemap->add(URL::to('/nashi-rabotyi'), now(), '0.8', 'daily');
        $this->sitemap->add(URL::to('/sotrudnichestvo'), now(), '0.8', 'daily');
        $this->sitemap->add(URL::to('/vakansii'), now(), '0.8', 'daily');

        return $this;
    }
}

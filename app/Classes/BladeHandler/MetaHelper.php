<?php

namespace App\Classes\BladeHandler;

use App\Models\MetaKeywords;

class MetaHelper
{

    public function getMetaModelQuery()
    {
        return MetaKeywords::where('slug', request()->route()->getName());
    }

    public static function keywords()
    {
        if (request()->route()) {
            $keywords = (new MetaHelper)->getMetaModelQuery()->first();
        }
        return (!empty($keywords)) ? trim($keywords->keywords) : '';
    }

    public static function getDescription()
    {
        $description = '';
        if (request()->route()) {
           $description = (new MetaHelper)->getMetaModelQuery()->first()->meta_description ?? '';
        }
        return $description;
    }
}

<?php

namespace App\Library\Admin\Services;

use App\Library\Admin\Contracts\KeyWordContract;
use App\Models\MetaKeywords;
use App\Models\Slug;

class AdminKeyWordService implements KeyWordContract
{

    public function index()
    {
        $slug = Slug::query()->select('slug', 'title')->get()->toArray();
        $arr = [];
        foreach ($slug as $item) {
            $arr[$item['slug']] = $item['title'];
        }
       return [
           'keywords' => MetaKeywords::query()->paginate(50),
           'titles' => $arr
       ];
    }

    public function update($id, $data)
    {
      if ($data['title']) {
          Slug::query()->where('slug', $data['slug'])->update([
              'title' => $data['title']
          ]);
      }

       return MetaKeywords::query()->findOrFail($id)->update([
          'keywords' => $data['keywords'],
          'meta_description' => $data['meta_description']
       ]);
    }
}
<?php

namespace App\Library\Admin\Services;

use App\Library\Admin\Contracts\PageContract;
use App\Models\Content;
use App\Models\Slug;

class PageService implements PageContract
{

    protected $query;

    /**
     * PageService constructor.
     */
    public function __construct()
    {
        $this->query = Slug::query();
    }

    public function index()
    {
       return ['pages' => $this->query->with('slugable')->get()];
    }

    /**
     * @param $id
     * @return array
     */
    public function edit($id): array
    {
        $slug = $this->query->findOrFail($id);
        return ['content' => Content::query()->findOrFail($slug->id), 'slug' => $slug['slug']];
    }

    /**
     * @param $id
     * @param $data
     * @return bool|int
     */
    public function update($id, $data)
    {
        return Content::query()->findOrFail($id)->update([
            'text_1' => $data->text_1,
            'text_2' => $data->text_2
        ]);
    }
}

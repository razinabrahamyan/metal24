<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Admin\Contracts\KeyWordContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KeyWordsController extends Controller
{
    protected $keywordService;

    /**
     * KeyWordsController constructor.
     * @param KeyWordContract $contract
     */
    public function __construct(KeyWordContract $contract)
    {
        $this->keywordService = $contract;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.keywords', $this->keywordService->index());
    }

    public function update(Request $request, $id)
    {
        return response()->json([$this->keywordService->update($id, $request->all())]);
    }
}

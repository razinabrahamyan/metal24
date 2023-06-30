<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Admin\Contracts\AdminScrapPriceContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ScrapPriceController extends Controller
{

    protected $priceService;

    public function __construct(AdminScrapPriceContract $contract)
    {
        $this->priceService = $contract;
    }

    public function index()
    {
        return view('admin.prices.scrap', $this->priceService->index());
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        return response()->json([$this->priceService->update($id, $request)]);
    }
}

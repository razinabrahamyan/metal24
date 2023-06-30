<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Admin\Contracts\AdminMetalPriceContract;
use Illuminate\Http\Request;

class MetalPriceController extends Controller
{
    protected $priceService;

    public function __construct(AdminMetalPriceContract $contract)
    {
        $this->priceService = $contract;
    }

    public function index()
    {
        return view('admin.prices.metal', $this->priceService->index());
    }

    public function update(Request $request, $id)
    {
        return response()->json([$this->priceService->update($id, $request)]);
    }
}

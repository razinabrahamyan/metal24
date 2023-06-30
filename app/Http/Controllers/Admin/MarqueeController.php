<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Admin\Contracts\AdminMarqueeContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MarqueeController extends Controller
{
    /**
     * @var AdminMarqueeContract
     */
    protected $marqueeService;

    /**
     * MarqueeController constructor.
     * @param AdminMarqueeContract $contract
     */
    public function __construct(AdminMarqueeContract $contract)
    {
        $this->marqueeService = $contract;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.prices.marquee', $this->marqueeService->index());
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        return response()->json([$this->marqueeService->updatePrice($id, $request)]);
    }
}
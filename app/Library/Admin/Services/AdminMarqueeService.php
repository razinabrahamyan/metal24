<?php

namespace App\Library\Admin\Services;

use App\Library\Admin\Contracts\AdminMarqueeContract;
use App\Models\MarqueePrice;

class AdminMarqueeService implements AdminMarqueeContract
{

    public function index(): array
    {
        return ['marquees' => MarqueePrice::all()];
    }

    public function updatePrice($id, $data)
    {
        return MarqueePrice::query()->findOrFail($id)->update([
            'price' => $data['price'],
            'direction' => $data['direction']
        ]);
    }
}
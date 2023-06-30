<?php

namespace App\Library\Admin\Contracts;

interface AdminScrapPriceContract
{
    public function index();
    public function update($id, $data);
}

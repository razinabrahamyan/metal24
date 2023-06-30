<?php

namespace App\Library\Admin\Contracts;

interface AdminMetalPriceContract
{
    public function index();
    public function update($id, $data);
}

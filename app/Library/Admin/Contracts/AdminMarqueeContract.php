<?php

namespace App\Library\Admin\Contracts;

interface AdminMarqueeContract
{
    public function index();
    public function updatePrice($id, $data);
}
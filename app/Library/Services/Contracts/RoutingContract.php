<?php

namespace App\Library\Services\Contracts;

interface RoutingContract
{
    public function index();

    public function content();

    public function page();
}

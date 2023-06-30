<?php

namespace App\Library\Admin\Contracts;

interface PageContract
{
    public function index();
    public function edit($id);
    public function update($id, $data);
}

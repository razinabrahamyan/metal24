<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MobilePhoneNumber;
use Illuminate\Http\Request;

class MobilePhoneController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('admin.mobile_phone')
            ->with(['status' => MobilePhoneNumber::find(1)->status]);
    }
    public function update()
    {
        $mobile = MobilePhoneNumber::find(1);
        $mobile->status = \request()->status;
        $mobile->save();
        return response()->json($mobile);
    }
}

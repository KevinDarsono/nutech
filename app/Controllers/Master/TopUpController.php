<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;

class TopUpController extends BaseController
{
    public function index()
    {
        return view("page/master/topup/index");
    }
}

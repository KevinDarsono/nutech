<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;

class AkunController extends BaseController
{
    public function index()
    {
        return view("page/master/akun/index");
    }

    public function edit()
    {
        return view("page/master/akun/edit");
    }
}

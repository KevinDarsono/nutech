<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;

class TransactionController extends BaseController
{
    public function index()
    {
        return view("page/master/transaction/index");
    }
}

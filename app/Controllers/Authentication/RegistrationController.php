<?php

namespace App\Controllers\Authentication;

use App\Controllers\BaseController;

class RegistrationController extends BaseController
{
    public function index()
    {
        return view("authentication/registration/index");
    }
}

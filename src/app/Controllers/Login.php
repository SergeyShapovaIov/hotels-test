<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function loginView()
    {
        return view('layouts/header')
            .view('auth/login/index')
            .view('layouts/footer');
    }
	public function index()
	{

	}
}

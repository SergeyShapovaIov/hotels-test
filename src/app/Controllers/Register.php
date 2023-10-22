<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function registrationView()
    {
        return view('layouts/header')
            .view('auth/registration/index')
            .view('layouts/footer');
    }
	public function index()
	{
		//
	}
}

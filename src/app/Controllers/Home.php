<?php

namespace App\Controllers;
use App\Models\Comment;

class Home extends BaseController
{
	public function index()
	{
        return view('layouts/header')

            .view('layouts/footer');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPost extends Controller
{
    public function index() {
		return view('pages.admin_post');
	}
}

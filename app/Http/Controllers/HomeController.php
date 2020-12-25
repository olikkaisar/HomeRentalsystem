<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
	function index() {
		return view('pages.home');
	}
}

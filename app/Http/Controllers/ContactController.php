<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mail;

class ContactController extends Controller {
	public function contact() {
		return view('pages.contact');
	}

	public function sendmessage() {

		$data = request()->validate([

			'name' => 'required',
			'email' => 'required|email',
			'subject' => 'required',
			'message' => 'required',

		]);
	}
}

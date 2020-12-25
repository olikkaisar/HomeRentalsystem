<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class PostController extends Controller {
	public function index() {
		return view('pages.post');
	}

	public function save_post(Request $request) {
		$data['id'] = $request->id;
		$data['name'] = $request->name;
		$data['phone'] = $request->phone;
		$data['location'] = $request->location;
		$data['price'] = $request->price;
		$data['description'] = $request->description;
		// $data['publication_status'] = $request->publication_status;

		$image = $request->file('image');

		if ($image) {
			$image_name = str_random(20);
			$ext = strtolower($image->getClientOriginalExtension());
			$image_full_name = $image_name . '.' . $ext;
			$upload_path = 'image/';
			$image_url = $upload_path . $image_full_name;
			$succes = $image->move($upload_path, $image_full_name);

			if ($succes) {
				$data['image'] = $image_url;
				DB::table('post')->insert($data);
				Session::put('messege', 'product add successfully with image');
				return Redirect::to('/post');
			}
		}

		$data['image'] = '';

		DB::table('post')->insert($data);
		Session::put('messege', 'product add successfully with out image');
		return Redirect::to('/post');
	}

}

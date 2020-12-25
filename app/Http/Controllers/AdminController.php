<?php

namespace App\Http\Controllers;

use DB;

session_start();

class AdminController extends Controller {
	public function index() {
		return view('pages.admin_login');
	}

	public function show_dashboard() {
		return view('pages.dashboard');
	}

	public function all_post() {
		$all_post_info = DB::table('post')->get();
		$manage_post = view('pages.all_post')
			->with('all_post_info', $all_post_info);

		return view('admin_layout')
			->with('pages.all_post', $manage_post);

	}

	function inactive_post($id) {
		DB::table('post')
			->where('id', $id)
			->update(['publication_status' => 0]);
		return Redirect('/all_post');
	}

	function active_post($id) {
		DB::table('post')
			->where('id', $id)
			->update(['publication_status' => 1]);
		return Redirect('/all_post');
	}

    function delete_post($id)

    {
        DB::table('post')
            ->where('id',$id)
            ->delete();

        // Session::put('messege','Category deleted sussesfully! ');
        return Redirect ('/all_post');
    }
}

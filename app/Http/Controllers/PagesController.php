<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class PagesController extends Controller
{
    
	public function home() {
		return view('index');
	}

	public function about() {
		return view('about', ['oat' => 'Order and Take']);
	}

	public function login() {
		return view('login');
	}

	// public function checklogin(request $request) {
	// 	$this->validate($request, 'email' => 'required|email', 'password' => 'required|alphaNum|min:3')
	// }

	// $user_data = array('email' => $request->get('email'), 'password' => $request->get('password'));

	// if (Auth::attempt($user_data)) {
	// 	return redirect('main/successlogin');
	// } else {
	// 	return back()->with('error', 'Wrong Login Details');
	// }

	// function successlogin() {
	// 	return view(index);
	// }

}
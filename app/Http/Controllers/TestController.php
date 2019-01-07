<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    //
	public function index(){
		dd(Auth::user());
		// return Auth::user();
		// return view('hmm.test');
	}
}

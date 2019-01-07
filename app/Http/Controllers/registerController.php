<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelBiodata;
use App\Users;

class registerController extends Controller
{
	
    public function create(){
			return view("register2");
	}
	public function store(Request $request){
		$validatedData = $request->validate([
			'email' => 'required|max:100',
			'nama' => 'required|max:200',
			'username' => 'required|max:50',
			'password' => 'required|confirmed'
		]);
		$model = new Users();
		$model->nama = $request->input("nama");
		$model->email = $request->input("email");
		$model->username = $request->input("username");
		$model->password = md5($request->input("password"));
		$model->save();
		if ($request->session()->put('users', $request->input("username")));
		return view("home");

	}
	
}

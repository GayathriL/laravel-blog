<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest',['except' => 'destroy']);
	}
    public function register()
    {
       return view('sessions.register');
    }

    public function store()
    {
    	if(!auth()->attempt(request(['email','password'])))
    	{
    		return back()->withErrors([
               
               'message' => 'please check your email and password'

    		]);
    	}
    	return redirect()->home();
    }

    public function logout()
    {
    	auth()->logout;

    	return redirect()->home();
    }
}

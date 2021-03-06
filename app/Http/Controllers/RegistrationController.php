<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function register()
    {
    	return view('registration.register');
    }

    public function store()
    {
    	$this->validate(request(),[
          
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required|confirmed'

    	]);

    	//$user=User::register(request(['name','email','password']));

    	$user=new User;

    	$user->name = request('name');

    	$user->email = request('email');

    	$user->password = request('password');

    	$user->save();

    	auth()->login($user);

    	return redirect()->home();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function viewhomepage()
    {
    	return view('homepage');
    }
}
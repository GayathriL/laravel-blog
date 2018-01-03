<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\fruits;

class FruitsController extends Controller
{
    public function index()
    {
	    //return view('welcome')->with('name',"gayathri");
	    //$name = 'Gayathri';
	    //$age = 21;

	    //return view('welcome',['name'=> $name]);

	    //return view('welcome',compact('name','age'));

	    //$fruits=["apple","orange","pineapple","banana"];

	    //$fruits=DB::table('fruits')->latest()->get();

	    $fruits=fruits::all();

	    return view('fruits.index',compact('fruits'));


    }

    public function show($fruit_id)
    {
	   //$fruit=DB::table('fruits')->find($fruit_id);

	   //dd($fruit);

	   $fruit=fruits::find($fruit_id);

	   return view('fruits.show',compact('fruit'));
    }
}

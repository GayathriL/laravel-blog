<?php

use App\fruits;

Route::get('/fruits', function () {
    //return view('welcome')->with('name',"gayathri");
    //$name = 'Gayathri';
    //$age = 21;

    //return view('welcome',['name'=> $name]);

    //return view('welcome',compact('name','age'));

    //$fruits=["apple","orange","pineapple","banana"];

       //$fruits=DB::table('fruits')->latest()->get();

       $fruits=fruits::all();

       return view('index',compact('fruits'));


});

Route::get('/fruits/{fruit}',function ($fruit_id){


   $fruit=DB::table('fruits')->find($fruit_id);

   dd($fruit);

   //$fruit=App\fruits::find($fruit_id);

   return view('show',compact('fruit'));

});


Route::get('/compassite', function () {
    return view('compassite');
});


Route::get('/dashboard', 'HomeController@index');

Route::get('/homepage', 'indexcontroller@viewhomepage');
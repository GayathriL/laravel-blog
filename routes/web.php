<?php

Route::get('/fruits','FruitsController@index');

Route::get('/fruits/{fruit}','FruitsController@show');

Route::get('/tasks','TasksController@index');

Route::get('/tasks/{task}','TasksController@show');

Route::get('/compassite','HomeController@welcome');

Route::get('/dashboard', 'HomeController@index');

Route::get('/homepage', 'indexcontroller@viewhomepage');


//storing datas into database

Route::get('/','PostsController@index');

Route::get('/posts/create','PostsController@create');

Route::get('/posts/{post}','PostsController@show');

Route::post('/posts','PostsController@store');

Route::post('/posts/{post}/comments','CommentsController@addcomment');

//Auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Associating with users

Route::get('/register','RegistrationController@register');

Route::post('/register','RegistrationController@store');

Route::get('/login','SessionController@register');

Route::post('/login','SessionController@store');

Route::get('/logout','SessionController@logout');



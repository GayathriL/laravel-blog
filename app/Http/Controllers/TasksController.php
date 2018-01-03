<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tasks;

class TasksController extends Controller
{

	public function index()
	{
	  
	  $tasks=tasks::all();
	  tasks::inComplete();
	  return view('Task.task',compact('tasks'));
	}

	public function show($id)
	{
	   $task=tasks::find($id);

	   return view('Task.show',compact('task'));
	}

}

@extends('layout.master')

@section('content')

  <div class="col-sm-8">

  	<h1>Register</h1>

  	<form method="POST" action="/register">

  		{{ csrf_field() }}

  		<div class="form-group">

  			<label>Name:</label>
  			<input type="text" id="name" name="name" class="form-control">
  		</div>

  		<div class="form-group">

  			<label>Email:</label>
  			<input type="email" id="email" name="email" class="form-control">
  		</div>

  		<div class="form-group">

  			<label>Password:</label>
  			<input type="password" id="password" name="password" class="form-control">
  		</div>

  		<div class="form-group">

  			<label>Confirm Password:</label>
  			<input type="password" id="confirm_password" name="confirm_password" class="form-control">
  		</div>

  		<div class="form-group">
           
           <button type="submit" class="btn btn-primary">Register</button>

  		</div>

  		<div class="form-group">
           
           @include('layout.error')

  		</div>

  	</form>

  </div>

@endsection
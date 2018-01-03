@extends('layout.master')

@section('content')

   <div class='col-sm-8'>
       
       <h1>Sign In</h1>



   <form method="POST" action="/login">

     {{ csrf_field() }}

       <div class="form-group">

        <label>Email:</label>
        <input type="email" id="email" name="email" class="form-control">
      
      </div>

      <div class="form-group">

        <label>Password:</label>
        <input type="password" id="password" name="password" class="form-control">
      
      </div>

      <div class="form-group">
         
         <button type="submit" class="btn btn-primary">Signin</button>

      </div>

      @include('layout.error')

   </form>

      </div> 
 

@endsection
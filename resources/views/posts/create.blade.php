@extends ('layout.master')

@section ('content')

<div class="col-sm-8 blog-main">

  <h1>This is my form</h1>

  <form method="POST" action="/posts">

  	{{ csrf_field() }}
  	
  	<div class="form-group">
     <label for="title">Title</label>
     <input type="text" class="form-control" id="title" name="title">
   </div>
   
   <div class="form-group">
     <label for="body">body</label>
     <textarea id="body" name="body" class="form-control"></textarea>
    
   </div>

  <div class="form-control">

   <button type="submit" class="btn-btn default">Submit</button>

  </div>

    @include('layout.error')

</div>
  

  </form>


  @endsection
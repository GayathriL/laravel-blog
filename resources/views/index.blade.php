<html>

<body>
<ul>
 @foreach($fruits as $fruit)
  
  <li>{{$fruit->fruit_name}}</li>

@endforeach
</ul>


</body>
</html>
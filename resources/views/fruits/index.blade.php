<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<ul>

    @foreach ($fruits as $fruit)

    <li>

    	<a href="/fruits/{{$fruit->id}}">{{ $fruit->fruits_name }}

        </a>
    </li>

    @endforeach

</ul>

</body>
</html>
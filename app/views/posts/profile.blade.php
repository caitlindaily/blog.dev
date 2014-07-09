@extends('layouts.postsmaster')
<link href="/webpage_ext/css/main.css" rel="stylesheet">
@section('content')
<html>
<head>	
	<title>Profile</title>
</head>
<body>
	<div class="container">
	<h1>Profile Info</h1>
	<hr>
	  <p>Author : {{ Auth::user()->first_name }}</p>
	  <p>Email : {{ Auth::user()->email }}	
	</div>  	
</body>
</html>
@stop
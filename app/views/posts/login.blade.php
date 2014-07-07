@extends('layouts.postsmaster')

@section('content')
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">	
	<title></title>
</head>
<body>
<div class="container">	
  <div class="form-group">
  	<div class"form-control">	
	{{ Form::open(array('action' => 'HomeController@doLogin')) }}	
	  {{ Form::label('email', 'Email') }}<br>
	  {{ Form::email('email') }}
	<br>	
	  {{ Form::label('password', 'Password') }}<br>
	  {{ Form::password('password') }}
	
	  {{ Form::submit('Log In') }}
	{{ Form::close() }}
</div>
   </div>
</div>    
</body>
</html>
@stop
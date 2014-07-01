@extends('layouts.master')

@section('content')
<html>
<head>

	<title>Create New Posts</title>
</head>
<body>
	<h1>Create New Posts</h1>
	@if ($errors->has('title'))
		{{ $errors->first('title', '<span class="help-block">:message</span>') }}
	@endif	

	{{ Form::open(array('action' => 'PostsController@store')) }}
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title') }}
		<br>
		{{ Form::label('body', 'Post Body') }}
		{{ Form::textarea('body') }}
		<br>
		{{ Form::submit('Submit') }}
	{{ Form::close() }}	
</body>
</html>
@stop
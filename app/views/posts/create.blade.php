@extends('layouts.master')

@section('content')
<html>
<head>

	<title>Create New Posts</title>
</head>
<body>

<form action="{{{ action('PostsController@store') }}}" method="POST">
	<label for="title">Title</label>
	<input type="text-area" id="title" name="title" value="{{{ Input::old('title') }}}">
	<br>
	<label for="body">Body</label>
	<textarea id="body" name="body">{{{ Input::old('body') }}}</textarea>
	<br>
	<input type="submit">
</form>

</body>
</html>
@stop
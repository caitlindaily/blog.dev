@extends('layouts.master')

@section('content')

	@if(isset($post))
		<h1>Edit Post</h1>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	@else
		<h1>Create New Post</h1>
		{{ Form::open(array('action' => 'PostsController@store')) }}
	@endif


	@if ($errors->has('title'))
		{{ $errors->first('title', '<span class="help-block">:message</span>') }}
	@endif	

	
	  <div>
		{{ Form::label('title', 'Title') }}<br>
		{{ Form::text('title') }}
	  </div>	
		<br>
	  <div>	
		{{ Form::label('body', 'Post Body') }}<br>
		{{ Form::textarea('body') }}
	  </div>	
		<br>
		{{ Form::submit('Submit') }}
	{{ Form::close() }}	



@stop
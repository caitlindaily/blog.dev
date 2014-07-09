@extends('layouts.postsmaster')

@section('content')

	<div class="container">
	@if(isset($post))
	  <h1>Edit Post</h1>
	   {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
	@else
	  <h1>Create New Post</h1>
	   {{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
	@endif
	</div>
<!--Error/Success Message-->
	@if ($errors->has('title'))
	  {{ $errors->first('title', '<span class="help-block">:message</span>') }}
	@endif	
<!--Create/Edit Form-->
<div class="container">
	<div>
	  {{ Form::label('title', 'Title') }}<br>
	  {{ Form::text('title') }}
	</div>	
    <br>
	<div>	
	  {{ Form::label('body', 'Post Body') }}<br>
	  {{ Form::textarea('body') }}
	</div>	
	<div>
		{{ Form::label('image', 'Upload Image') }}
		{{ Form::file('image') }}
	</div>	
    <br>
	  {{ Form::submit('Submit') }}
	  {{ Form::close() }}	
</div>
@stop
@extends('layouts.master')

@section('content')

{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	{{ Form::label('title', 'Title') }}
		{{ Form::text('title') }}
		<br>
		{{ Form::label('body', 'Post Body') }}
		{{ Form::textarea('body') }}
		<br>
		{{ Form::submit('Update') }}
{{ Form::close() }}


@stop
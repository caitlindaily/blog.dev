@extends('layouts.master')

<h1>All The Posts</h1>
<hr>
@section('content')

@foreach ($posts as $post) 
		{{ link_to_action('PostsController@show', $post->title, [$post->id]) }}
	<hr>	
@endforeach

{{ link_to_action('PostsController@create', 'New Post') }}

@stop		
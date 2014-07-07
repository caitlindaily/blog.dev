@extends('layouts.postsmaster')

@section('content')

<div class="container">
  <h1>{{{ $post->title }}}</h1>
  <hr>
  <h4>{{{ $post->user->email }}}</h4>
  <h4>{{{ $post->created_at }}}</h4>
	<p>{{{ $post->body }}}</p>
  <br>	
  {{ link_to_action('PostsController@edit', 'Edit this Post') }}
</div>

@stop
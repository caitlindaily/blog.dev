@extends('layouts.postsmaster')

@section('content')

<div class="container">
  <h1>{{{ $post->title }}}</h1>
  <hr>
  <h4>{{{ $post->user->email }}}</h4>
  <h4>{{{ $post->created_at }}}</h4>
	<p>{{{ $post->body }}}</p>
	@if ($post->img_path)
	   <img src="{{{ $post->img_path }}}"/>
	@endif
  <br>
  @if (Auth::check())	
  {{ link_to_action('PostsController@edit', 'Edit this Post', $post->id, array('class'=> 'btn btn-primary')) }}
  @endif
</div>

@stop
@extends('layouts.postsmaster')
<link href="/webpage_ext/css/main.css" rel="stylesheet">

@section('content')

<div class="container">
  <h1>{{{ $post->title }}}</h1>
  <hr>
  <h4>{{{ $post->user->email }}}</h4>
  <h4>{{{ $post->created_at }}}</h4>
	<p>{{ substr($post->purifyParseBody(), 0, 100) }}</p>
	@if ($post->img_path)
	   <img class="img-responsive" src="{{{ $post->img_path }}}"/>
	@endif
  <br>
  @if (Auth::check())	
  {{ link_to_action('PostsController@edit', 'Edit this Post', $post->id, array('class'=> 'btn btn-primary')) }}
  <a href="#" class="deletePost btn btn-default btn-sm" data-postid="{{ $post->id }}">Delete</a></td>
  @endif
</div>

<!--Hidden delete form-->
{{ Form::open(array('action' => 'PostsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
{{ Form::close() }}

@stop
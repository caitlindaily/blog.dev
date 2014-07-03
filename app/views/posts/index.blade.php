@extends('layouts.master')

@section('content')

<div class="container">
<h1>All The Posts</h1>
  <hr>
	<table class="table">
	  <tr>	
		<th>Title</th>
		<th>Date Created</th>
		<th>Action</th>
	  </tr>	
	  <tr>
		@foreach ($posts as $post) 
		  <td>{{ link_to_action('PostsController@show', $post->title, $post->id) }}</td>
		  <td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}<br>
		  	  {{ $post->created_at->diffForHumans() }}</td>
		  <td>{{ link_to_action('PostsController@edit', 'Edit', $post->id) }}
		  	  {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
				{{ Form::submit('Delete') }}
			{{ Form::close() }}</td>	
	  </tr>
	  	@endforeach		
	</table>
	
	<!--Create Post link-->	
		<div>
			<p>{{ link_to_action('PostsController@create', 'Create New Post') }}</p>
		</div>
	<!--Pagination-->
	<div>	
		{{ $posts->links() }}
	<div>	

	<!--Search Field-->
	<h2>Search Posts by Title</h2>
	<div>
		{{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
			{{ Form::text('search') }}
	  	{{ Form::submit('Search') }}
	</div>
		
	
	 
	
@stop		
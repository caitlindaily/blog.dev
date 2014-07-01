@extends('layouts.master')

<h1>All The Posts</h1>
<hr>
@section('content')
<table class="table">
  <tr>	
	<th>Title</th>
	<th>Date Created</th>
	<th>Action</th>
  </tr>	
  <tr>
	@foreach ($posts as $post) 
	  <td>{{ link_to_action('PostsController@show', $post->title, [$post->id]) }}</td>
	  <td>{{ $post->created_at }}</td>
	  <td>{{ link_to_action('PostsController@edit', 'Edit', [$post->id]) }}</td>	
  </tr>
  	@endforeach		
</table>
	{{ $posts->links() }}

	<p>{{ link_to_action('PostsController@create', 'Create New Post') }}</p>

@stop		
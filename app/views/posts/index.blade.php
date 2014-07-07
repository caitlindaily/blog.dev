@extends('layouts.postsmaster')

@section('content')
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h2 class="text-primary text-center">All The Posts</h2>
				<!--Search Field-->
				<h2>Search Posts by Title</h2>
				<div>
					{{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
						{{ Form::text('search') }}
				  	{{ Form::submit('Search') }}
				</div>	
				<table class="table table-striped">
				  <tr>	
					<th>Title</th>
					<th>Date Created</th>
					<th>Author</th>
					<!--Show Action Column if Logged In-->
					@if (Auth::check())
					<th>Action</th>
					@endif
				  </tr>	
				  <tr>
					@foreach ($posts as $post) 
					  <td>{{ link_to_action('PostsController@show', $post->title, $post->id) }}</td>
					  <td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}<br>
					  	  {{ $post->created_at->diffForHumans() }}</td>
					  <td>{{ $post->user->email }}</td>	  

					<!--Show Edit/Delete if Logged In-->  
					  @if (Auth::check())
					  <td>{{ link_to_action('PostsController@edit', 'Edit', $post->id, array('class' => 'btn btn-primary')) }}<br>
					  	  {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					  	  {{ Form::close() }}</td>
						@endif	
				  </tr>
				  	@endforeach		
				</table>
				<!--Create Post link if Logged In-->	
				@if (Auth::check())
				{{ link_to_action('PostsController@create', 'Create New Post', null, array('class' => 'btn btn-primary')) }}
				@endif
				<!--Pagination-->
				<div>	
					{{ $posts->appends(['search'=> Input::get('search')])->links() }}
				</div>
		
		</div>
	</div>
</div>
</body>
</html>
@stop

@extends('layouts.postsmaster')

@section('content')
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h2 class="text-primary text-center">All The Posts</h2>	
				<table class="table table-hover">
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
					  <td>{{ link_to_action('PostsController@edit', 'Edit', $post->id) }}<br>
					  	  {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
							{{ Form::submit('Delete') }}
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

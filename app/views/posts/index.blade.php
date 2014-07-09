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
					  <td>{{ link_to_action('PostsController@edit', 'Edit', $post->id) }}
					  	  <a href="#" class="deletePost btn btn-default btn-sm" data-postid="{{ $post->id }}">Delete</a></td>
						@endif	
				  </tr>
				  	@endforeach		
				</table>
				<!--Hidden delete form-->
				{{ Form::open(array('action' => 'PostsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
   				{{ Form::close() }}
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
<script type="text/javascript">
   $(".deletePost").click(function() {
       var postId = $(this).data('postid');
       $("#deleteForm").attr('action', '/posts/' + postId);
       if(confirm("Are you sure you want to delete this post?")) {
           $('#deleteForm').submit();
       }
   });
</script>
</body>
</html>
@stop

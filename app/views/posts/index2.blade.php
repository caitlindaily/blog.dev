<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap 3, from LayoutIt!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h2 class="text-primary text-center">All The Posts</h2>
				<table class="table table-striped">
				  <tr>	
					<th>Title</th>
					<th>Date Created</th>
					<th>Author</th>
					<th>Action</th>
				  </tr>	
				  <tr>
					@foreach ($posts as $post) 
					  <td>{{ link_to_action('PostsController@show', $post->title, $post->id) }}</td>
					  <td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}<br>
					  	  {{ $post->created_at->diffForHumans() }}</td>
					  <td>{{ $post->user->email }}</td>	  
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
					{{ $posts->appends(['search'=> Input::get('search')])->links() }}
				<div>
						<!--Search Field-->
				<h2>Search Posts by Title</h2>
				<div>
					{{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
						{{ Form::text('search') }}
				  	{{ Form::submit('Search') }}
				</div>	
		</div>
	</div>
</div>
</body>
</html>

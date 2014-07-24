@extends('layouts.postsmaster')

<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
</head>
@section('content')
<body>
  <div class="container">
	  <div class="row clearfix">
		  <div class="col-md-12 column">
			  <h1 class="main-heading text-center">The Daily Postings</h1>	
				<div class="post-container">
				 @foreach ($posts as $post) 
				  <h2>{{ link_to_action('PostsController@show', $post->title, $post->slug) }}</h2>
				   <p>Author: {{ $post->user->first_name}}, {{ $post->user->email }}</p>
				   <p><span class="glyphicon glyphicon-time"></span> {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}</p>	  
				   <blockquote><p>{{ $post->purifyParseBody(true) }}</p></blockquote>
				   <hr>
				  @endforeach
				</div>
			     <!--Pagination-->
			    <div class="center">	
				  {{ $posts->appends(['search'=> Input::get('search')])->links() }}
				</div>
		  </div>
	  </div>
  </div>

</body>
@stop
</html>


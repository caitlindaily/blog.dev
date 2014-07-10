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
				  <h2>{{ link_to_action('PostsController@show', $post->title, $post->id) }}</h2>
				  <p>Author: {{ $post->user->first_name}}, {{ $post->user->email }}</p>
				  <p><span class="glyphicon glyphicon-time"></span>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}</p>	  
				  <hr>
				  <blockquote><p>{{ $post->body }}</p></blockquote>
				  @endforeach
				 </div>
			     <!--Pagination-->
				  <div class="center">	
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
@stop
</html>


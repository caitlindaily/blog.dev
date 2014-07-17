@extends('layouts.master')

<html>
<head>
  <title>Portfolio</title>

@section('top-script')  
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link href="/webpage_ext/css/portfolio.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@stop 
</head>

@section('content')
<div class="container">
<h1>Groovy Things I Created</h1>
</div>
<hr>
<body>
<div class="thumbnails">	
<div class="container">	
	<!---First Box-->
	<div class="row">
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="/webpage_ext/img/todopic.jpg" alt="...">
	      <div class="caption">
	        <h3>ToDo List</h3>
	        <p>I made a todo list that adds items and then can be removed from a database. It was made with PHP, JQuery, HTML, and CSS.</p>
	        <p><a href="https://github.com/sweetrocker22/Web_Todo_List" class="btn btn-default" role="button">View GitHub</a></p>
	      </div>
	    </div>
		  </div>
		  	<!---Second Box-->
			<div class="row">
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="/webpage_ext/img/whackpic.jpg" alt="...">
			      <div class="caption">
			        <h3>Whack-A-Mole</h3>
			        <p>A 'whack-a-mole' concept game created while doing web exercises that involved using PHP, JQuery, HTML and CSS.</p>
			        <p><a href="https://github.com/sweetrocker22/Codeup_Web_Exercises/tree/master/public" class="btn btn-default" role="button">View GitHub</a></p>
			      </div>
			    </div>
			  </div>
			    <!---Third Box-->
				<div class="row">
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="/webpage_ext/img/blogpic.jpg" alt="...">
				      <div class="caption">
				        <h3>Personal Blog</h3>
				        <p>My blog was a back-to-front full stack project created by using the Laravel framework, MySQL database, PHP, JQuery, HTML, CSS, and Twitter Bootstrap.</p>
				        <p><a href="https://github.com/sweetrocker22/blog.dev" class="btn btn-default" role="button">View GitHub</a></p>
				      </div>
				    </div>
				  </div>
				</div>
		    </div>
	</div>
</div>
</div>
</body>
@stop
</html>
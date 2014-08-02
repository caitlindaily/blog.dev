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
			        <p><a href="/whack" class="btn btn-default" role="button">Play!</a><a href="https://github.com/sweetrocker22/Codeup_Web_Exercises/tree/master/public" class="btn btn-default" role="button">View Github</a></p>
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
				        <p><a href="https://github.com/sweetrocker22/blog.dev" class="btn btn-default" role="button">View GitHub</a><a href="https://caitlindaily.com/posts" class="btn btn-default" role="button">Visit Blog</a></p>
				      </div>
				    </div>
				  </div>
				</div>
		    </div>
	</div>
	<!---Second Row-->
		<!--First Box-->
		<div class="row">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="/webpage_ext/img/prosifter.jpg" alt="...">
		      <div class="caption">
		        <h3>proSifter.com</h3>
		        <p>A web app that allows a user to search and sift through companies and their reviews. Users can see an average rating for each company and rate them themselves. If they sign up as a user, their personal review can be recorded for a specific company. An administration page was made available to manage users for the app as well.
					It was built using PHP, JQuery with AJAX, HTML, CSS and Twitter Bootstrap. GitHub and Git were used for version control and was created in a Vagrant environment.</p>
		        <p><a href="http://www.prosifter.com" class="btn btn-default" role="button">View Website</a><a href="https://github.com/sweetrocker22/prosifter" class="btn btn-default" role="button">View Github</a></p>
		      </div>
		    </div>
		  </div>
		</div>
		<!--First Box-->
		<div class="row">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="/webpage_ext/img/prosifter.jpg" alt="...">
		      <div class="caption">
		        <h3>"Everything is Awesome" chrome extension</h3>
		        <p>A web app that allows a user to search and sift through companies and their reviews. Users can see an average rating for each company and rate them themselves. If they sign up as a user, their personal review can be recorded for a specific company. An administration page was made available to manage users for the app as well.
					It was built using PHP, JQuery with AJAX, HTML, CSS and Twitter Bootstrap. GitHub and Git were used for version control and was created in a Vagrant environment.</p>
		        <p><a href="http://www.prosifter.com" class="btn btn-default" role="button">View Website</a><a href="https://github.com/sweetrocker22/prosifter" class="btn btn-default" role="button">View Github</a></p>
		      </div>
		    </div>
		  </div>
		</div>
</div>
</div>
</body>
@stop
</html>
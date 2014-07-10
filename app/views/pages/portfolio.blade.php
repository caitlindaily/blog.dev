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
<h1>Portfolio</h1>
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
	        <p>...</p>
	        <p><a href="#" class="btn btn-default" role="button">View</a></p>
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
			        <p>...</p>
			        <p><a href="#" class="btn btn-default" role="button">View</a></p>
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
				        <p>...</p>
				        <p><a href="#" class="btn btn-default" role="button">View</a></p>
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
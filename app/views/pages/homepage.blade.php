@extends('layouts.master')
<html>
<head>
	<!-- Custom styles for this template -->
    <link href="/webpage_ext/css/main.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600italic' rel='stylesheet' type='text/css'>	
    <title>Caitlin Daily</title>
</head>

@section('content')
<body>
<div class="container">
    	<div class="logo">
	    	
    	</div>
		<div class="row centered">
			<div class="col-lg-8 col-lg-offset-2 w">
				<h1>Caitlin Daily</h1>
                <h2>Web Developer</h2>
                <p>
                	"An eloquent thirst for life and nothing but optimism."
                </p>	
			</div>
		</div>
	</div>
 </div>
 @stop
 @section('bottom-script')
 <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="/webpage_ext/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("/webpage_ext/img/treeboth.jpg", {speed: 500});
    </script>
@stop    
</body>

</html>






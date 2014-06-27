<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="webpage_ext/ico/favicon.png">

    <title>C.Daily</title>

    <!-- Bootstrap core CSS -->
    <link href="webpage_ext/css/bootstrap.min.css" rel="stylesheet">
    <link href="webpage_ext/css/font-awesome.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="webpage_ext/css/main.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
</head>
<body>
	
    @yield('content')
   
   	  <!--Hyperlinks-->
    <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2 w tooltip-demo">
            <a data-toggle="tooltip" title="About Me" href="#"><i class="fa fa-heart"></i></a>
            <a data-toggle="tooltip" title="Resume" href="/resume"><i class="fa fa-file-text"></i>
            <a data-toggle="tooltip" title="Portfolio" href="/portfolio"><i class="fa fa-briefcase"></i></a>
            <a data-toggle="tooltip" title="Twitter" href="http://twitter.com/CaitlinDaily8"><i class="fa fa-twitter"></i></a>
            <a data-toggle="tooltip" title="Blog" href="#"><i class="fa fa-comment"></i></a>
            <a data-toggle="tooltip" title="Email Me!" href="mailto:cdaily87@gmail.com"><i class="fa fa-envelope"></i></a>
        </div>

	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="webpage_ext/js/bootstrap.min.js"></script>

    @section('bottom-script')
    <script>
        $('.tooltip-demo').tooltip({
          selector: "[data-toggle=tooltip]",
          container: "body"
        });
    </script>
    @stop
    
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="webpage_ext/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("webpage_ext/img/tree.jpg", {speed: 500});
    </script>
    @yield('bottom-script')
</body>
</html>

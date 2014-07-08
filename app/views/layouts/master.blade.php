<!doctype html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="/webpage_ext/css/icons.css">
  @yield('top-script')

 </head> 
<body>


    @yield('content')
   
    <div class="container">
   	  <!--Hyperlinks-->
    <div class="row centered">
      <div class="col-lg-8 col-lg-offset-2 w ">
         <a title="Resume" href="/resume"><i class="fa fa-file-text"></i>
         <a title="Portfolio" href="/portfolio"><i class="fa fa-briefcase"></i></a>
         <a title="Twitter" href="http://twitter.com/CaitlinDaily8"><i class="fa fa-twitter"></i></a>
         <a title="LinkedIn" href="http://www.linkedin.com/pub/caitlin-daily/61/2a1/b87/"><i class="fa fa-linkedin"></i></a>
         <a title="My Github" href="http://www.github.com/sweetrocker22"><i class="fa fa-github-square"></i>
         <a title="Blog" href="/posts/"><i class="fa fa-comment"></i></a>
         <a title="Email Me!" href="mailto:cdaily87@gmail.com"><i class="fa fa-envelope"></i></a>
      </div>
    </div>
  </div>

    <br>
    <br>
    
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/webpage_ext/js/bootstrap.min.js"></script>

    

   
    
 @yield('bottom-script')
 

</body>
</html>

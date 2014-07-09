<html>
<head>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hover" href="/posts">The Daily Blog</a>
    </div>
      <div class="navbar-collapse collapse">
         <!--Left NavBar-->
        {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search')) }}
        <div class="form-group">
          {{ Form::text('search', Input::get('search'), array('class' => 'form-control', 'placeholder' => 'Search By Title')) }}
        </div>
        {{ Form::submit('Submit', array('class' =>'btn btn-default')) }}
        {{ Form::close() }}
       <!--Right NavBar-->     
          <ul class="nav navbar-nav navbar-right hover">
           @if (Auth::check())
            <li><h3>{{ Auth::user()->email }}</h3></li>  
            <li>{{ link_to_action('PostsController@create', 'Create Post') }}</li>
            <li>{{ link_to_action('HomeController@logout', 'Log Out') }}</li>
           @else  
            <li>{{ link_to_action('HomeController@showLogin', 'Login') }}</li>
           @endif  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div><!-- /.container-fluid -->
</nav>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CDaily Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

<body>
    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif
	<div class="container">	
	@if (Auth::check())
    {{ Auth::user()->email }}
    {{ link_to_action('PostsController@create', 'Create Post', null, array('class' => 'btn-sm btn-success')) }}
    {{ link_to_action('HomeController@logout', 'Log Out', null, array('class' => 'btn-sm btn-danger')) }}

	@else
    {{ link_to_action('HomeController@showLogin', 'Login') }}

  @endif
   </div>

   @yield('content')
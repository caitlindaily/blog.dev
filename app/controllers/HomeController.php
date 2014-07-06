<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHomepage()
	{
		return View::make('pages.homepage');
	}

	public function showResume()
	{
		return View::make('pages.resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showBlog()
	{
		return View::make('posts.create');
	}

	public function sayHello($name)
	{
        $data = [

         	'name' => $name
         ];
         return View::make('temp.my-first-view')->with($data);
    }

}

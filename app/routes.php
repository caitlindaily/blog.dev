<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@showHomepage');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');



	
// 	$post = Post::find(1);
// 		echo $post->title . "<br>";
// 	 	echo $post->body . "<br>";
// 	$post->title = "This is a NEW Title";
// 	$post->save();

// });

// Route::get('/sayhello/{name}', 'HomeController@sayHello');


// Route::get('/rolldice/{guess}', function($guess) {

// 	$randNum = mt_rand(1, 6);
// 	$data = [
// 		'guess'=> $guess,
// 		'randNum' => $randNum
// 	];

// 	return View::make('roll-dice')->with($data);

// });














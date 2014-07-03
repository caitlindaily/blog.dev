<?php

class PostsController extends \BaseController {


	public function __construct()
	{
    // call base controller constructor
    	parent::__construct();

    // run auth filter before all methods on this controller except index and show
    	$this->beforeFilter('auth.basic', array('except' => array('index', 'show')));
	}

	public function index()
	{		
		if (Input::has('search')) {

			$search = Input::get('search');
			$posts = Post::where('title', 'LIKE', "%$search%")->orderBy('createdAt', 'desc')->paginate(5);
			return View::make('posts.index')->with('posts', $posts);

		} else {

			$posts = Post::orderBy('created_at', 'desc')->paginate(5);
			return View::make('posts.index')->with('posts', $posts);
		}
	}
		

	public function create()
	{
		return View::make('posts.create-edit');
	}

	public function store()
	{
		//Create instance of validator and use make. Want to validate all input with the rules from Post.
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {

			Session::flash('errorMessage', 'There were errors with your submission.');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			Session::flash('successMessage', 'Post was created successfully!!!');
			return Redirect::action('PostsController@index');

		}

	}


	public function show($id)
	{	
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}


	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.create-edit')->with('post', $post);
		
	}


	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {

			Session::flash('errorMessage', 'There were errors with your update.');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			Session::flash('successMessage', 'Your post was updated!!!');
			return Redirect::action('PostsController@index');
		}
	}


	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage', 'Post was successfully deleted.');
		return Redirect::action('PostsController@index');
	}


}

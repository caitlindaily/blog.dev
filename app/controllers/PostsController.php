<?php

class PostsController extends \BaseController {


	public function index()
	{
		$posts = Post::paginate(5);;
		return View::make('posts.index')->with('posts', $posts);
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

			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
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

			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			return Redirect::action('PostsController@index');
		}
	}


	public function destroy($id)
	{
		return "Delete a specific post.";
	}


}

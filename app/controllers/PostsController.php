<?php

class PostsController extends \BaseController {


	public function index()
	{
		return "Show list of all posts.";
	}

	public function create()
	{
		Log::info(Input::all());
		return View::make('posts.create');
	}

	public function store()
	{
		return Redirect::back()->withInput();
	}


	public function show($id)
	{
		return "Show a specific post.";
	}


	public function edit($id)
	{
		return "Show a form for editing a specific post.";
	}


	public function update($id)
	{
		return "Update a specific post.";
	}


	public function destroy($id)
	{
		return "Delete a specific post.";
	}


}

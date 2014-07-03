<?php

class Post extends BaseModel {

	//The db table that this model relates to
    protected $table = 'posts';

    //Validation rules for our model properties
    //Static means you don't need to create an instance to use it
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required'
    ];

}
<?php

class Post extends BaseModel {

	//The db table that this model relates to
    protected $table = 'posts';

    protected $imgDir = 'img-upload';

    //Validation rules for our model properties
    //Static means you don't need to create an instance to use it
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required'
    ];

    public function user() {

        return $this->belongsTo('User');
    }

    public function addUploadedImage($image) {

        $systemPath = public_path() . '/' . $this->imgDir . '/';
        $imageName = $this->id . '-' . $image->getClientOriginalName();
        $image->move($systemPath, $imageName);
        //starts with slash because inside blog.dev, this directory format will point to where the image is located
        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }

}
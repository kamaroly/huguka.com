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

Route::get('/',['as'	=>'home', function()
{
	return View::make('partials.home');
}]);

////////////////////
// Lessons routes //
////////////////////

Route::group(['prefix'	=>	'lessons'],function(){

    // Get all lessons
    Route::get('/',function(){

    	$lesson 	= Lesson::find(1);
    	return $lesson->tags;
    });

	// Show a lesson
	Route::get('/{lesson_slug}',function($lesson_slug){
		return $lesson_slug;
	});
});

//////////////////
// Tags routes  //
//////////////////

Route::group(['prefix'	=>	'tags'],function(){

	//Get all tags
	Route::get('/',function(){

		$tag 	= 	Tag::find(2);
		return $tag->lessons;
	});
});

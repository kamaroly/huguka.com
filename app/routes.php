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
	$lessons 	= Lesson::take(9)->get();

	return View::make('partials.home',['lessons' => $lessons ]);
}]);

Route::get('subs', function()
{
  return View::make('sentinel::emails.reset',['resetCode' => 238923,'userId' => 9]);
});


//Route
Route::get('/search',function(){
	return View::make('Search');
});
Route::get('search/autocomplete', 'SearchController@searchUser');


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
		// return $lesson_slug;
		return View::make('lessons.watch');
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

///////////////////
// Forum Routes  //
///////////////////

Route::get('forum', 'ForumController@getCategory');
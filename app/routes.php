<?php
Route::get('/test',function()
	{
		return dd(new Sentry);
	});

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
    Route::get('/','LessonController@index');

	// Show a lesson
	Route::get('/{lesson_slug}','LessonController@show');

});

//////////////////
// Tags routes  //
//////////////////

Route::group(['prefix'	=>	'tags'],function(){

	//Get all tags
	Route::get('/','LessonController@tags');
	
	Route::get('/{tag}','LessonController@tag');
});

<?php
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

//////////////////////////
// administrator routes //
//////////////////////////

Route::group(['prefix'	=> 'admin' ,'before' => 'wardrobe.auth' ],function()
	{
		Route::group(['prefix' => 'lessons'], function()
			{
				Route::get('/', ['as'   => 'admin.lessons.index','uses' => 'LessonController@adminIndex']);
				Route::get('add', ['as' => 'admin.lessons.add','uses'   => 'LessonController@create']);
				Route::post('save',['as' => 'admin.lessons.save','uses'=> 'LessonController@store']);
				Route::post('save/{id}',['as' => 'admin.lessons.save','uses'=> 'LessonController@update']);
				Route::get('/{id}',['as' => 'admin.lessons.edit','uses'=> 'LessonController@edit']);
			});
	});



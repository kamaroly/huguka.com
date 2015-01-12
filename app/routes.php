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
  $data   =   [ 'names'           => 'Kamaro Lambert',
                'invoice_number'  => '49982309',
                'date'            => date('d-M-Y'),
                'item'            => 'Kwiyandishya ukwezi kumwe',
                'price'           => 5000,
                'paid'            => 5000
               ];

  return View::make('emails.activated',$data);
});

Route::get('/mail', function()
{
  Mail::send('emails.subscribe', [], function($message)
  	{
  		$message->from('info@huguka.com')
              ->to('kamaroly@gmail.com')
              ->subject('subscription to Huguka');
  	});
  if( count(Mail::failures()) > 0 ) {

   return  "There was one or more failures. They were: <br />";

   foreach(Mail::failures as $email_address) 
   {
       return  " - $email_address <br />";
    }

} else {
    return  "No errors, all sent successfully!";
}
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

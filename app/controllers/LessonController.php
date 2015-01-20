<?php 
/**
* Lesson controller
*/
class LessonController extends BaseController
{
	/**
	 * Show lessons
	 * @return View
	 */
	public function index()
	{
		$lessons=Lesson::paginate(30);

		return View::make('lessons.list',compact('lessons'));
	}
    
    /**
     * Watch a slesson
     * @param  string $slug [description]
     * @return [type]       [description]
     */
	public function show($slug)
	{   
		// Retrieve the lesson 
		$lesson=Lesson::slug($slug)->first();
        
        // Get the lesson with same tags
    	$tagids = Tag::tagIds($lesson->tags);
        
        // Get the ids of the lessons
        $lesson_ids = DB::table('lesson_tag')
    	                       ->select('lesson_id as id')
    	                       ->whereIn('tag_id', $tagids )
    	                       ->where('lesson_id','!=',$lesson->id)
    	                       ->get();

        // Get ids of the related lesson
        $lesson_id_array = Tag::tagids($lesson_ids);
        
        $related = [];
        if (count($lesson_id_array)>0)
        { 	
        // Get the lessons that are related to this one
        $related = Lesson::whereIn('id',$lesson_id_array)->get();
        }

		return View::make('lessons.watch',compact('lesson','related'));
	}

	/**
	 * Show lessons per tag
	 * @return View
	 */
	public function tags()
	{
		$lessons = Lesson::with('tags')->get();

		return View::make('lessons.list',compact('lessons'));
	}
	/**
	 * Show lessons per tag
	 * @return View
	 */
	public function tag($tagname)
	{
		$tag = Tag::name($tagname)->first();

		$lessons = $tag->lessons;

		return View::make('lessons.list',compact('lessons'));
	}


}

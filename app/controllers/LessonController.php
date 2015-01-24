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
        
        $lesson_id_array = [];

        if(count($tagids) > 0)
        {
        // Get the ids of the lessons
        $lesson_ids = DB::table('lesson_tag')
    	                       ->select('lesson_id as id')
    	                       ->whereIn('tag_id', $tagids )
    	                       ->where('lesson_id','!=',$lesson->id)
    	                       ->get();

        // Get ids of the related lesson
        $lesson_id_array = Tag::tagids($lesson_ids);
        }

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
    
    /**
     * Display lessons for the admin interface
     * @return View
     */	
	public function adminIndex()
	{
		$lessons = Lesson::paginate(20);

		return View::make('admin.lessons.index', compact('lessons'));
	}
    
    /**
     * Display lesson creation form
     * @return View
     */
    public function create()
     {
     	return View::make('admin.lessons.create', []);
     } 
 	
 	/**
 	 * Store new lesson to the databse
 	 * @return Redirect
 	 */
 	public function store()
 	{
 	  $data=Input::all();
 	  // Generate a slug 
 	  $data['slug']	= Lesson::uniqueSlug($data['title']);
   	 	
   	  $this->validates($data);

 	  // Attempt to save lesson in the database 
 	  try {
 	  	$this->save(new Lesson,$data );
 	  } 
 	  catch (Exception $e) 
 	  {
 	    Log::error('Something went wrong while saving the lesson'.$e);

 	    return $e;
 	    /** 
 	     * @todo create exception class and log it
 	     */
 	  }

 	  return Redirect::to('admin/lessons');
 	}
    
    /**
     * Show a lesson resource in the form
     * @param  lessonId
     * @return View
     */
 	public function edit($lessonId)
 	{
 		$lesson = Lesson::findOrFail($lessonId);
        
 		return View::make('admin.lessons.edit', compact('lesson'));
 	}
    
    /**
     * Update a lesson in the database
     * @param  lessonid
     * @return Redirect
     */
 	public function update($lessonId)
 	{
 	    $data 	 = Input::all();
        
 		$lesson  = Lesson::findOrFail($data['lessonId']);
       
 		if ($this->validates($data) === true) 
 		{
 			$this->save($lesson,$data);
             
            Session::flash('success','Lesson well updated in the database');

 			return Redirect::to('admin/lessons');
 		}
          
        Session::flash('error','Something wrong happened while trying to save the lesson');

        return Redirect::back();
 	}
   
    /**
     * Method to validate before saving in the databse
     * @param  $data   Data to validate
     * @param  $update Determine if the validation is for update or not
     * @return Boolean
     */
 	public function validates($data,$update=false)
 	{
 	  $rules = Lesson::$rules;

 	  if ($update !=false) 
 	  {
 	    $rules['slug'] 	= 'required';
 	  }
 	  // Attempt validation 
 	  $validation = Validator::make($data, $rules);

 	  if ($validation->fails())
 	  {
 	    return true;
 	  }

 	  return Redirect::back()->withInput()->withErrors($validation->messages());  
 	}

    /**
     * Save Lesson to the db
     * @param  Lesson Object
     * @param  Data to save
     * @return boolean
     */
 	public function save(Lesson $lesson,$data)
 	{
 		$lesson->title 		 = $data['title'];
 		$lesson->slug  		 = $data['slug'];
 		$lesson->body  		 = $data['body'];
 		$lesson->video_script= $data['video_script'];
 		$lesson->length 	 = $data['length'];
 		$lesson->difficulity = $data['difficulity'];
 		$lesson->icon 		 = $data['icon'];
 		$lesson->thumbnail   = isset($data['thumbnail']) ? $data['thumbnail'] : null ;
        
        return $lesson->save();
 	}
}

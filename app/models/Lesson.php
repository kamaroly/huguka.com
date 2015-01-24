<?php

class Lesson extends \Eloquent {

 /**
  * Roles for the lesson
  * @var array
  */
  public static $rules = [
  					'title'			=> 'required',
  					'slug'			=> 'required|unique:lessons',
  					'body'			=> 'required',
  					'length'		=> 'required',
  					'difficulity'   => 'required',
  					'video_script'	=> 'required',
  					'icon'			=> 'required',
  					 ];
  
  /**
   * Relationship with the tags table
   * @return THIS
   */
  public function tags()
	{
		return $this->belongsToMany('Tag');
	}
   
   /**
    * Get Lesson per slug
    * @param  [type] $query [description]
    * @param  [type] $slug  [description]
    * @return [type]        [description]
    */
   public function scopeSlug($query, $slug)
   {
   	  return $query->where('slug','=',$slug);
   }
   
   /**
    * Generate  unique slug in the Lesson Table
    * @param  title of the lesson
    * @return string
    */
   public static function uniqueSlug($title)
   {
   	  $slug = Str::slug($title);

   	  // Does this slug exists in the db ?
   	  $slugExists = self::where('slug','=',$slug)->first();

   	  if (count($slugExists) > 0)
   	   {
   	   	// This slug exists let's add a number to make it unique 
   	   	$slugLenght = strlen($slugExists);

   	   	$slugLastDig = (int) substr($slugExists, $slugLenght-1,$slugLenght);

   	   	$slugLastDig ++ ;

   	   	return $slug.="-$slugLastDig";
   	   }

   	  return $slug;
   }
}
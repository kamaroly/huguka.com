<?php
class Tag extends \Eloquent {

 /**
  * RelationShip with lesson
  * @return self
  */
 public function lessons()
 {
 	return $this->belongsToMany('Lesson');
 }

 /**
  * get Tag by Name
  * @param   $query   
  * @param   $tagname 
  * @return           
  */
 public function scopeName($query,$tagname)
 {
 	return $query->where('name','=',$tagname);
 }
 /**
  * Get tag IDS in array
  * @param  Object that has ID
  * @return array 
  */
 public static function tagIds($tag)
 {
   $tags = [];
   foreach ($tag as $tag)
   {
   	 $tags[] = (int) $tag->id;
   }
   return $tags;
 }
}
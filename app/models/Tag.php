<?php

class Tag extends \Eloquent {

 public function lessons()
 {
 	return $this->belongsToMany('Lesson');
 }

 public function scopeName($query,$tagname)
 {
 	return $query->where('name','=',$tagname);
 }

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
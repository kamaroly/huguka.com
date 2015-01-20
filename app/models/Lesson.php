<?php

class Lesson extends \Eloquent {

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}
  
   public function scopeSlug($query, $slug)
   {
   	  return $query->where('slug','=',$slug);
   }
}
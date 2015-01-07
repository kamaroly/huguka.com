<?php

class Lesson extends \Eloquent {

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}
}
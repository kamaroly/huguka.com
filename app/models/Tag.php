<?php

class Tag extends \Eloquent {

 public function lessons()
 {
 	return $this->belongsToMany('Lesson');
 }
}
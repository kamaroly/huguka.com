<?php 

 /**
 * 
 */
 class SearchController extends BaseController
	 {

	public function searchUser(){
		$term = Input::get('term');
		
		$results = array();
		
		$queries = DB::table('users')
			->where('email', 'LIKE', '%'.$term.'%')
			->take(5)->get();
		
		foreach ($queries as $query)
		{
		    $results[] = [ 'id' => $query->id, 'value' => $query->email.' '.$query->password ];
		}
	return Response::json($results);
	}

}
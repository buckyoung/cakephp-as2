<?php

class ReviewsController extends AppController{
	
	public function index(){
		//fetch all for listing
		$reviews = $this->Review->find('all');

		//Set for listing -- pass to view file
		$this->set('reviews', $reviews);
	}
	
	public function add(){
		if( $this->request->is('post') ){
			//save data
			$this->Review->save( $this->request->data );
			
			//Redirect -- BUG: will redirect before validating data
			//$this->redirect('/reviews/');
		}
	}
}

?>

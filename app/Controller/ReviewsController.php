<?php

class ReviewsController extends AppController{
	
	public function index(){
		$this->set('userid', $this->Auth->user('id'));
		$this->set('username', $this->Auth->user('username')); 
		//fetch all for listing
		$reviews = $this->Review->find('all');

		//Set for listing -- pass to view file
		$this->set('reviews', $reviews);
	}
	
	public function add(){
		$userid = $this->Auth->user('id');
		if ( !$userid ){ //not set

			$this->Session->setFlash(__('You must be logged in to add a review.'));
			return $this->redirect(array('action' => 'index')); //reload page to show flash

		} else {

			if( $this->request->is('post') ){
				//save data
				$this->request->data['Review']['user_id'] = $userid;
				$this->Review->create(); //????????
				$this->Review->save( $this->request->data );
				
				//Redirect -- BUG: will redirect before validating data
				//$this->redirect('/reviews/');
			}

		}
	}
}

?>

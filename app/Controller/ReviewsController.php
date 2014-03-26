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
		if( $this->request->is('post') ){
			//save data
			$this->request->data['Review']['user_id'] = $this->Auth->user('id');
			if ($this->Review->save( $this->request->data ) ){
				$this->Session->setFlash(__('Review created.'));
                return $this->redirect(array('action' => 'index'));
			}
			
			//Redirect -- BUG: will redirect before validating data
			//$this->redirect('/reviews/');
		}
	}
}

?>

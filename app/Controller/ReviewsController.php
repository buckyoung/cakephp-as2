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
			$this->request->data['Review']['user_id'] = $this->Auth->user('id'); //This is absolutely needed.
			if ($this->Review->save( $this->request->data ) ){
				$this->Session->setFlash(__('Review created.'));
                return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review could not be saved. Please, try again.'));
			}
		}
	}

	public function delete($id){
		if ($this->Review->delete($id)) {
			$this->Session->setFlash(__('Review Deleted.'));
	        return $this->redirect(array('action' => 'index'));
	    }

	}

	public function view($id){
		$this->set('username', $this->Auth->user('username')); 
		$this->set('review', $this->Review->findById($id));
	}

	public function edit($id){

		if( $this->request->is(array('post', 'put')) ){
			//save data
			$this->request->data['Review']['id'] = $id; //Review id
			
			$this->request->data['Review']['review_id'] = $review_id; //Review id
			$this->request->data['Review']['username'] = $this->Auth->user('username'); //This is absolutely needed.

			if ($this->Comment->save( $this->request->data ) ){
				$this->Session->setFlash(__('Comment Edited.'));
                return $this->redirect(array('controller' => 'reviews','action' => 'view', $review_id)); //go back to the view id we were on!
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
			
		} else {
			$this->request->data = $this->Comment->findById($id);

			pr($this->request->data['Comment']);
		}

	}
}

?>

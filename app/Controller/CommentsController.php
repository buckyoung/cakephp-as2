<?php

class CommentsController extends AppController{
	public $helpers = array('Html', 'Form');
	
	public function add($id){ //Pass review id 
		if( $this->request->is('post') ){
			//save data
			$this->request->data['Comment']['review_id'] = $id; //Review id
			$this->request->data['Comment']['user_id'] = $this->Auth->user('id'); //This is absolutely needed.
			$this->request->data['Comment']['username'] = $this->Auth->user('username'); //This is absolutely needed.
			if ($this->Comment->save( $this->request->data ) ){
				$this->Session->setFlash(__('Comment created.'));
                return $this->redirect(array('controller' => 'reviews','action' => 'view', $id)); //go back to the view id we were on!
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		}
	}

	public function delete($id, $review_id){
		if ($this->Comment->delete($id)) {
			$this->Session->setFlash(__('Comment Deleted.'));
	        return $this->redirect(array('controller' => 'reviews', 'action' => 'view', $review_id)); //go to the review id that we were on!
	    }
	}

	public function edit($id, $review_id){

		if( $this->request->is(array('post', 'put')) ){
			//save data
			$this->request->data['Comment']['id'] = $id; //Comment id
			$this->request->data['Comment']['review_id'] = $review_id; //Review id
			$this->request->data['Comment']['username'] = $this->Auth->user('username'); //This is absolutely needed.

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

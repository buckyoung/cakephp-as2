<?php

class CommentsController extends AppController{
	
	public function add($id){ //Pass review id 
		if( $this->request->is('post') ){
			//save data
			$this->request->data['Comment']['review_id'] = $id; //Review id
			if ($this->Comment->save( $this->request->data ) ){
				$this->Session->setFlash(__('Comment created.'));
                return $this->redirect(array('controller' => 'reviews','action' => 'view', $id)); //go back to the view id we were on!
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		}
	}

	public function delete($commentid, $reviewid){
		if ($this->Comment->delete($commentid)) {
			$this->Session->setFlash(__('Comment Deleted.'));
	        return $this->redirect(array('controller' => 'reviews', 'action' => 'view', $reviewid)); //go to the review id that we were on!
	    }

	}

	public function view($id){
		$this->set('review', $this->Comment->findById($id));
	}
}

?>

<?php

class MessagesController extends AppController{
	public $helpers = array('Html', 'Form');
	
	public function index(){
		$messages = $this->Message->findAllByRecipientId($this->Auth->user('id'));
		$this->set('userid', $this->Auth->user('id'));
		$this->set('username', $this->Auth->user('username')); 
		$this->set('messages', $messages);
	}

	public function delete($id){
		if ($this->Message->delete($id)) {
			$this->Session->setFlash(__('Message Deleted.'));
	        return $this->redirect(array('action' => 'index'));
	    }
	}

	public function add($to, $review_id){
		if( $this->request->is('post') ){
			//save data
			$this->request->data['Message']['user_id'] = $this->Auth->user('id'); //This is absolutely needed.
			$this->request->data['Message']['recipient_id'] = $to;

			if ($this->Message->save( $this->request->data ) ){
				$this->Session->setFlash(__('Message sent.'));

				if ($review_id == -1){ //return to message view
					return $this->redirect(array('controller' => 'Messages', 'action' => 'index')); //go to the review id that we were on!
				}
                return $this->redirect(array('controller' => 'reviews', 'action' => 'view', $review_id)); //go to the review id that we were on!
			} else {
				$this->Session->setFlash(__('The message could not be sent. Please, try again.'));
			}
		}
	}

	public function view($id){
		$this->set('message', $this->Message->findById($id));
	}

}

?>

<?php

class MessagesController extends AppController{
	public $helpers = array('Html', 'Form');
	
	public function view(){
		$messages = $this->Message->findAllByRecipientId($this->Auth->user('id'));
		pr($messages);

		$this->set('userid', $this->Auth->user('id'));
		$this->set('username', $this->Auth->user('username')); 
		$this->set('messages', $messages);
	}

	public function delete($id){
		if ($this->Message->delete($id)) {
			$this->Session->setFlash(__('Message Deleted.'));
	        return $this->redirect(array('action' => 'view'));
	    }

	}

	public function add($to){
		
	}

}

?>

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

}

?>

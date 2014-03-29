<?php

class MessagesController extends AppController{
	public $helpers = array('Html', 'Form');
	
	public function view($id){
		//$reviews = $this->Review->find('all');
		//$this->set('reviews', $reviews);

		$messages = $this->Message->findAllByUser_Id($this->Auth->user('id'));
		pr($messages);
		$this->set('userid', $this->Auth->user('id')); 
		

	}

}

?>

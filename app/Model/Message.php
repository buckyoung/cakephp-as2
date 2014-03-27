<?php

class Message extends AppModel{

	public $belongsTo = 'User';

	public $validate = array(

		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a title.'
			),
			
		'body' => array(
			'rule' => array('between', '0', '1000'),
			'message' => 'Please limit your message to 1000 characters.'
			)
		
		);

}

?>

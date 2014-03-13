<?php

class User extends AppModel{

	public $validate = array(

		'username' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a username.'
			),
		
		'password' => array(
			'rule' => array('between', '5', '20'),
			'message' => 'Please enter a password between 5 and 20 characters.'
			)
		
		
		);

}

?>

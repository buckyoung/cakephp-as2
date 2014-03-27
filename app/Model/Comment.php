<?php

class Comment extends AppModel{

	public $belongsTo = array('Review','User');

	public $validate = array(

		'body' => array(
			'rule' => array('between', '0', '1000'),
			'message' => 'Please limit your comment to 1000 characters.'
			)
		
		);

}

?>

<?php

class Review extends AppModel{

	public $belongsTo = 'User';

	public $validate = array(

		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a title.'
			),
		
		'rating' => array(
			'less' => array(
				'rule' => array('comparison', '<=', '10'),
				'message' => 'Please enter a rating from 0 to 10.'
				),
			'greater' => array(
				'rule' => array('comparison', '>=', '0'),
				'message' => 'Please enter a rating from 0 and 10.'
				)
			),
			
		'media' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a media type.'
			),
			
		'body' => array(
			'rule' => array('between', '0', '1000'),
			'message' => 'Please limit your review to 1000 characters.'
			)
		
		
		);

}

?>

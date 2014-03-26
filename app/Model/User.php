
<?php //User model

class User extends AppModel{

	public $validate = array(

		'username' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a username.'
			),
		
		'password' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a password.'
			)
		
		
		);

}

?>

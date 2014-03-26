
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

	public function beforeSave($options = array()) { //HASH PASSWORD before saving the data
	    if (isset($this->data[$this->alias]['password'])) {
			pr("hello");
	    }
	    return true;
	}

}

?>

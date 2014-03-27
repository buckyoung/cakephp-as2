
<?php //User model

App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel{

	public $hasMany = 'Review'; 

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
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password']
				= $passwordHasher->hash($this->data[$this->alias]['password']);
				
	    }
	    return true;
	}

}

?>

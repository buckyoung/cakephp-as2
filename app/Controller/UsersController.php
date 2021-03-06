<?php //user controller

class UsersController extends AppController{

	public $helpers = array('Html', 'Form');


	public function beforeFilter() { //allow a new user to add a user
        parent::beforeFilter();
        //allow unauthed to add a new user
        //allow logout (?)
        $this->Auth->allow('add', 'logout');

    }

	public function index(){
		//fetch all for listing
		$users = $this->User->find('all');

		//Set for listing -- pass to view file
		$this->set('users', $users);
	}
	
	
	public function add(){
		if( $this->request->is('post') ){
			//save data
			if($this->User->save( $this->request->data ) ){
				$this->Session->setFlash(__('Welcome, new user!'));
                	
                //Auto-login new users
                if ($this->Auth->login()) {   
	         	  	return $this->redirect($this->Auth->redirectUrl()); //redirects from the appcontroller
	        	} else {
              		$this->Session->setFlash(__('Error logging in after creating user, try to LOGIN'));
            	}

                //return $this->redirect(array('controller' => 'reviews', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
			
		}
	}

	
	public function login(){
		if ($this->request->is('post')) {
	        if ($this->Auth->login()) {   
	           	return $this->redirect($this->Auth->redirectUrl()); //redirects from the appcontroller
	        } else {
              	$this->Session->setFlash(__('Invalid username or password, try again'));
            }
    	}
			
	}

	public function logout() {
    	return $this->redirect($this->Auth->logout()); //redirects from appcontroller
	}



}

?>

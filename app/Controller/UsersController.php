<?php //user controller

class UsersController extends AppController{

//TODO: INIT auth components array

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
				$this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => '/index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
			
			//Redirect -- BUG: will redirect automatically without validating data
			//$this->redirect('/users/');
		}
	}

	
	public function login(){
		if( $this->request->is('post') ){
			//TODO: HANDLE login (sessions?)	
		}	
			
	}



}

?>

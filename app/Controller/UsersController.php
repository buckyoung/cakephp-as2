<?php

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
			$this->User->save( $this->request->data );
			
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

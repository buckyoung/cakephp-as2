<?php

class ReviewsController extends AppController{
	
	public function index(){

	}
	
	public function add(){
		if( $this->request->is('post') ){
			//save data
			$this->Review->save( $this->request->data );
		}
	}
}

?>

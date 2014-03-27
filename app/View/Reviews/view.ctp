<?php

	echo $this->Html->link('< Back to Reviews', array('action' => 'index') ); 
	
	echo "<h2>". $review['Review']['title'] ."</h2>";

	echo "<h3>By: ". $review['User']['username'] ."</h3>";

	echo "<h6>Created: ". $review['Review']['created'] ."</h6><br />";

	echo "<h4>Rating: ". $review['Review']['rating'] ."</h4>";

	echo "<h4>Type: ". $review['Review']['media'] ."</h4>";

	echo "<h2>". $review['Review']['body'] ."</h2>";

	echo "<br /><br /><br />";

	echo $this->Html->link('Send Message to '.$review['User']['username'], array('controller' => 'message', 'action' => 'add') ); 

	echo "<br /><p>Comments: </p>";

	//For each comment//
	foreach($review['Comment'] as $comment){
		pr($comment);
		echo "<br />";
		echo $comment['body'];
		//Get username
		$uname = $this->User->findById($comment['user_id']);
		echo "<br />by: " . $uname;
		echo "<br />Created: " . $comment['created'];
		echo "<br />";
	}
	



	echo $this->Html->link('Add a New Comment', array('controller' => 'comments', 'action' => 'add', $review['Review']['id']) ); 
	
?>

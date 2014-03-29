<?php

	echo $this->Html->link('< Back to Reviews', array('action' => 'index') ); 
	
	echo "<h2>". $review['Review']['title'] ."</h2>";

	echo "<h3>By: ". $review['User']['username'] ."</h3>";

	echo "<h6>Created: ". $review['Review']['created'] ."</h6><br />";

	echo "<h4>Rating: ". $review['Review']['rating'] ."</h4>";

	echo "<h4>Type: ". $review['Review']['media'] ."</h4>";

	echo "<h2>". $review['Review']['body'] ."</h2>";

	echo "<br />";

	echo $this->Html->link('Send Message to '.$review['User']['username'], array('controller' => 'message', 'action' => 'add', $id) ); 

	echo "<br /><br /><hr /><br /><p>Comments: </p>";

	//For each comment//
	foreach($review['Comment'] as $comment){

		echo "<br />";
		echo $comment['body'];
		echo "<br />by: " . $comment['username'];
		if ( $username == $comment['username'] ){
			echo " ";
			echo $this->Html->link('Edit', array('controller' => 'comments', 'action' => 'edit', $comment['id'], $comment['review_id']));
			echo " ";
			echo $this->Html->link('Delete', array('controller' => 'comments', 'action'=>'delete', $comment['id'], $comment['review_id']), array('confirm'=> 'Are you sure you wish to delete this comment?') ); //Might need to send reviewid
		} //NO ELSE
		echo "<br />Created: " . $comment['created'];
		echo "<br />";
	}
	
	echo "<br />";


	echo $this->Html->link('Add a New Comment', array('controller' => 'comments', 'action' => 'add', $review['Review']['id']) ); 
	
?>

<?php

	echo $this->Html->link('< Back to Messages', array('action' => 'index') ); 
	
	echo "<h3>From: ". $message['Message']['user_id'] ."</h3>";

	echo "<h2>". $message['Message']['title'] ."</h2>";

	echo "<h6>Created: ". $message['Message']['created'] ."</h6><br />";

	echo "<h2>". $message['Message']['body'] ."</h2>";

	echo "<br />";

	echo $this->Html->link('Reply to '.$Message['Message']['user_id'], array('controller' => 'messages', 'action' => 'add', $message['Message']['user_id'], -1) ); 

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

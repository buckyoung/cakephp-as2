<?php

	echo $this->Html->link('< Back to Messages', array('action' => 'index') ); 
	
	echo "<h3>From: ". $message['Message']['user_id'] ."</h3>";

	echo "<h2>Title: ". $message['Message']['title'] ."</h2>";

	echo "<h6>Created: ". $message['Message']['created'] ."</h6><br />";

	echo "<h2>Message: ". $message['Message']['body'] ."</h2>";

	echo "<br />";

	echo $this->Html->link('Reply to '.$Message['Message']['user_id'], array('controller' => 'messages', 'action' => 'add', $message['Message']['user_id'], -1) ); 
	
?>

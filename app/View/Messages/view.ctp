<?php
	
	echo $this->Html->link('< Back to Messages', array('action' => 'index') ); 

	echo "<h2>Title: ". $message['Message']['title'] ."</h2>";

	echo "<h3>From: ". $message['Sender']['username'] ."</h3>";

	echo "<h6>Created: ". $message['Message']['created'] ."</h6><br />";

	echo "<h2>Message: ". $message['Message']['body'] ."</h2>";

	echo "<br />";

	echo $this->Html->link('Reply to '.$message['Sender']['username'], array('controller' => 'messages', 'action' => 'add', $message['Sender']['id'], -1) ); 

	echo "<br />";
	echo "<br />";

	echo $this->Html->link('Delete', array('action'=>'delete', $message['Message']['id']), array('confirm'=> 'Are you sure you wish to delete this message?') );
	
?>

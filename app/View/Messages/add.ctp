<h2>Create Message</h2>

<?php

	echo $this->Form->create('Message');
	echo $this->Form->input('title');
	echo $this->Form->input('body');
	echo $this->Form->end('Send');	

?>

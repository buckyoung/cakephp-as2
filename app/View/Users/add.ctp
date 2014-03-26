<h2>Create New User</h2>

<?php

	echo $this->Form->create();
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->end('Add');	

?>

<h2>Create New User</h2>

<?php

	echo $this->Form->create();
	echo $this->Form->input('new_username');
	echo $this->Form->input('new_password');
	echo $this->Form->end('Add');	

?>

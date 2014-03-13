<h2>Add User to MySQL Database -- DEBUG PAGE</h2>

<?php

	echo $this->Form->create();
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->end('Add');	

?>

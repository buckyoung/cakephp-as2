<h2>Edit Comment</h2>

<?php

	echo $this->Form->create('EditComment');
	echo $this->Form->input('body');
	echo $this->Form->end('Save Edit');	

?>

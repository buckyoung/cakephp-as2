<h2>Edit Comment</h2>

<?php

	echo $this->Form->create('Comment');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->end('Save Edit');	

?>

<h2>Add Comment</h2>

<?php

	echo $this->Form->create('Comment');
	echo $this->Form->input('body');
	echo $this->Form->end('Add');	

?>

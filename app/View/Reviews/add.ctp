<h2>Add Review</h2>

<?php

	echo $this->Form->create('Review');
	echo $this->Form->input('title');
	echo $this->Form->input('rating');
	echo $this->Form->input('media');
	echo $this->Form->input('body');
	echo $this->Form->end('Add');	

?>

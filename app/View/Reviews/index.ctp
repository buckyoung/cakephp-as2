<h2>Reviews</h2>

<!--<p>(Logout)</p>
<p>(Messages)</p>-->

<?php	
	if ( !$userid ){ //if userid is not even set
		echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'));
		echo " or ";
		echo $this->Html->link('Create New User', array('controller' => 'users', 'action' => 'add'));
	} else {
		echo "Logged in as " . $username . "<br />";
		echo $this->Html->link('View Your Messages', array('controller' => 'messages', 'action' => 'view'));
		echo "<br />";
		echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));

	}
?>

<table>

<tr><th>Title</th><th>Rating</th><th>Media</th><th>Options</th><th>Created</th></tr>


<?php foreach($reviews as $review): ?>

	<tr>
		<td><?php 

		echo $this->Html->link($review['Review']['title'], array('action' => 'view', $review['Review']['id'])) ; 

		?></td>
		<td><?php echo $review['Review']['rating']; ?></td>
		<td><?php echo $review['Review']['media']; ?></td>
		<td><?php //OPTIONAL ACTIONS

		if ( $userid == $review['User']['id'] ){
			echo $this->Html->link('Edit', array('action' => 'edit', $review['Review']['id']));
			echo " ";
			echo $this->Html->link('Delete', array('action'=>'delete', $review['Review']['id']), array('confirm'=> 'Are you sure you wish to delete this review?') );
		} //NO ELSE

		?></td>
		<td><?php echo $review['Review']['created']; ?></td>
	</tr>
	
<?php endforeach; ?>


</table>

<br />
<p>
<?php
	//if ( $userid ){ //if userid is set
		echo $this->Html->link('Add Review', array('action' => 'add'));
	//}
?>
</p>



<!--<p>(EDIT / DELETE own review)</p>
<p>(Add Review)->{login if not}</p>-->


<!--
<p>4.</p>

<p>The index for the reviews controller must display the list of all reviews submitted by all users of the site.</p>
<p>It must offer users who are not logged in a link to log in.</p>
<p>It must offer users who are logged in a link to log out.</p>
<p>It must offer users who are logged in a link to their messages.</p>
<p>It must offer users who are logged in links to edit and delete any of their reviews.</p>
<p>It must not offer users links to edit or delete posts that they did not originally author.</p>
<p>It must offer users a link to add a new review.</p>
<p>Visitors who are not logged in should not be allowed to create reviews.</p>
-->

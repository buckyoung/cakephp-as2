<h2><?php echo $username . "'s Messages"; ?></h2>


<table>

<tr><th>From</th><th>Subject</th><th>Created</th></tr>


<?php foreach($messages as $message): ?>
	<tr>
		<td><?php pr($message);//debug
		echo $message['Message']['user_id'];?></td>
		<td><?php echo $message['Message']['title']; ?></td>
		<td><?php echo $message['Message']['created']; ?></td>
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

<?php echo $this->Html->link('< Back to Reviews', array('controller' => 'Reviews', 'action' => 'index') ); ?>
<h2><?php echo $username . "'s Messages"; ?></h2>

<?php
	echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));
	echo "<br />";
?>


<table>

<tr><th>Title</th><th>From</th><th>Options</th><th>Created</th></tr>


<?php foreach($messages as $message): ?>
	<tr>
		<td><?php echo $this->Html->link($message['Message']['title'], array('action' => 'view', $message['Message']['id'])); ?></td>
		<td><?php echo $message['Message']['user_id'];?></td>
		<td><?php echo $this->Html->link('Delete', array('action'=>'delete', $message['Message']['id']), array('confirm'=> 'Are you sure you wish to delete this message?') );?></td>
		<td><?php echo $message['Message']['created']; ?></td>
	</tr>
	
<?php endforeach; 

//echo $this->Html->link('Delete', array('action'=>'delete', $review['Review']['id']), array('confirm'=> 'Are you sure you wish to delete this review?') );

?>


</table>

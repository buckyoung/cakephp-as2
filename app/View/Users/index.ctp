<h2>User Index -- DEBUG</h2>

<table>
<tr><th>ID</th><th>Username</th><th>Password</th><th>Created</th></tr>

<?php foreach($users as $user): ?>

	<tr>
		<td><?php echo $user['User']['id']; ?></td>
		<td><?php echo $user['User']['username']; ?></td>
		<td><?php echo $user['User']['password']; ?></td>
		<td><?php echo $user['User']['created']; ?></td>
	</tr>
	
<?php endforeach; ?>

</table>


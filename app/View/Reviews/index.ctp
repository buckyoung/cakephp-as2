<h2>Reviews</h2>

<!--<p>(Logout)</p>
<p>(Messages)</p>-->

<p><a href="/~bcy3/cakephp/users/login">Login</a> or <a href="/~bcy3/cakephp/users/add">Create New User</a></p>

<table>

<tr><th>Title</th><th>Rating</th><th>Media</th><th>Options</th><th>Created</th></tr>


<?php foreach($reviews as $review): ?>

	<tr>
		<td><?php echo $review['Review']['title']; ?></td>
		<td><?php echo $review['Review']['rating']; ?></td>
		<td><?php echo $review['Review']['media']; ?></td>
		<td>x x x</td>
		<td><?php echo $review['Review']['created']; ?></td>
	</tr>
	
<?php endforeach; ?>


</table>

<p><a href="/~bcy3/cakephp/reviews/add">Add Review</a></p>



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

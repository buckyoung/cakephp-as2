<h2><?php 
	$review['Review']['title']; 
?></h2>

<?php

	echo "<h2>By: ". $review['User']['username'] ."</h2>";

	echo "<h3>Created: ". $review['Review']['created'] ."</h3>";

	echo "<h4>Rating: ". $review['Review']['rating'] ."</h4>";

	echo "<h5>Type: ". $review['Review']['media'] ."</h5>";

	echo "<h6>Rating: ". $review['Review']['body'] ."</h6>";

	echo "";

	echo "<p>Comments: </p>";

	echo "";

/*
      [id] => 2
            [title] => yo
            [body] => woa doge
            [rating] => 8
            [media] => wow
            [created] => 2014-03-27 01:36:33
            [modified] => 2014-03-27 01:36:33
            [user_id] => 1
        )

*/
?>

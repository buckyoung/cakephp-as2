<h2><?php 
	$review['Review']['title']; 
?></h2>

<?php

	echo "<h3>By: ". $review['User']['username'] ."</h3>";

	echo "<h6>Created: ". $review['Review']['created'] ."</h6>";

	echo "<h4>Rating: ". $review['Review']['rating'] ."</h4>";

	echo "<h4>Type: ". $review['Review']['media'] ."</h4>";

	echo "<h2>". $review['Review']['body'] ."</h2>";

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

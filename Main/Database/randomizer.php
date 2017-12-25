<?php
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');


$range_result = mysqli_query( $db ," SELECT MAX(`id`) AS max_id , MIN(`id`) AS min_id FROM `recipe2` ");
$range_row = mysqli_fetch_object( $range_result );
$random = mt_rand( $range_row->min_id , $range_row->max_id );
$sql = mysqli_query( $db, " SELECT * FROM `recipe2` WHERE `id` >= $random LIMIT 5 "); 

//$result = $db->query($sql);
$row = mysqli_fetch_assoc($sql);


    echo "<br>" . $row['foodname']. "  | difficulty:  ".$row['difficulty'] . "  |  rating: ". $row['rating'] . "<br>";
	  echo "" . $row['image']. "  <br><br>ingredients: ".$row['ingredients'] . "    <br><br>preparation: ". $row['preparation'] . "<br>";
	


?>
<?php
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');


$range_result = mysqli_query( $db ," SELECT MAX(`id`) AS max_id , MIN(`id`) AS min_id FROM `finalrecipe` ");
$range_row = mysqli_fetch_object( $range_result );
$random = mt_rand( $range_row->min_id , $range_row->max_id );
$sql = mysqli_query( $db, " SELECT * FROM `finalrecipe` WHERE `id` >= $random LIMIT 5 "); 

//$result = $db->query($sql);
$row = mysqli_fetch_assoc($sql);


	  echo "" .  "<img src='".$row['imageurl'] ."' width='450', height='450'>"   . "<br><h1><strong>" . $row['foodname']. " </strong> | difficulty:  ".$row['difficulty'] . "  |  rating: ". $row['rating'] . "</h1><br>";
	    echo  "  <br><br><h3>ingredients:</h3> ".$row['ingredients'] . "    <br><br><h3>preparation:</h3> ". $row['preparation'] . "<br>";
 

?>
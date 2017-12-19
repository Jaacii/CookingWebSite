<?php
$db=mysql_connect  ('localhost', 'root', '', 'cooking4you') or die ('I cannot connect to the database  because: ' . mysql_error()); 



$range_result = mysql_query( " SELECT MAX(`id`) AS max_id , MIN(`id`) AS min_id FROM `testrecipe` ");
$range_row = mysql_fetch_object( $range_result ); 
$random = mt_rand( $range_row->min_id , $range_row->max_id );
$result = mysql_query( " SELECT * FROM `recipe` WHERE `id` >= $random LIMIT 0,1 "); 
		//evtl woanders einordnen evtl limit ändern
		
	   while($row = $result->fetch_assoc()) {
	   echo "</br>" . $row["pic"]. "  " . $row["foodname"]. "   difficulty:   " . $row["difficulty"]. " rating:   " . $row["rating"]. "<br>";
		}
		 else {
    echo "No recipes uploaded yet.";
		}
$conn->close();

?>
<?php
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');


//irgendwas stimmt npch nicht und das else kann nicht einzeln stehen. habe ein if vergessen. außerdem header fehlt
$range_result = mysql_query( " SELECT MAX(`id`) AS max_id , MIN(`id`) AS min_id FROM `testrecipe` ");
$range_row = mysql_fetch_object( $range_result ); 
$random = mt_rand( $range_row->min_id , $range_row->max_id );
$result = mysql_query( " SELECT * FROM `testrecipe` WHERE `id` >= $random LIMIT 0,1 "); 
		//evtl woanders einordnen evtl limit ändern
		
	   while($row = $result->fetch_assoc()) {
	   echo "</br>" . $row["pic"]. "  " . $row["foodname"]. "   difficulty:   " . $row["difficulty"]. " rating:   " . $row["rating"]. "<br>";
		}
		 //else {
    //echo "No recipes uploaded yet.";
	//	}
$conn->close();

?>
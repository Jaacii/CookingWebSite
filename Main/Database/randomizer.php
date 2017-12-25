<?php
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');

 //SELECT MAX(id) FROM tablename;
//http://php.net/manual/de/function.rand.php
//https://stackoverflow.com/questions/3133711/select-last-id-without-insert

// x = min id 1.   y = max id.   evtl y =SELECT MAX(id) FROM tablename;

$x = 1;
$y = "SELECT MAX(id) FROM testrecipe";

/*
$randomindex = rand($x , $y);
echo $randomindex;
$sql = "SELECT * FROM recipe WHERE id= $randomindex";
$result = $dbconnect-> query($sql);
$row = mysqli_fetch_assoc($result);

echo "</br>" . $row["pic"]. "  " . $row["foodname"]. "   difficulty:   " . $row["difficulty"]. " rating:   " . $row["rating"]. "<br>";
*/
 //header('location: ../mainview.php');		header -> testpage alles richtig anordnen





$range_result = mysqli_query( $db ," SELECT MAX(`id`) AS max_id , MIN(`id`) AS min_id FROM `recipe2` ");
$range_row = mysqli_fetch_object( $range_result );
$random = mt_rand( $range_row->min_id , $range_row->max_id );
$sql = mysqli_query( $db, " SELECT * FROM `recipe2` WHERE `id` >= $random LIMIT 5 "); 

//$result = $db->query($sql);
$row = mysqli_fetch_assoc($sql);


    echo "<br>" . $row['foodname']. "  | difficulty:  ".$row['difficulty'] . "  |  rating: ". $row['rating'] . "<br>";
	  echo "" . $row['image']. "  <br><br>ingredients: ".$row['ingredients'] . "    <br><br>preparation: ". $row['preparation'] . "<br>";
	







/*
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
*/
?>
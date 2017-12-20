<?php   //SELECT MAX(id) FROM tablename;
//http://php.net/manual/de/function.rand.php
//https://stackoverflow.com/questions/3133711/select-last-id-without-insert

// x = min id 1.   y = max id.   evtl y =SELECT MAX(id) FROM tablename;

$x = 1;
$y = "SELECT MAX(id) FROM testrecipe"

$randomindex = rand($x , $y);
echo $randomindex;
$sql = "SELECT * FROM recipe WHERE id= $randomindex";
$result = $dbconnect-> query($sql);
$row = mysqli_fetch_assoc($result);

echo "</br>" . $row["pic"]. "  " . $row["foodname"]. "   difficulty:   " . $row["difficulty"]. " rating:   " . $row["rating"]. "<br>";

?>

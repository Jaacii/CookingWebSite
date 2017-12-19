<?php   //SELECT MAX(id) FROM tablename;
//http://php.net/manual/de/function.rand.php
//https://stackoverflow.com/questions/3133711/select-last-id-without-insert

// x = min id 1.   y = max id.   evtl y =SELECT MAX(id) FROM tablename;


$randomindex = rand(x , y);
echo $randomindex;
$sql = "SELECT var1, var2, var3, var5 FROM dbname WHERE id= $randomindex";
$result = $dbconnect-> query($sql);
$row = mysqli_fetch_assoc($result);

echo "<p> text " . $row['var1'] ; // etc

?>

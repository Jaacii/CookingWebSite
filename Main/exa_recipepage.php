<!DOCTYPE html>


<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Kochdatenbank</title>
	<link rel="stylesheet" href=stylerecipe.css>
</head>

<body>
<nav> 
 <div class=navigation>
  <a href ="mainview.php">| Home |</a> <a href ="search.php"> Search |</a>  <a href ="random.php"> Random |</a> <a href ="contactview.php"> Contact |</a> <a href ="aboutview.php"> About |</a> <a href ="test.php"> Members |</a><a href ="allrecipeview.php"> Recipes |</a><!-- -->
 </nav>
<div class=sidebar>
<?php
//wie kriege ich die idee beim anklicken automatisch aktualisiert.
$id =1;													//get id von suche oder vom drauf klicken auf bild??
$db=mysql_connect  ('localhost', 'root', '', 'cooking4you');
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT   ingredients ,difficulty, rating  FROM testrecipe WHERE id = $id";
$result = $db->query($sql);
if ($result->num_rows > 0) {
   // Jede Reihe ausgeben
   while($row = $result->fetch_assoc()) {
	   echo "</br>Ingredients: " . $row["ingredients"].  "  </br> difficulty:   " . $row["difficulty"]. " </br>rating:   " . $row["rating"]. "<br>";
		}
} else {
    echo "No recipes uploaded yet.";
}

?>

</div>
<div class=maincontent>
<img src="img_placeholder/KimchiPlaceholder.jpg" alt="Kimchi" width="350" height="230">
<?php
$sql2 = "SELECT   pic ,foodname, preparation  FROM testrecipe WHERE id = $id";
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) {
   // Jede Reihe ausgeben
   while($row = $result->fetch_assoc()) {
	   echo "</br>" . $row["pic"].  "  </br> Recipe for:   " . $row["foodname"]. " </br></br>preparation:  </br> " . $row["preparation"]. "<br>";
		}
} else {
    echo "No recipes uploaded yet.";
}

$conn->close();
?>
</div>


</body>

</html>
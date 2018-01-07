<!DOCTYPE html>
<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Cooking4You</title>
	<link rel="stylesheet" href=stylesheet.css>
</head>
<body>
<div class=sidebar> 
<img src="img_placeholder/werbeplaceholder.jpg">
</br>
 <a href ="register.php">|Sign up</a>
  <a href ="login.php">| Login |</a>
 </br>
  <a href ="newsletter_view.php">| Subscribe to our Newsletter |</a>

</div>
<header class=headclass> <!--Logo-->
 <h1>Kochdatenbank</h1>

 <nav> 
 <div class=navigation>
 <a href ="mainview.php">| Home |</a> <a href ="search_view.php"> Search |</a>  <a href ="random_view.php"> Random |</a> <a href ="contactview.php"> Contact |</a> <a href ="aboutview.php"> About |</a> <a href ="memberlist_view.php"> Members |</a><a href ="recipelist_view.php"> Recipes |</a><!-- --> 
 </nav>
 
 </header>
 <!--   HEADER end -->
 
 </br>

 
 <div class = loginblock>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cooking4you";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, foodname, difficulty, rating FROM finalrecipe";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // Jede Reihe ausgeben
   while($row = $result->fetch_assoc()) {
	  echo "<a href='exa_recipepage.php?food_id=".$row['id']."' >". $row['foodname'].  " difficulty: ".$row['difficulty']." |    rating: ".$row['rating']."</a></br>";
		}
} else {
    echo "No recipes uploaded yet.";
}
$conn->close();
?>

</div>
 
 
 
 </body>
 </html>
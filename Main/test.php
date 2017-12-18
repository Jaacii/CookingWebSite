<!-- My standard header-->
<!DOCTYPE html>
<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Kochdatenbank</title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>

<header class=headclass> <!--Logo-->
 <h1>Login</h1>
 
 <nav> 
 <div class=navigation>
 <a href ="mainview.php">| Home |</a> <a href ="search.php"> Search |</a>  <a href ="random.php"> Random |</a> <a href ="..."> Contact |</a> <a href ="..."> About |</a> <a href ="test.php"> Members |</a><!--Legal notice--> 
 </nav>
 </header>
<!--  -->	
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

$sql = "SELECT id, username, email FROM testuser";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // Jede Reihe ausgeben
   while($row = $result->fetch_assoc()) {
	   echo "" . $row["id"]. " - User: " . $row["username"]. "   |   " . $row["email"]. "<br>";
		}
} else {
    echo "No Members registered yet.";
}
$conn->close();
?>

</div>
  
  
</body>

</html>
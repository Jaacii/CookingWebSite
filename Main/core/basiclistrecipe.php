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

$sql = "SELECT pic, foodname, difficulty, rating FROM testrecipe";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // Jede Reihe ausgeben
   while($row = $result->fetch_assoc()) {
	   echo "</br>" . $row["pic"]. "  " . $row["foodname"]. "   difficulty:   " . $row["difficulty"]. " rating:   " . $row["rating"]. "<br>";
		}
} else {
    echo "No recipes uploaded yet.";
}
$conn->close();

//Bilder ausgeben? anklickbar machen und spezielle rezept seite öffnen?
?>

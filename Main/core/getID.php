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
//	".$_SESSION['username']."'";  <-  merken! 

$sql = "SELECT * from testuser where username = '".$_SESSION['username']."'";		
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$_SESSION['actualid'] = $row['id'];
//echo $_SESSION['actualid'] ;				/*$row['id'];*/

$conn->close();
?>
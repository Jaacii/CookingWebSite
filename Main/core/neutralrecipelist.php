<?php
//session_start();
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

$id = $_SESSION['actualid'];

$sql = "SELECT * FROM preferences WHERE id='$id'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);


$sql2 = "SELECT * FROM finalrecipe";
$result2 = $conn->query($sql2);


while($row2 = $result2->fetch_assoc())
{




//no favorite -> no dublicates-------------------neutral second
	 if(stripos($row2['foodname'], $row['favorite']) !== false OR stripos($row2['ingredients'], $row['favorite']) !== false OR stripos($row2['nationality'], $row['favorite']) !== false OR stripos($row2['nationality'], $row['favoriteNation']) !== false OR stripos($row2['foodname'], $row['allergy']) !== false OR stripos($row2['ingredients'], $row['allergy']) !== false)
    {
        
    }
	//no dislike
	elseif (stripos($row2['foodname'], $row['dislike']) !== false OR stripos($row2['ingredients'], $row['dislike']) !== false OR stripos($row2['nationality'], $row['dislike']) !== false OR stripos($row2['nationality'], $row['dislike']) !== false )
    {
         
    }
	// neutral
	 else { echo "<p><a href='exa_recipepage.php?food_id=".$row2['id']."' >" .  "<img src='".$row2['imageurl'] ."' width='100', height='100'>"   . $row2['foodname'].  " difficulty: ".$row2['difficulty']." |    rating: ".$row2['rating']."</p></a>";}
	



	}
	 
	 	



$conn->close();



?>

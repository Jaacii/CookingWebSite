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

$raw_results = mysqli_query($conn ,"SELECT * FROM finalrecipe ") or die(mysql_error());
//$result = $conn->query($sql);

 if(mysqli_num_rows($raw_results) > 0){
   // Jede Reihe ausgeben
 while($results = mysqli_fetch_array($raw_results)){
            
      
                echo "<p><a href='exa_recipepage.php?food_id=".$results['id']."' >". $results['foodname'].  " difficulty: ".$results['difficulty']." |    rating: ".$results['rating']."</p></a>";
               
            }
} else {
    echo "No recipes uploaded yet.";
}
$conn->close();


// <img src="data:image/jpeg;base64,'.base64_encode( $result['image'] )."/> "
//Bilder ausgeben? anklickbar machen und spezielle rezept seite öffnen?
?>

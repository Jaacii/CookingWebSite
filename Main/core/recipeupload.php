<?php   
//session_start();


// connect
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');

$foodname
$ingredients
$nationality
$flavor
$difficulty
$rating
$preparation


$query = "INSERT INTO recipe (foodname, ingredients, nationality, flavor, difficulty, rating , preparation) 
  			  VALUES('$foodname', '$ingredients', '$nationality' , '$flavor', '$difficulty', '$rating', '$preparation')";
  	mysqli_query($db, $query);

?>
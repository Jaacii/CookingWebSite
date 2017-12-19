<?php   
//session_start();


// connect
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');

if (isset($_POST['upload'])) {
//form input
$foodname = mysqli_real_escape_string($db, $_POST['foodname']);
$nationality = mysqli_real_escape_string($db, $_POST['nationality']);
$flavor = mysqli_real_escape_string($db, $_POST['flavor']);
$ingredients = mysqli_real_escape_string($db, $_POST['ingredients']);
$difficulty = mysqli_real_escape_string($db, $_POST['difficulty']);
$rating = mysqli_real_escape_string($db, $_POST['rating']);
//$pic = mysqli_real_escape_string($db, $_POST['pic']);
$preparation = mysqli_real_escape_string($db, $_POST['preparation']);


//evtl vallidation ?   oder nicht nötig?   // neue recipe datenbank mit pic machen ,  pic einbauen??


$query = "INSERT INTO recipe (foodname, ingredients, nationality, flavor, difficulty, rating , preparation) 
  			  VALUES('$foodname', '$ingredients', '$nationality' , '$flavor', '$difficulty', '$rating', '$preparation')";
  	mysqli_query($db, $query);

	 header('location: ../mainview.php');
	
	
}
?>
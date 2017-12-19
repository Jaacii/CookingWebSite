<?php   
//session_start();


// connect
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');

if (isset($_POST['setpreference'])) {
//form input
$favorite = mysqli_real_escape_string($db, $_POST['favorite']);
$favoriteNation = mysqli_real_escape_string($db, $_POST['favoriteNation']);
$dislike = mysqli_real_escape_string($db, $_POST['dislike']);
$allergy = mysqli_real_escape_string($db, $_POST['allergy']);


//preference table erstellen 
$query = "INSERT INTO recipe (foodname, ingredients, nationality, flavor, difficulty, rating , preparation) 
  			  VALUES('$foodname', '$ingredients', '$nationality' , '$flavor', '$difficulty', '$rating', '$preparation')";
  	mysqli_query($db, $query);



}

?>
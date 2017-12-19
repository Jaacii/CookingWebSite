<?php   
//session_start();


// connect
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');

if (isset($_POST['setpreference'])) {
//form input
$user = mysqli_real_escape_string($db, $_POST['user']);
$favorite = mysqli_real_escape_string($db, $_POST['favorite']);
$favoriteNation = mysqli_real_escape_string($db, $_POST['favoriteNation']);
$dislike = mysqli_real_escape_string($db, $_POST['dislike']);
$allergy = mysqli_real_escape_string($db, $_POST['allergy']);


//preference table erstellen 
$query = "INSERT INTO preferences (user, favorite, favoriteNation, dislike, allergy) 
  			  VALUES('$user', '$favorite', '$favoriteNation' , '$dislike', '$allergy')";
  	mysqli_query($db, $query);

header('location: ../mainview.php');

}

?>
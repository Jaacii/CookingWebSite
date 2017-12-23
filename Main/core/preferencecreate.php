<?php   
session_start();
$errors = array();

// connect
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');

if (isset($_POST['setpreference'])) {
	

//form input
$user = mysqli_real_escape_string($db, $_POST['user']);
$favorite = mysqli_real_escape_string($db, $_POST['favorite']);
$favoriteNation = mysqli_real_escape_string($db, $_POST['favoriteNation']);
$dislike = mysqli_real_escape_string($db, $_POST['dislike']);
$allergy = mysqli_real_escape_string($db, $_POST['allergy']);
$userid = $_SESSION['actualid'];



//If existing = DELETE old Data and create new, if not -> just create  
$query = $db->query("SELECT * FROM preferences where id='$userid'");
$result = $query-> fetch_object(); 

if($result){
/*
$query = "UPDATE  preferences   
SET favorite = '$favorite', favoriteNation = '$favoriteNation' , dislike = '$dislike', allergy = '$allergy')  
WHERE id = $userid";*/
$query = "DELETE FROM  preferences    WHERE id = $userid";

  	mysqli_query($db, $query);
	
$query = "INSERT INTO preferences (id, favorite, favoriteNation, dislike, allergy) 
  			  VALUES('$userid', '$favorite', '$favoriteNation' , '$dislike', '$allergy')";
  	mysqli_query($db, $query);
header('location: ../mainview.php');

} 
else {
$query = "INSERT INTO preferences (id, favorite, favoriteNation, dislike, allergy) 
  			  VALUES('$userid', '$favorite', '$favoriteNation' , '$dislike', '$allergy')";
  	mysqli_query($db, $query);

header('location: ../mainview.php');
}
}

?>
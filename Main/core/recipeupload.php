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
$image = mysqli_real_escape_string($db, $_POST['image']);
$preparation = mysqli_real_escape_string($db, $_POST['preparation']);

	/*if(getimagesize($FILES['image'] ['tmp_name']) == FALSE) {
	echo "Please select an image."; }
		 
		else 
		{ 
		$image= addslashes($_FILES['image']['tmp_name']); 
		//$name= addslashes($_FILES['image']['name']); 
		$image= file_get_contents($image); 
		$image = base64_encode($image);
		saveimage($image);
		}*/													//kann sein dass das bild nicht wieder gegeben werden kann dann hier nochmal mit versuchen.  upload klapppt zumindest
		

//evtl vallidation ?   oder nicht nötig?   // neue recipe datenbank mit pic machen ,  pic einbauen??


$query = "INSERT INTO recipe2 (foodname, ingredients, nationality, flavor, image, difficulty, rating , preparation) 
  			  VALUES('$foodname', '$ingredients', '$nationality' , '$flavor', '$image', '$difficulty', '$rating', '$preparation')";
  	mysqli_query($db, $query);

	 header('location: ../mainview.php');
	
	
}
function saveimage( $image){
		//$db = mysqli_connect('localhost', 'root', '', 'cooking4you');
	/*	$con=mysql_connect("localhost",root, "");
		mysql_select_db("cooking4you", $con);
		$qry="insert into recipe2 (image) values ('$image')";
		$result =mysql_query($qry, $con);
		if($result) {
			echo "</br> Image uploaded.";
		}
		else {echo "</br> Image not uploaded.";}
*/		
}

?>
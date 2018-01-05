<?php   

if(isset($_POST["upload"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        //connect
        $db = new mysqli( 'localhost', 'root', '', 'cooking4you');
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
		
		//Get Data
        $foodname = mysqli_real_escape_string($db, $_POST['foodname']);
		$nationality = mysqli_real_escape_string($db, $_POST['nationality']);
		$flavor = mysqli_real_escape_string($db, $_POST['flavor']);
		$ingredients = mysqli_real_escape_string($db, $_POST['ingredients']);
		$difficulty = mysqli_real_escape_string($db, $_POST['difficulty']);
		$rating = mysqli_real_escape_string($db, $_POST['rating']);
		//$image = mysqli_real_escape_string($db, $_POST['image']);
		$preparation = mysqli_real_escape_string($db, $_POST['preparation']);
		
        
        
        //Upload Data
        $insert = $db->query("INSERT into recipe (foodname, ingredients, nationality, flavor, difficulty, rating , preparation, image) VALUES ('$foodname', '$ingredients', '$nationality' , '$flavor', '$difficulty', '$rating', '$preparation','$imgContent')");
        
		if($insert){
            echo " Upload successfull.";
			//timer´?
			header('location: ../mainview.php');
        }else{
            echo "Upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}



























/*		OLD ATTEMPT
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
//$image = mysqli_real_escape_string($db, $_POST['image']);
$preparation = mysqli_real_escape_string($db, $_POST['preparation']);

 $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

	}
	
	
	
	
	
	
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
/*$target="/xampp/htdocs/images/";

$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
$imgContent = addslashes(file_get_contents($image));*/
  	// image file directory
  //$target = "images/".basename($image);



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

/*
$query = "INSERT INTO recipe (foodname, ingredients, nationality, flavor, difficulty, rating , preparation,image, image_text) 
  			  VALUES('$foodname', '$ingredients', '$nationality' , '$flavor', '$difficulty', '$rating', '$preparation', $imgContent', '$image_text')";
  	mysqli_query($db, $query);

	 header('location: ../mainview.php');
	
	
}*/
//function saveimage( $image){
		//$db = mysqli_connect('localhost', 'root', '', 'cooking4you');
	/*	$con=mysql_connect("localhost",root, "");
		mysql_select_db("cooking4you", $con);
		$qry="insert into recipe2 (image) values ('$image')";
		$result =mysql_query($qry, $con);
		if($result) {
			echo "</br> Image uploaded.";
		}
		else {echo "</br> Image not uploaded.";}
	
}
*/
?>
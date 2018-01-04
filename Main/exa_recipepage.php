<!DOCTYPE html>
<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Cooking4You</title>
	<link rel="stylesheet" href=stylesheet.css>
</head>
<body>
<div class=sidebar> 
<img src="img_placeholder/werbeplaceholder.jpg">
</br>
 <a href ="register.php">|Sign up</a>
  <a href ="login.php">| Login |</a>
 </br>
  <a href ="newsletter_view.php">| Subscribe to our Newsletter |</a>

</div>
<header class=headclass> <!--Logo-->
 <h1>Kochdatenbank</h1>

 <nav> 
 <div class=navigation>
 <a href ="mainview.php">| Home |</a> <a href ="search_view.php"> Search |</a>  <a href ="random_view.php"> Random |</a> <a href ="contactview.php"> Contact |</a> <a href ="aboutview.php"> About |</a> <a href ="memberlist_view.php"> Members |</a><a href ="recipelist_view.php"> Recipes |</a><!-- --> 
 </nav>
 
 </header>
 <!--   HEADER end -->
<!--  Search form -->
<!--<div class=sidebar>
<?php



$db = mysqli_connect('localhost', 'root', '', 'cooking4you');

?>

</div>-->
<div class=maincontent>
<!--img src="img_placeholder/KimchiPlaceholder.jpg" alt="Kimchi" width="350" height="230"-->
<?php
$food_id = $_GET['food_id'];


$sql = mysqli_query( $db, " SELECT * FROM `recipe2` WHERE `id` = '$food_id'"); 
$row = mysqli_fetch_assoc($sql);

/*

$sql = "SELECT  * FROM recipe2 WHERE id = $food_id";
$result = $db->query($sql);
//$row = mysqli_fetch_assoc($sql);
*/
	  echo "<br>" . $row['foodname']. "  | difficulty:  ".$row['difficulty'] . "  |  rating: ". $row['rating'] . "<br>";
	    echo "" . '<img src="'.$row['image'].'">'. "  <br><br>ingredients: ".$row['ingredients'] . "    <br><br>preparation: ". $row['preparation'] . "<br>";
 


$db->close();


?>
</div>


</body>

</html>
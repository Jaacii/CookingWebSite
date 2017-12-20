<!DOCTYPE html>
<?php


?>

<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Kochdatenbank</title>
	<link rel="stylesheet" href=stylerecipe.css>
</head>

<body>

<nav> 
 <div class=navigation>
 <a href ="mainview.php">| Home |</a> <a href ="search.php"> Search |</a>  <a href ="random.php"> Random |</a> <a href ="..."> Contact |</a> <a href ="..."> About |</a> <a href ="test.php"> Members |</a><a href ="allrecipeview.php"> Recipes |</a><!-- -->
 </nav>
<div class=sidebar>
rating:  difficulty:
Ingredients:
</div>
<div class=maincontent>
randomized

Zubereitung:
</div>

pic   sidebar with ingredients + difficulty and rating
Zubereitung

<?php 
include ('Database/randomizer.php');
?>
</body>

</html>
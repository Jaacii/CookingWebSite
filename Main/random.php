<!DOCTYPE html>
<?php


?>
<!-- Header-->
<!DOCTYPE html>
<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Kochdatenbank</title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>

<header class=headclass> <!--Logo-->
 <h1>Random</h1>
 
 <nav> 
 <div class=navigation>
 <a href ="mainview.php">| Home |</a> <a href ="search.php"> Search |</a>  <a href ="random.php"> Random |</a> <a href ="contactview.php"> Contact |</a> <a href ="aboutview.php"> About |</a> <a href ="test.php"> Members |</a><a href ="allrecipeview.php"> Recipes |</a><!-- -->
 </nav>
 </header>




<div class=maincontent>



<?php 
include ('core/randomizer.php');
?>

</div>

</body>

</html>
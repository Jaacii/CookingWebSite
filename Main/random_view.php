<!DOCTYPE html>
<?php


?>
<!DOCTYPE html>
<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Random</title>
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


<div class=maincontent>



<?php 
include ('core/randomizer.php');
?>

</div>

</body>

</html>
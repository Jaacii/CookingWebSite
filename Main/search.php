<!DOCTYPE html>

<?php 


?>

<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Kochdatenbank</title>
	<link rel="stylesheet" href= stylesheet.css>
</head>
<body>
<header class=headclass> <!--Logo-->
 <h1>Kochdatenbank</h1>
<nav> 
 <div class=navigation>
 <a href ="mainview.php">| Home |</a> <a href ="search.php"> Search |</a>  <a href ="random.php"> Random |</a> <a href ="..."> Contact |</a> <a href ="..."> About |</a> <a href ="test.php"> Members |</a><!--Legal notice--> 
 </nav>
 
 </header>

 
 <form method="post" action="searchfunc.php?go" if="searchform">	<!-- ?go? -->
<input type="text" name="search" placeholder="Search..">
<input type="submit" name="submit" value="Search">
</form>
</body>

</html>
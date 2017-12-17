<!DOCTYPE html>

<?php 
include('Database/config.php');
session_start();
?>

<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Kochdatenbank</title>
	<link rel="stylesheet" href=stylesheets/searchstylesheet.css>
</head>
<body>
<header class=headclass> <!--Logo-->
 <h1>Kochdatenbank</h1>
<nav> 
 <div class=navigation>
 <a href ="mainview.html">| Home |</a> <a href ="..."> Search |</a>  <a href ="..."> Random |</a> <a href ="..."> Contact |</a> <a href ="..."> About |</a> <a href ="test.html"> ExampleTable |</a><!--Legal notice--> 
 </nav>
 </header>
 <form method="post" action="search.php" if="searchform">
<input type="text" name="search" placeholder="Search..">
<input type="submit" name="subit" value="Search">
</form>
</body>

</html>
<!DOCTYPE html>
<?php
include('Database/config');
session_start();

?>

<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Kochdatenbank</title>
	<link rel="stylesheet" href=stylesheets/stylerecipe.css>
</head>

<body>
<?php 
include('Database/randomizer.php')
?>
<nav> 
 <div class=navigation>
 <a href ="mainview.html">| Home |</a> <a href ="..."> Search |</a>  <a href ="..."> Random |</a> <a href ="..."> Contact |</a> <a href ="..."> About |</a> <a href ="test.html"> ExampleTable |</a><!--Legal notice--> 
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
</body>

</html>
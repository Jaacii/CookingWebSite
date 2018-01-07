<!DOCTYPE html>
<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Cooking4You</title>
	<link rel="stylesheet" href=../stylesheet.css>
</head>
<body>
<div class=sidebar> 
<img src="../img_placeholder/werbeplaceholder.jpg">
</br>
 <a href ="register.php">Sign up</a>
  <a href ="login.php">| Login |</a>
</div>
<header class=headclass> <!--Logo-->
 <h1>Kochdatenbank</h1>

 <nav> 
 <div class=navigation>
 <a href ="mainview.php">| Home |</a> <a href ="search_view.php"> Search |</a>  <a href ="random_view.php"> Random |</a> <a href ="contactview.php"> Contact |</a> <a href ="aboutview.php"> About |</a> <a href ="memberlist_view.php"> Members |</a><a href ="recipelist_view.php"> Recipes |</a><!-- --> 
 </nav>
 </header>




<body>





 <h2>Successfully sent!</h2>
 <form method='post'  action='trash.php'>
 <button type="submit" class="btn" name="back">Back</button>
 </form>
<?php  
if(isset($_POST["back"])){
$i =0;


sleep(1);
header('location: ../mainview.php');

}

?>
</body>
</html>
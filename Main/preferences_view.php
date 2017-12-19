<!-- My standard header-->
<!DOCTYPE html>
<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Kochdatenbank</title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>

<header class=headclass> <!--Logo-->
 <h1>Kochdatenbank</h1>
 
 <nav> 
 <div class=navigation>
 <a href ="mainview.php">| Home |</a> <a href ="search.php"> Search |</a>  <a href ="random.php"> Random |</a> <a href ="..."> Contact |</a> <a href ="..."> About |</a> <a href ="test.php"> Members |</a><!--Legal notice--> 
 </nav>
 </header>
<!--  -->	
</br>
<h1> Add preferences to change the recipe-proposals at the Homepage. You can add 1 preference per question.</h1>
<?php include ('core/preferencecreate.php');?>
<form method="post" action="core/preferencecreate.php">
			<br/>
			What is your Username? :<br/>	
			<input type="name" name="user"><br/>		<!-- soll später noch automatisch erkannt werden-->
			What is your favorite Food? :<br/>
			<input type="name" name="favorite"><br/>
			What kind of food do you like? :<br/>
			<input type="name" name="favoriteNation"><br/>
			What kind of food do you dislike? :<br/>
			<input type="name" name="dislike"><br/>
			Do you have allergies? :<br/>
			<input type="name" name="allergy"><br/><br/>
			<button type="submit" class="btn" name="setpreference">Set preferences</button>
			</form>


 </form>

</body>

</html>
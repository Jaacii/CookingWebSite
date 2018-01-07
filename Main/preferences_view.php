<!-- My standard header-->
<?php// session_start();  
//echo $_SESSION['actualid'];?>
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
  <a href ="mainview.php">| Home |</a> <a href ="search_view.php"> Search |</a>  <a href ="random_view.php"> Random |</a> <a href ="contactview.php"> Contact |</a> <a href ="aboutview.php"> About |</a> <a href ="memberlist_view.php"> Members |</a><a href ="recipelist_view.php"> Recipes |</a><!-- --> 
 </nav>
 </header>
<!--  -->	
</br>
<h1> Add preferences to change the recipe-proposals at the Homepage. You can add 1 preference per question.</h1>
<p> In case you already made your preferences, this will completely reset the old preferences.</p>
<?php include ('core/preferencecreate.php'); ?> 
<form method="post" action="core/preferencecreate.php">
			<br/>
			
			What is your favorite Food? :<br/>
			<input type="name" name="favorite"><br/>
			What food-nationality do you like the most? :<br/>
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
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
<h1> Upload your own recipes </h1>
<?php include ('core/recipeupload.php');?>
<form method='post'  action='core/recipeupload.php'>
			What is the name of your Food? :<br/>
			<input type="name" name="foodname"><br/>
			What is the nationality of the food ? :<br/>
			<input type="name" name="nationality"><br/>
			What is the flavor of the food? :<br/>
			<input type="name" name="flavor"><br/>
			Ingredients: :<br/>
			<input type="name" name="ingredients"><br/>
			difficulty: :<br/>
			<input type="name" name="difficulty"><br/>
			rating: :<br/>
			<input type="name" name="rating"><br/>
			picture of the food:<br/> 
			<input type="name" name="pic"><br/>
			<br/><br/>Preparation:<br/>
			<input type="name" name="preparation"><br/>
			<br/><br/>
			<button type="submit" class="btn" name="upload">Upload Recipe</button>
 </form>

</body>

</html>
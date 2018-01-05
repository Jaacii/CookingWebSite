<!-- My standard header-->
<?php session_start();  ?>
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
<h1> Upload your own recipes </h1>
<?php// echo $_SESSION['actualid'];?>
<?php include ('core/recipeupload.php');?>
<form method='post'  action='core/recipeupload.php' enctype="multipart/form-data">
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
			<input type="file" name="image"><br/> 
			<br/><br/>Preparation:<br/>
			<input type="name" name="preparation"><br/>
			<br/><br/>
			<button type="submit" class="btn" name="upload" value="UPLOAD">Upload Recipe</button>
 </form>
	
</body>

</html>
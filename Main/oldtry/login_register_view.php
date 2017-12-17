<!DOCTYPE html>

<?php 
include('Database/config.php');
session_start();
?>

<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Kochdatenbank</title>
	<link rel="stylesheet" href=stylesheets/login_register_stylesheet.css>
</head>
<body>
<div class= loginblock> 
 <!-- <form method="post" action="index.php">
 <h2> Login: </br></h2>-->
 <?php include ('Database/login.php');
	//	include ('Database/check_login.php');

?>
	 <!--	   Username:<br/>
		   <input type="text" name="username"><br/>
		   Password:<br/>
			<input type="password" name="password"><br/>
			<input type="submit" name="Login">
			
			</form>-->
</div>



<div class= registerblock> 
 <!-- <form method="post" action="index.php">
<h2> Signing up: </br></h2>-->
<?php include ('Database/register.php');

?>
<!--		      Username:<br/>
		   <input type="text" name="username"><br/>
		   Password:<br/>
			<input type="password" name="password"><br/>
			Repeat password :<br/>
			<input type="password" name="password2"><br/>
			Email :<br/>
			<input type="email" name="email"><br/>
			
			<input type="submit" name="Login">
			</form>
			<br/><br/>
			<br/><br/>
			
			<form method="post" action="index.php">
			optional questions: <br/>
			What is your favorite Food? :<br/>
			<input type="name" name="favorite"><br/>
			What kind of food do you like? :<br/>
			<input type="name" name="favoriteNation"><br/>
			What kind of food do you dislike? :<br/>
			<input type="name" name="abneigung"><br/>
			Do you have allergies? :<br/>
			<input type="name" name="allergie"><br/>
			</form>   -->
</div>




</body>
</html>
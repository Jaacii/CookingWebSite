<?php include('core/registration_login.php') ?>

<!-- Header-->
<!DOCTYPE html>
<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Kochdatenbank</title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>

<header class=headclass> <!--Logo-->
 <h1>Login</h1>
 
 <nav> 
 <div class=navigation>
 <a href ="mainview.php">| Home |</a> <a href ="search.php"> Search |</a>  <a href ="random.php"> Random |</a> <a href ="..."> Contact |</a> <a href ="..."> About |</a> <a href ="test.php"> Members |</a><!--Legal notice--> 
 </nav>
 </header>
<!-- Ab hier Login Formular -->	 
	 
	 
  <form method="post" action="login.php">
  	<?php include('core/errors.php'); ?>
  	<div class="registerblock">
	 </br>
  		<label>Username</label></br>
  		<input type="text" name="username" >
  </br>
  
  		<label>Password</label></br>
  		<input type="password" name="password">
		</br></br>
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		You don´t have an account yet? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
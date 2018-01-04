<?php include('core/registration_login.php') ?>
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
 <h1>Login</h1>
 
 <nav> 
 <div class=navigation>
  <a href ="mainview.php">| Home |</a> <a href ="search_view.php"> Search |</a>  <a href ="random_view.php"> Random |</a> <a href ="contactview.php"> Contact |</a> <a href ="aboutview.php"> About |</a> <a href ="memberlist_view.php"> Members |</a><a href ="recipelist_view.php"> Recipes |</a><!-- --> 
 </nav>
 </header>
<!--  -->	
 
 
  <form method="post" action="register.php">
  	<?php include('core/errors.php'); ?>
  	<div class="registerblock">
	 </br>
  	  <label>Username </label> </br>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
	  </br>

  	  <label>Email</label></br>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
		</br>
		
  	  <label>Password</label> </br>
  	  <input type="password" name="password1">
	  </br>
  
  	
  	  <label>Confirm password</label></br>
  	  <input type="password" name="password2">
	  </br>  </br>
 
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
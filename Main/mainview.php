<?php  include ('core/registration_login.php'); 
//session_start(); 
 ?>

<!DOCTYPE html>
<html lang= "de">
<head >
	<meta charset= "utf-8">
	<title>Cooking4You</title>
	<link rel="stylesheet" href=stylesheet.css>
</head>
<body>
<div class=sidebar> 
<img src="img_placeholder/werbeplaceholder.jpg">
</br>
 <a href ="register.php">Sign up</a>
  <a href ="login.php">| Login |</a>
</div>
<header class=headclass> <!--Logo-->
 <h1>Kochdatenbank</h1>

 <nav> 
 <div class=navigation>
 <a href ="mainview.php">| Home |</a> <a href ="search.php"> Search |</a>  <a href ="random.php"> Random |</a> <a href ="..."> Contact |</a> <a href ="..."> About |</a> <a href ="test.php"> Members |</a><a href ="allrecipeview.php"> Recipes |</a><!-- --> 
 </nav>
 </header>
 <!--   HEADER end -->
 
 
<div class="content">
  	<!-- notification -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
	
    	<p> Hello <strong><?php echo $_SESSION['username']; ?></strong> </br>ID:  <?php include ('core/getID.php'); ?> </p>
		<p> <a href="uploadrecipeview.php" style="color: blue";" >Upload Recipe </a> </p>
		<p> <a href="preferences_view.php" style="color: blue";" >Add Food-Preferences </a> </p>
		<!-- add edit preferences? -->
    	<p> <a href="core/logout.php" style="color: red;">logout</a> </p>	<!-- logout funktioniert noch nicht-->
		
    <?php endif ?>
	</div>
	
	
  <div class=recipeareal>
  <a href ="exa_recipepage.php">
   <img src="img_placeholder/KimchiPlaceholder.jpg" alt="Kimchi" width="350" height="230">
  Kimchi</a>
  <?php  include ('core/basiclistrecipe.php'); ?>
  
  </div>

</body>
</html>
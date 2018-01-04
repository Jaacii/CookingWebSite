
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
 <a href ="mainview.php">| Home |</a> <a href ="search_view.php"> Search |</a>  <a href ="random_view.php"> Random |</a> <a href ="contactview.php"> Contact |</a> <a href ="aboutview.php"> About |</a> <a href ="memberlist_view.php"> Members |</a><a href ="recipelist_view.php"> Recipes |</a><!-- --> 
 </nav>
 
 </header>
 <!--   HEADER end -->
 
<body>
 <form action="Newsletter_placeholder.php">		<!--- Auch der Newsletter dient momentan nur als Designobjekt. Hatte einfach Lust einen Newsletter auf der Seite einzubauen. --> 
  <div class="newsletter">
    <h2>Subscribe to our Newsletter</h2>
    <p>The Newsletter will provide your Email account with recipes you might like. </p>
  </div>

  <div class="newsletterform" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Email address" name="mail" required>
    <input type="checkbox" checked="checked"> Daily Newsletter
  </div>

  
    <input type="submit" value="Subscribe">
  
</form> 

</body> 
</html>
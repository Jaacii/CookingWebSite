
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
 <a href ="register.php">|Sign up</a>
  <a href ="login.php">| Login |</a>
 </br>
  <a href ="newsletter_view.php">| Subscribe to our Newsletter |</a>

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
 
 <div class=informationtext  >
 <strong>Contact: </strong></br>
 <div class=shiftedinfotext>
 name lastname</br>
 location, street
 </br></br></br>
</div>
 
 <strong>Contact formular: </strong>
  <div class="contactform">
  <form action="core/trash.php">		<!--erstmal nur als design erzeugt. Funktionieren soll es erstmal noch nicht -->

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last name.."> </br>

    <label for="country">Country</label>
    <select id="country" name="country">
	<option value="uk">UK</option>
	<option value="germany">Germany</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
	  <option value="other">Other</option>
    </select> </br>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="What do you want to ask me?.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</br> </br>
 
 
  </div>
 </body>
 </html>
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
<h1> Change your password </h1>

<?php $userid = $_SESSION['actualid']; ?>
<?php include ('core/recipeupload.php');?>
<form method='post'  action='changePW.php'>
			Your old password? :<br/>
			<input type="name" name="old"><br/>
			Your new password? :<br/>
			<input type="name" name="new"><br/>
			
			<br/><br/>
			<button type="submit" class="btn" name="change">Change Password</button>
 </form>
	<?php 
	$db = mysqli_connect('localhost', 'root', '', 'cooking4you');
	
	// change pw. compare pw
	if (isset($_POST['change'])) {
		$old = mysqli_real_escape_string($db, $_POST['old']);
		$new = mysqli_real_escape_string($db, $_POST['new']);
		
		//doesn´t work yet. else is working
		$query = $db->query("SELECT password FROM preferences where id='$userid'");
		if(query == $old) {
		 	$password = md5($new);	
			$query = "UPDATE  testuser  SET password ='$password'  WHERE id = $userid";
			$result = mysqli_query($db, $query);
			header('location: mainview.php');
		} else {
			 header('location: changePW.php');
		}
		
		
		
	}
	?>


</body>
</html>
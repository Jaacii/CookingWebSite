
<?php
include ("config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$myusername = mysqli_real_escape_string($db, $_POST['username']);
	$mypassword	= mysqli_real_escape_string($db, $_POST['password']);
	$sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";     // admin ändern,
	$result = mysqli_query($db,$sql);
	$row =mysqli_fetch_array($result, MYSQLI_ASSOC);
	$active=$row['active'];
	$count= mysqli_num_rows($result);
	
	//wenn result stimm  muss es in einer table row sein
	
	if($count ==1) {
	session_register("myusername");
$_SESSION['login_user']	 = $myusername;

header("location: mainview.html");
	} else {
		$error= "Login Name or Password invalid";
	}
	}
}

/*

// Create connection
$con=mysqli_connect(host,username,password,dbname); 



// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }*/
?> 


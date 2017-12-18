<?php
session_start();

// DEKLARATION
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');

// reg_user -> Register User
if (isset($_POST['reg_user'])) {
  // get form input 		REGISTER
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  // form validation
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) {
	array_push($errors, "Passwords do not match");
  }

  
  // register wenn keine Fehler in form
  if (count($errors) == 0) {
  	$password = md5($password1);//PW-Verschlüsselung
  	$query = "INSERT INTO testuser (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Logged in";
  	header('location: mainview.php');
  }

}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM testuser WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {  //fehler hier ? Warning: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given in C:\xampp\htdocs\testing\server.php on line 59
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Logged in";
  	  header('location: mainview.php');
  	}else {
  		array_push($errors, "Wrong username/password");
  	}
  }
}

?>
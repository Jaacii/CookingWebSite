
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="Cooking4you"; // Database name
$tbl_name="user"; // Table name
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");




$myusername = $_POST['username'];
$password = $_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);


$query="SELECT * FROM $tbl_name WHERE username='$myusername' ";
$result=mysql_query($query);

if ($result->num_rows > 0 ){
session_start();
echo "funktioniert"; 
}
/*
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
*/
?> 

<?php
define('DB_SERVER', 'localhost');		//placeholder nummer
define('DB_USERNAME', 'root');
define 'DB_PASSWORD', '');		//kein passwort momentan
define('DB_DATABASE', 'cooking4you');

$db =mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD, DB_DATABASE);
//failed

if(!$db)

	{

		die('Connection failed:'.mysqli_connect_error());

	}
	else { 
	echo "Successful connection"; 
	}
?> 
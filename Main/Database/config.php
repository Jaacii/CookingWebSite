
<?php
define('DB_SERVER', 'localhost:3036');		//placeholder nummer
define('DB_USERNAME', 'root');
define 'DB_PASSWORD', 'test123');		//kein passwort momentan
define('DB_DATABAS', 'cooking4you');

$db =mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD, DB_DATABASE);

echo "Successful connection";
?> 
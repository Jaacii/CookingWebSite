<?php

$db_host = "localhost";
$db_username = "root";
$db_pass = "test123";
$db_name = "cooking4you";

@mysql_connect ("$db_host", "$db_username", "$db_pass") or die ("Could not connect to MySql");
@mysql_select_db("$db_name") or die ("Database not found");

echo "Successful connection";


?>
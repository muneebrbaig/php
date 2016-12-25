<?php
define('_HOST_NAME','localhost');
define('_DATABASE_USER_NAME','root');
define('_DATABASE_PASSWORD','');
define('_DATABASE_NAME','sales');

$conn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);

if($conn->connect_errno)
{
	die("ERROR : -> ".$conn->connect_error);
}

?>
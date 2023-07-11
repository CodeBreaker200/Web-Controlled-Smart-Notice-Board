<?php

$sname= "localhost";
$unmae= "id20715040_login";
$password = "V1C71z<etX_UGY2b";

$db_name = "id20715040_test_db";


$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
 
?>
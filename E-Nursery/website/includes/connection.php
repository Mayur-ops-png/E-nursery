<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "enursery";

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {
	// echo "Conneciton successfull";
}else{
	die("no connection". mysqli_connect_error());
}

?>
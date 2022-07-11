<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "rentbox";

// Create connection
$dbc = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$dbc) {
  die("Connection failed: " . mysqli_connect_error());
}

function clean_data($string, $db) {
	$string = trim($string);
	$string = mysqli_real_escape_string($db, $string);

	return $string;
}

?>
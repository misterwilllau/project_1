<?php

// Include the database
include_once("../db_connection.php");
global $dbc;

// Register Behind
if(isset($_POST['landlord_register_submit'])) {

	// Get all the data
	$landlord_firstname = $_POST['landlord_firstname'];
	$landlord_lastname  = $_POST['landlord_lastname'];
	$landlord_identity  = $_POST['landlord_identity'];
	$landlord_email     = $_POST['landlord_email'];
	$landlord_username  = $_POST['landlord_username'];
	$landlord_password  = $_POST['landlord_password'];
	$landlord_confirm_password = $_POST['landlord_confirm_password']; 

	// Data filtering for duplication
	$user_check_query = "SELECT * FROM landlord WHERE landlord_username = '$landlord_username' OR landlord_email = '$landlord_email' LIMIT 1";
	$result = mysqli_query($dbc, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	// If found
	if($user) {

		// If the username already registered
		if($user['landlord_username'] == $landlord_username) {
			echo "Username already registerd";
		}

		// If the email already register
		if($user['landlord_email'] == $landlord_email) {
			echo "Email already registerd";
		}
	} elseif ($landlord_password !== $landlord_confirm_password){
		echo "Password don't match";
	} else { // Success

		// Hash the password
		$landlord_password = password_hash($landlord_password, PASSWORD_DEFAULT);
		$register_landlord_query = "INSERT INTO landlord (landlord_firstname, landlord_lastname, landlord_identity, landlord_email, landlord_username, landlord_password)
		 							VALUES('$landlord_firstname', '$landlord_lastname', '$landlord_identity', '$landlord_email', '$landlord_username', '$landlord_password')";
		
		$register_landlord_result = mysqli_query($dbc, $register_landlord_query);

		if($register_landlord_result) {
			header("Location: ../landlord_login.php");
		} else {
			echo mysqli_error($dbc);
		}

	}

}



?>
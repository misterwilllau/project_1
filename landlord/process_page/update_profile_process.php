<?php
session_start();

$landlord_id = $_SESSION['landlord_id'];

include_once("../../db_connection.php");
global $dbc;

if(isset($_POST['update_profile_button'])) {

	// Get the data
	$landlord_firstname = $_POST['landlord_firstname'];
	$landlord_lastname  = $_POST['landlord_lastname'];
	$landlord_username  = $_POST['landlord_username'];

	// Check the data
	$check_landlord_q = "SELECT * FROM landlord WHERE landlord_username = '$landlord_username'";
	$result_q = mysqli_query($dbc, $check_landlord_q);

	// If already registered, then error
	if(mysqli_num_rows($result_q) == 1) {
		
		// Execute the update profile
		$update_landlord_q = "UPDATE landlord SET landlord_firstname = '$landlord_firstname', landlord_lastname = '$landlord_lastname' 
		WHERE landlord_id = '$landlord_id'";

		$execute_update_landlord = mysqli_query($dbc, $update_landlord_q);

		if($execute_update_landlord) {
			header("Location: ../profile.php");
			exit();
		} else {
			echo mysqli_error($dbc);
		}


	} else {
		
		// Execute the update profile
		$update_landlord_q = "UPDATE landlord SET landlord_firstname = '$landlord_firstname', landlord_lastname = '$landlord_lastname', landlord_username = '$landlord_username' 
		WHERE landlord_id = '$landlord_id'";

		$execute_update_landlord = mysqli_query($dbc, $update_landlord_q);

		if($execute_update_landlord) {
			header("Location: ../profile.php");
			exit();
		} else {
			echo mysqli_error($dbc);
		}
	}

}



?>
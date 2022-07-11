<?php session_start();

// Include the database
include_once("../db_connection.php");
global $dbc;

// Register Behind
if(isset($_POST['landlord_login_submit'])) {

	// Get all the data
	$landlord_username  = $_POST['landlord_username'];
	$landlord_password  = $_POST['landlord_password'];

	$landlord_username = clean_data($landlord_username, $dbc);
	$landlord_password = clean_data($landlord_password, $dbc);

	$user_check_query = "SELECT * FROM landlord WHERE landlord_username = '$landlord_username'";
	$result = mysqli_query($dbc, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	
	if($user) {

		$confirmation_password = $user['landlord_password'];

		if(password_verify($landlord_password, $confirmation_password)) {

			$_SESSION['landlord_username'] = $user['landlord_username'];
			$_SESSION['landlord_id'] 	   = $user['landlord_id'];

    		header("Location: ../landlord/index.php");
    		exit();
		} 

	} else {
		echo "Not Registered";
	}

}



?>
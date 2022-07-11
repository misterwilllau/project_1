<?php session_start();

// Include the database
include_once("../db_connection.php");
global $dbc;

// Register Behind
if(isset($_POST['tenant_login_button'])) {

	// Get all the data
	$tenant_username  = $_POST['tenant_username'];
	$tenant_password  = $_POST['tenant_password'];

	$tenant_username = clean_data($tenant_username, $dbc);
	$tenant_password = clean_data($tenant_password, $dbc);

	$user_check_query = "SELECT * FROM tenant WHERE tenant_identity = '$tenant_username'";
	$result = mysqli_query($dbc, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	
	if($user) {

		if($tenant_username == $tenant_password) {

			$_SESSION['tenant_id'] 	     = $user['tenant_id'];

    		header("Location: ../tenant/index.php");
    		exit();
		} 

	} else {
		echo "Not Registered";
	}

}



?>
<?php
session_start();

include_once("../../db_connection.php");
global $dbc;

if(isset($_POST['add_property_submit'])) {
	$property_name     = $_POST['property_name'];
	$property_location = $_POST['property_location'];
	$property_address  = $_POST['property_address'];
	$property_owner_id = $_SESSION['landlord_id'];

	
	// Data filtering for duplication
	$property_check_query = "SELECT * FROM property WHERE property_name = '$property_name' LIMIT 1";
	$result = mysqli_query($dbc, $property_check_query);
	$property = mysqli_fetch_assoc($result);

	if($property) {

		// If the username already registered
		if($property['property_name'] == $property_name) {
			echo "Property name already registerd";
		}
	} else {
		$add_property_query = "INSERT INTO property (property_name, property_owner_id, property_location, property_address) 
							   VALUES ('$property_name', '$property_owner_id', '$property_location', '$property_address')";
		$add_property_result = mysqli_query($dbc, $add_property_query);

		if($add_property_result) {
			echo "Add Property Success";
		} else {
			echo mysqli_error($dbc);
		}
	}


}


?>
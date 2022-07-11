<?php
session_start();

include_once("../../db_connection.php");
global $dbc;

if(!isset($_SESSION['landlord_username'])) {
    header("Location: ../../index.php");
    exit();
} else {
	$landlord_id = $_SESSION['landlord_id'];
}

if(isset($_POST['update_profile_pic_button'])) {

	$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/rent_box/landlord/images/profile_picture/" . $landlord_id . "_";
	$target_file = $target_dir . basename($_FILES["landlord_profile_picture"]["name"]);

	$image_name = $landlord_id . "_" . basename($_FILES["landlord_profile_picture"]["name"]);

	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if (move_uploaded_file($_FILES["landlord_profile_picture"]["tmp_name"], $target_file)) {
    	$update_profile_picture_q = "UPDATE landlord SET landlord_profile_picture = '$image_name' WHERE landlord_id = '$landlord_id'";
    	$q_result = mysqli_query($dbc, $update_profile_picture_q);

    	if($update_profile_picture_q) {
    		header("Location: ../profile.php");
    		exit();
    	} else {
    		echo "Failed";
    	}
  	} else {
    	echo "Sorry, there was an error uploading your file.";
  	}

}

?>
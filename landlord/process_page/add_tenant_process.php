<?php
session_start();

$landlord_id = $_SESSION['landlord_id'];

include_once("../../db_connection.php");
global $dbc;

if(isset($_POST['add_tenant_button'])) {

	// Get all the data
	$tenant_name 		    = $_POST['tenant_fullname'];
	$tenant_identity 	    = $_POST['tenant_identity'];
	$tenant_property_id     = $_POST['tenant_property_id'];
	$tenant_contract_length = $_POST['tenant_contract_length'];
	$tenant_deposit    		= $_POST['tenant_deposit'];

	// Insert the data to db
	$q = "INSERT INTO tenant (tenant_fullname, tenant_identity, tenant_property_id, tenant_owner_id, tenant_contract_length) VALUES(
		'$tenant_name', '$tenant_identity', '$tenant_property_id', '$landlord_id','$tenant_contract_length')";
	$result = mysqli_query($dbc, $q);

	if($result) {

		$total_tenant = mysqli_query($dbc, "SELECT COUNT(*) FROM tenant");
		$row = mysqli_fetch_array($total_tenant);

		$total_tenant_number = $row[0];

		// Create the deposit
		$q_deposit = "INSERT INTO deposit (deposit_tenant_id, deposit_amount) VALUES ('$total_tenant_number', '$tenant_deposit')";
		$result_deposit = mysqli_query($dbc, $q_deposit);

		if($result_deposit) {

			// Update the property status from 0 to 1 (Occupied)
			$update_property_q = "UPDATE property SET property_occupy_status = 1 WHERE property_id = '$tenant_property_id'";
			$update_result = mysqli_query($dbc, $update_property_q);

			if($update_result) {

				// Working on the contract & Billing

				// Get the date
				$contract_start = date("Y-m-d");

				// Get the end date
				$contract_finish = $contract_start; 
				$contract_finish = date('Y-m-d', strtotime($contract_finish . ' + ' . $tenant_contract_length . ' years'));

				// Find the length
				$contract_month_total = $tenant_contract_length * 12;

				// Create the contract here
				$q_contract = "INSERT INTO contract (contract_tenant_id, contract_property_id, contract_start, contract_end, contract_billing_total) 
							   VALUES ('$total_tenant_number', '$tenant_property_id', '$contract_start', '$contract_finish', '$tenant_contract_length')";

				$contract_result = mysqli_query($dbc, $q_contract);

				if($contract_result) {

					// The beginning
					$start    = new DateTime($contract_start);
					$end      = new DateTime($contract_finish);

					$interval = DateInterval::createFromDateString('1 month');
					$period   = new DatePeriod($start, $interval, $end);

					foreach ($period as $dt) {

						// Get the latest contract id
						$total_contract = mysqli_query($dbc, "SELECT COUNT(*) FROM contract");
						$row = mysqli_fetch_array($total_contract);

						$total_contract_number = $row[0];

						// Get the billing start & billing end
						$billing_start =  $dt->format("Y-m-d") . "<br>\n";
					    $dt->modify('+ 1 month');
					    $billing_end = $dt->format("Y-m-d") . "<hr>";

						// Insert to billing
						$q_billing = "INSERT INTO billing (billing_contract_id, billing_start, billing_end) 
									  VALUES ('$total_contract_number','$billing_start', '$billing_end')";

						$billing_result = mysqli_query($dbc, $q_billing);

					}
				}
				// End of Contract & Billing
			} else {
				echo "Error " . mysqli_error($dbc);
			}
	
		} else {
			echo "Error " . mysqli_error($dbc);
		}
	
	} else {
		echo "Failed" . mysqli_error($dbc);
	}


}


?>
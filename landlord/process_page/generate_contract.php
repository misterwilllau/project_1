<?php

include_once("../../db_connection.php");
global $dbc;

$contract_tenant_id = 5;
$contract_property_id = 2;
$tenant_billing_total = 2;

// Get the date
$contract_start = date("Y-m-d");

// Get the end date
$contract_finish = $contract_start; 
$contract_finish = date('Y-m-d', strtotime($contract_finish . ' + ' . $tenant_billing_total . ' years'));

// Find the length
$contract_month_total = $tenant_billing_total * 12;

// Create the contract here
$q_contract = "INSERT INTO contract (contract_tenant_id, contract_property_id, contract_start, contract_end, contract_billing_total) 
			   VALUES ('$contract_tenant_id', '$contract_property_id', '$contract_start', '$contract_finish', '$tenant_billing_total')";

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


// Create the contract first
// $q_contract = "INSERT INTO contract (contract_tenant_id, contract_property_id, contract_start, contract_end, contract_billing_total) 
// 			   VALUES ('$contract_tenant_id', '$contract_property_id', '$contract_start', '$contract_end', '$contract_billing_total')";

// $contract_result = mysqli_query($dbc, $q_contract);

// $date1 = new DateTime($contract_start);
// $date2 = new DateTime($contract_finish);

// $diff = $date1->diff($date2);

// $months_different = (($diff->format('%y') * 12) + $diff->format('%m'));

// echo $months_different;


?>
<?php
include("../../conn/conn.php");
$response["success"] = 0;
$response["message"] = "";

$title = $_REQUEST['title'];
$avgsalary = $_REQUEST['avgsalary'];
$lastDate = $_REQUEST['lastDate'];
$did = $_REQUEST['did'];
$rid = $_REQUEST['rid'];
$seats = $_REQUEST['seats'];
$minexperience = $_REQUEST['minexperience'];
$state = $_REQUEST['state'];
$city = $_REQUEST['city'];
$cid = $_REQUEST['cid'];

$query="INSERT INTO `vacancy`( `title`, `lastDate`, `date`, `seats`, `minexperience`, `city`,`state`,`designationid`,`cid`,`roletypeid`,`avgsalary`) VALUES ( '$title', '$lastDate',now(),$seats, $minexperience, '$city', $state, $did, $cid,$rid,$avgsalary )";

if ($result = mysqli_query($conn, $query)) {
	$response["success"] = 1;
	$response["message"] = "Successfully Inserted Vacancy";
} else
	$response["message"] = "Failed To Insert Vacancy";
echo json_encode($response);
?>
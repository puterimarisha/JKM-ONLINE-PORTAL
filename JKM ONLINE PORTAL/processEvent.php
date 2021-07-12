<!-- processEvent -->
<?php

//start session
session_start();
//to connect db
$conn = mysqli_connect("localhost", "root", "", "attendanceeventmanagement") or die(mysqli_error());
//to create query to execute in sql

$query = "SELECT * FROM manageevent";

//to run sql query in db
$result = mysqli_query( $conn, $query) or trigger_error(mysqli_error($conn));
$rows_fetched=mysqli_num_rows($result);
//check whether the query was successful or not
/*if(isset($result)){
	if(mysqli_num_rows($result) == 1) {
	//login OK
	session_regenerate_id();
	$member = mysqli_fetch_assoc($result);*/
if($rows_fetched==0){
	?>
	
<?php
}else {
	$row=mysqli_fetch_array($result);
	$_SESSION['eventName'] = $row['eventName'];
	header("location: HomeVolunteer.php");
	exit();
   }
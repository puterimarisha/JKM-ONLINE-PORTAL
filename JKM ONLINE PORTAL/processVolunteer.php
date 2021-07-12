<!-- processVolunteer.php -->
<?php

//start session
session_start();

//valid error flag
$errflag = false;

//Input valid
if($_POST['Vusrname'] == ''){
	$errmsg_arr[] = 'Username is invalid';
	$errflag = true;
}
if($_POST['Vpsw'] == ''){
	$errmsg_arr[] = 'Password is invalid';
	$errflag = true;
}

//If there are input valid, redirect back to the login form
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: LoginVolunteer.php");
	exit();
}

//to connect db
$conn = mysqli_connect("localhost", "root", "", "attendanceeventmanagement") or die(mysqli_error());
//to create query to execute in sql
$Vusrname = $_POST['Vusrname'];
$Vpsw = $_POST['Vpsw'];
$query = "SELECT * FROM vol_profile WHERE Vusrname = '$Vusrname' AND Vpsw = '$Vpsw'";

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
	
	<script>
	alert("Invalid username and password");
	/*header("location: login-failed-Volunteer.php");*/
	</script>
   <meta http-equiv="refresh" content="1;url= login-failed-Volunteer.php"/> 
<?php
}else {
	$row=mysqli_fetch_array($result);
	$_SESSION['Vusrname'] = $Vusrname;
	$_SESSION['volunteerID'] = $row['volunteerID'];
	/*session_write_close();*/
	header("location: HomeVolunteer.php");
	exit();
   }
	/*else{
        //Login failed
	  alert("Invalid username and password");
      header("location: login-failed-Volunteer.php");
	exit();
    }
}
else{
die("Query failed");
}*/
?>

<!-- <script>
function myFunction() {
  alert("Invalid username and password");
}
</script> -->

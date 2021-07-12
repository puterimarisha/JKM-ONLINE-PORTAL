<!-- processAdmin.php -->
<?php

//start session
session_start();

//valid error flag
$errflag = false;

//Input valid
if($_POST['Ausrname'] == ''){
	$errmsg_arr[] = 'Username is invalid';
	$errflag = true;
}
if($_POST['Apsw'] == ''){
	$errmsg_arr[] = 'Password is invalid';
	$errflag = true;
}

//If there are input valid, redirect back to the login form
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: LoginAdmin.php");
	exit();
}

//to connect db
$conn = mysqli_connect("localhost", "root", "", "attendanceeventmanagement") or die(mysqli_error());
//to create query to execute in sql
$Ausrname = $_POST['Ausrname'];
$Apsw = $_POST['Apsw'];
$query = "SELECT * FROM admin_profile WHERE Ausrname = '$Ausrname' AND Apsw = '$Apsw'";

//to run sql query in db
$result = mysqli_query( $conn, $query) or trigger_error(mysqli_error($conn));
$rows_fetched=mysqli_num_rows($result);
//check whether the query was successful or not
/*if(isset($result)){
	if(mysqli_num_rows($result) == 1) {
	//login OK
	session_regenerate_id();*/
if($rows_fetched==0){
	?>

	<script>
	alert("Invalid username and password");
	/*header("location: login-failed-Admin.php")*/
	</script>
	<meta http-equiv="refresh" content="1;url= login-failed-Admin.php"/> 
	<?php
}else {
	$row = mysqli_fetch_assoc($result);
	$_SESSION['adminID'] = $row['adminID'];
	$_SESSION['Ausrname'] = $row['Ausrname'];
	$_SESSION['eventID'] = $row['eventID'];
	$_SESSION['eventName']= $row['eventName'];
	header("location: HomeAdmin.php");
	exit();
   }
	/*else{
        //Login failed
      //function myFunction() {
      //alert("Invalid username and password");
      header("location: login-failed-Admin.php");
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

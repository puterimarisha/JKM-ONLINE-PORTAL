<!-- authenticatorVolunteer -->
<?php
//Start session
session_start();

//Check whether the login status is true or not
if(!isset($_SESSION['STATUS']) || !$_SESSION['STATUS'] == true) {
header("location: login-failed-Volunteer.php");
exit();
}
?>
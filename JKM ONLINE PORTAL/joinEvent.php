<!-- joinEvent.php -->
<?php                                                   
session_start();
include("dbAdmin.php");
$_GET['eventID'];
$query = "INSERT INTO event_volunteer (eventID, volunteerID, event_attend) VALUES (".$_GET['eventID'].", '".$_SESSION['volunteerID']."', 'empty')";


if (mysqli_query($conn, $query)) {

	echo "<script type='text/javascript'> window.location='HomeVolunteer.php' </script>";
	
} else {
	echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>



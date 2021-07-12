<!-- attend.php -->
<?php                                                   
session_start();
include("dbAdmin.php");
$_GET['eventID'];
$query = "UPDATE event_volunteer 
        JOIN manageevent ON event_volunteer.eventID=manageevent.eventID
        JOIN vol_profile ON event_volunteer.volunteerID=vol_profile.volunteerID
        SET event_attend='Cancel'
        WHERE event_volunteer.volunteerID=".$_SESSION['volunteerID']." 
        AND event_volunteer.event_attend='empty'
        AND event_volunteer.eventID=".$_GET['eventID']."";

if (mysqli_query($conn, $query)) {

	echo "<script type='text/javascript'> window.location='eventAttend.php' </script>";
	
} else {
	echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
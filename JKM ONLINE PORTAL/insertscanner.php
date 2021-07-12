<?php
include("dbAdmin.php");
session_start();

if(isset($_POST['text'])){
$query = "UPDATE event_volunteer 
        JOIN manageevent ON event_volunteer.eventID=manageevent.eventID
        JOIN vol_profile ON event_volunteer.volunteerID=vol_profile.volunteerID
        SET event_attend='Attend'
        WHERE event_volunteer.volunteerID=".$_SESSION['volunteerID']." 
        AND event_volunteer.event_attend='empty'
        AND event_volunteer.eventID=".$_SESSION['eventID']."";

if (mysqli_query($conn, $query)) {

	echo "<script type='text/javascript'> window.location='eventAttend.php' </script>";
	
} else {
	echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
 

}

?>
<!-- updateEadmin.php -->
<?php
include ("dbAdmin.php");

extract ($_POST);


$query = "UPDATE manageevent SET eventImage = '$eventImage', eventName = '$eventName', eventDate = '$eventDate', eventLocation = '$eventLocation', eventDesc = '$eventDesc', eventPoint = '$eventPoint' WHERE eventID = '$eventID'";

$result = mysqli_query($conn,$query) or die ("Could no execute query in editEvent.php");
if($result){
	echo "<script type = 'text/javascript'> window.location='viewEvent.php' </script>";
}
?>
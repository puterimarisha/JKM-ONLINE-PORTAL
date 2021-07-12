<!-- deleteEvent.php -->
<?php session_start();?>
<?php
include ("dbAdmin.php");

$eventID = $_GET['eventID'];

$query = "DELETE FROM manageevent WHERE eventID = '$eventID'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in editEvent.php");

if($result){
echo "<script type= 'text/javascript'> window.location='viewEvent.php'</script>";
}
?>
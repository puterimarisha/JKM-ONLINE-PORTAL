<!-- rewardpage.php -->
<?php session_start();
include("dbAdmin.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>REWARD PAGE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,html{
   background-color: #DAF7A6; 
    height: 100%;
   /* line-height: 0.5;*/
    margin:0px;
    padding: px;
    bottom: 0px;
}
.w3-bar .w3-button {
  padding: 16px;
}
h2{
    color: white; 
    text-align: left;
}
.top{
   /* position: fixed;*/
    left: 0;
    top: 0;
    width: 100%;
    color: black;
    background-color: white;
}
hr {
  border: 1px solid #f1f1f1;
  margin: 25px;
 }
.container {
  border-radius: 5px;
  background-color: #f7ddaa;
  margin: 50px 50px 50px 50px;
}
.containers {
  border-radius: 5px; 
  margin: 50px 90px 2px 60px;
}
table {
  border-collapse: collapse;
  opacity: 0.8;
}
a{
    text-decoration: none;
}
td{
  padding-left: 30px;
  padding-right: 30px;
  padding: 6px;
  font-size: 15px;
}
th{
  padding-left: 30px;
  padding-right: 30px;
  padding: 6px;
  font-size: 29px;
}
footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
   /*height: 25px;*/
}
.container-volunteer{
  border-radius: 5px;
  background-color:#CCD1D1;
  width: 50%;
  padding: 50px;
  margin: 150px auto;
  position: auto;
}
h3{
    
    text-align: right;
    padding-right: 20px;
    
}
h4{
    
    text-align: right;
    padding-right: 20px;
    color: red;
    
}
.redeem{
    
    text-align: right;
    padding-right: 20px;   
}
</style>
</head>

<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar" style="height: 80px;">
    <a href="http://localhost/HomeAdmin.php" class="w3-bar-item w3-button w3-wide w3-hover-amber" style="height: 80px"><img src="logoJKM.jpg" alt="logoJKM" style="height: 50px"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="HomeVolunteer.php #home" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-home"></i> HOME </a>
      <a href="AboutUsVolunteer.php #about" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-user"></i> ABOUT US</a>
      <a href="Event.php" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-th"></i> EVENT</a>
<a href="cert.php" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;">e-CERTIFICATE</a>
<a href="rewardpage.php" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"> REWARDS</a>
      <div class="w3-dropdown-hover w3-right">
    <button class="w3-button"  style="height: 80px;"><img src="img_avatar.png" alt="Avatar" style="width:50px; border-radius: 50%;"></button>
   <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
     <a href="VolunteerView.php" class="w3-bar-item w3-button">VIEW ACCOUNT</a>
    <a href="eventAttend.php" class="w3-bar-item w3-button">ATTEND EVENT</a>
    <a href="logoutVolunteer.php #logout" class="w3-bar-item w3-button">LOGOUT</a>
    </div>
</div>
</div>
</div>
</div>
<br><br><br>
<?php

$sql="SELECT SUM(manageevent.eventPoint) AS sum FROM  event_volunteer 
        JOIN manageevent ON event_volunteer.eventID=manageevent.eventID
        JOIN vol_profile ON event_volunteer.volunteerID=vol_profile.volunteerID
        WHERE event_volunteer.volunteerID=".$_SESSION['volunteerID']." 
        AND event_volunteer.event_attend='Attend'";
$query_result= mysqli_query($conn, $sql);

if (mysqli_num_rows($query_result) > 0){
	while($row = mysqli_fetch_assoc($query_result)){
       
        $eventPoints= $row["sum"] - $_SESSION['total'];
        $_SESSION['eventPoint'] = $eventPoints;
   }
}
?>
<?php
$db="UPDATE vol_profile SET totalPoint = ".$_SESSION['eventPoint']." WHERE volunteerID=".$_SESSION['volunteerID']."";
if (mysqli_query($conn, $db)) {

	$totalPoint=$_SESSION['eventPoint'];
        $_SESSION['totalPoint']=$totalPoint;
        	
} else {
	echo "Error: " . $db . "<br>" . mysqli_error($conn);
}
?>        

<div class="containers">
<h3>Total points: <?php echo $totalPoint; ?> point</h3>
<h4>10 point = RM1</h4>
<div class="redeem">
<a href="http://localhost/RELATIES%20ONLINE%20PORTAL/redeem.php?" ><input type="submit" value="Redeem Points"></a>
<br></div>
</div>


<?php


$query="SELECT * FROM  event_volunteer 
        JOIN manageevent ON event_volunteer.eventID=manageevent.eventID
        JOIN vol_profile ON event_volunteer.volunteerID=vol_profile.volunteerID
        WHERE event_volunteer.volunteerID=".$_SESSION['volunteerID']." 
        AND event_volunteer.event_attend='Attend'";
$result= mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
    
        $eventID = $row["eventID"];
        $eventName =$row["eventName"];
        $eventDate= $row["eventDate"];
        $eventLocation= $row["eventLocation"];
        $eventDesc= $row["eventDesc"];
        $eventImage= $row["eventImage"];
        $eventPoint= $row["eventPoint"];
 
?>

<div class="container">
<table align="center" >
<form method="post" action="joinEvent.php">
<hr>
<tr>
 <td rowspan="5" width="200" height="200"><img src=<?php echo $eventImage; ?> alt="<?php echo $eventImage; ?>"  width="250" height="250"></td>
 <td colspan="3"><b>Events</b></td>
</tr>
<tr>
  <td>EVENT: </td>
  <td><?php echo $eventName; ?></td>
</tr>

<tr>
  <td>DATE: </td>
  <td><?php echo $eventDate; ?></td>
</tr>

<tr>
<td>PLACE: </td>
<td><?php echo $eventLocation; ?></td>
</tr>
<tr>
<td>POINTS: </td>
<td><?php echo $eventPoint; ?></td>
</tr>

</div>
</form>
</table>
<?php
  }
} else {
  echo "0 results";
}
?>
<br><br><br>
<footer class="w3-center w3-white w3-padding-30px">
    <p>Copyright &copy; 2021. JABATAN KEBAJIKAN MASYARAKAT DAERAH PAHANG</p>
</footer>
</body>

</html>



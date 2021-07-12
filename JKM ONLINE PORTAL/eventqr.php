<!-- viewEvent.php -->
<?php session_start();
include("dbAdmin.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW EVENT</title>
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
.container {
  border-radius: 5px solid black;
  background-color: #f7ddaa;
  margin: 0px 90px 120px 60px;
  width: 600px;
  height: 400px;
  float: left;
  border: 1px solid black;
}
.containers {
  border-radius: 5px solid black;
  background-color: #E4E8E8;
  margin: 70px 70px 80px 30px;
  width: 40%;
  height: 400px;
  float: right;
  border: 1px solid black;
}
table {
  border-collapse: collapse;
  opacity: 0.8;
}
td{
  padding-left: 30px;
  padding-right: 30px;
  padding: 6px;
  font-size: 15px;
}
.tables{
    height: 100%;
    width: 100%;
    
}
.info{
    background-color: white;
}


</style>
</head>
<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar" style="height: 80px;">
    <a href="http://localhost/HomeAdmin.php" class="w3-bar-item w3-button w3-wide w3-hover-amber" style="height: 80px"><img src="logoJKM.jpg" alt="logoJKM" style="height: 50px"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="HomeAdmin.php #home" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-home"></i> HOME </a>
      <a href="AboutUsAdmin.php #about" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-user"></i> ABOUT US</a>
      <a href="ManageEventAdmin.php #course" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-th"></i> MANAGE EVENT</a>
      <div class="w3-dropdown-hover w3-right">
    <button class="w3-button"  style="height: 80px;"><img src="img_avatar.png" alt="Avatar" style="width:50px; border-radius: 50%;"></button>
   <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
    <a href="viewEvent.php" class="w3-bar-item w3-button">VIEW EVENT</a>
    <a href="ManageAccountAdmin.php" class="w3-bar-item w3-button">MANAGE ACCOUNT</a>
    <a href="logoutAdmin.php #logout" class="w3-bar-item w3-button">LOGOUT</a>
    </div>
</div>
</div>
</div>
</div>
<br><br><br>
<?php


$eventID = $_GET['eventID'];

$query="SELECT * FROM manageevent WHERE eventID ='$eventID'";
$result= mysqli_query($conn, $query) or die ("Could not execute query in eventqr.php");

if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
    
        $eventID = $row["eventID"];
        $eventName =$row["eventName"];
        $eventDate= $row["eventDate"];
        $eventLocation= $row["eventLocation"];
        $eventDesc= $row["eventDesc"];
        $eventImage= $row["eventImage"];
        $eventTime= $row["eventTime"];
 }
}
?>
<div class="row">
  <div class="col-8">
<div class="container">
<h3 align="center"><b> EVENT</b></h3>
<table align="center" style="width:auto">
<hr>
<tr>
 <td rowspan="6" width="200" height="200"><img src=<?php echo $eventImage; ?> alt="<?php echo $eventImage; ?>"  width="250" height="250"></td>

</tr>

<tr>
  <td>EVENT: </td>
  <td ><?php echo $eventName; ?></td>
</tr>

<tr>
  <td>DATE: </td>
  <td ><?php echo $eventDate; ?></td>
</tr>


<tr>
  <td>TIME: </td>
  <td width="250px"><?php echo $eventTime; ?></td>
</tr>

<tr>
<td>LOCATION: </td>
<td ><?php echo $eventLocation; ?></td>
</tr>

<tr>
<td>DESCRIPTION: </td>
<td ><?php echo $eventDesc; ?></td>
</tr>




<!-- <tr>
<td><?php echo $eventDesc; ?></td>
</tr> -->
</table>
</div>
</div>
<div class="list">
<?php
$_GET['eventID'];
$query = "SELECT * FROM  event_volunteer 
        JOIN manageevent ON event_volunteer.eventID=manageevent.eventID
        JOIN vol_profile ON event_volunteer.volunteerID=vol_profile.volunteerID
        WHERE event_volunteer.eventID=".$_GET['eventID']." 
        AND event_volunteer.event_attend='Attend'";
$result=mysqli_query($conn, $query);
?>
<table class="info" align="center" border="1px" style="width:600px;  line-height:30px position: absolute; margin: 90px 90px 60px 60px;">
<tr>
    <th colspan="7"><h2>Attendees Record</h2></th>
</tr>
<t> <th>NAME</th>
<th>IC</th>
<th>AGE</th>
<th>GENDER</th>
<th>SKILL</th>
<th>INTEREST</th>
<th>PHONE</th>
</t>
<?php
if (mysqli_num_rows($result) > 0){
    while($rows=mysqli_fetch_assoc($result))
    {
?>  <tr>
        <td><?php echo $rows['Vname']; ?></td>
        <td><?php echo $rows['Vic']; ?></td>
        <td><?php echo $rows['Vage']; ?></td>
        <td><?php echo $rows['Vgender']; ?></td>
        <td><?php echo $rows['Vskill']; ?></td>
        <td><?php echo $rows['Vinterest']; ?></td>
        <td><?php echo $rows['VphoneNo']; ?></td>
    </tr>
    <?php
    }
}else {
    echo "0 results";
}
    ?>
</table>
</div>

</div>
</body>
</html>
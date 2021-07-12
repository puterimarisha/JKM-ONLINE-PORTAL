<!-- EventDetails -->
<?php session_start();
?> 
<!DOCTYPE html>
<html>
<head>
<title>EVENT DETAILS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h2{
  font-size: 25px;
  color: #111;
}
.w3-bar .w3-button {
  padding: 16px;
}
body,html
{
  background-color: #DAF7A6 ;
  height: 100%;
    /* line-height: 0.5;*/
    margin:0px;
    padding: px;
    bottom: 0px;
}
.container{
  margin: 30px 300px;
  top: 20px;
}
table{
    background-color: #f7ddaa;
   
}
th,td{
    padding: 30px 10px 50px;
    height: 80%;
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
.top{
   /* position: fixed;*/
    left: 0;
    top: 0;
    width: 100%;
    color: black;
    background-color: white;
}
a{
    text-decoration: none;
}
</style>
</head>
<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar" style="height: 80px;">
    <a href="http://localhost/HomeVolunteer.php" class="w3-bar-item w3-button w3-wide w3-hover-amber" style="height: 80px"><img src="logoJKM.jpg" alt="logoJKM" style="height: 50px"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="HomeVolunteer.php #home" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-home"></i> HOME </a>
      <a href="AboutUsVolunteer.php #about" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-user"></i> ABOUT US</a>
      <a href="Event.php" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-th"></i> EVENT</a>
<a href="index.php" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;">e-CERTIFICATE</a>
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
<br><br><br><br><br>
<?php
include("dbAdmin.php");
$eventID = $_GET['eventID'];
$query="SELECT * FROM manageevent WHERE eventID ='$eventID'";
$result= mysqli_query($conn, $query) or die ("Could not execute query in EventDetails.php");
if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
    
        $eventID = $row['eventID'];
        $eventName =$row["eventName"];
        $eventDate= $row["eventDate"];
        $eventLocation= $row["eventLocation"];
        $eventDesc= $row["eventDesc"];
        $eventImage= $row["eventImage"];
}
}
?>

<table align="center" border="1px" style="width:600px; line-height:30px">
<tr>
    <th colspan="5"><h2>EVENT</h2></th>
</tr>
<t> 
<th>EVENT NAME</th>
<th>EVENT DATE</th>
<th>EVENT LOCATION</th>
<th>EVENT DESCRIPTION</th>
<th></th>
</t>
  <tr>
        
        <td><?php echo $eventName; ?></td>
        <td><?php echo $eventDate; ?></td>
        <td><?php echo $eventLocation; ?></td>
        <td><?php echo $eventDesc; ?></td>
        <td> <a href="http://localhost/RELATIES%20ONLINE%20PORTAL/joinEvent.php?eventID=<?php echo $eventID; ?>" ><input type="submit" value="Apply" onclick="myFunction()"></a><br>
<script>
function myFunction() {
  alert("Successful Apply The Event!!");
}
</script>
</td>
    </tr>

</table>
<footer class="w3-center w3-white w3-padding-30px">
    <p>Copyright &copy; 2021. JABATAN KEBAJIKAN MASYARAKAT DAERAH PAHANG</p>
</footer>
</body>
</html>

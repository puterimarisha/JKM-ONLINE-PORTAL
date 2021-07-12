<!-- editEvent.php -->
<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>CREATE EVENT FOR VOLUNTEER</title>
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
    text-align: center;
}
.top{
   /* position: fixed;*/
    left: 0;
    top: 0;
    width: 100%;
    color: black;
    background-color: white;
}
.container {
  border-radius: 5px;
  background-color: #f7ddaa;
  margin:  150px 150px 150px 450px;
  width: 50%;
}

a{
    text-decoration: none;
}
input[type=text],[type=password], select, textarea{
  width: 100%;
  padding: 12px 20px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  border-radius: 2px;
  box-sizing: border-box;
}
input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
 }
 hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
 }
input[type=submit]{
  width: 100%;
  background-color: #4682B4;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}
input[type=reset] {
  width: 100%;
  background-color: #4682B4;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}
input[type=submit],[type=reset]:hover {
  background-color: #FFFFFF;
  opacity:0.6;
}
table {
  border-collapse: collapse;
  opacity: 0.8;
}
td{
  padding-left: 30px;
  padding-right: 30px;
  font-size: 15px;
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
    <a href="#" class="w3-bar-item w3-button">MANAGE ACCOUNT</a>
    <a href="logoutAdmin.php #logout" class="w3-bar-item w3-button">LOGOUT</a>
    </div>
</div>
</div>
</div>
</div>
<br><br><br>
<?php
include("dbAdmin.php");

$eventID =$_GET['eventID'];

$query = "SELECT * FROM manageevent WHERE eventID = '$eventID'";
$result = mysqli_query($conn, $query) or die ("Could not execute query in editEvent.php"); 
if(mysqli_num_rows($result)> 0){
  while($row = mysqli_fetch_array($result)){
    
    $eventID= $row['eventID'];
    $eventName= $row['eventName'];
    $eventDate= $row['eventDate'];
    $eventLocation= $row['eventLocation'];
    $eventDesc= $row['eventDesc'];
    $eventImage= $row['eventImage'];
    $eventPoint= $row['eventPoint'];
}}
?>
<div class="container" align="center";>
<hr>
<h2>EDIT EVENT</h2>
<hr>
<table align="center";>
<form method="post" action="updateEadmin.php" >
<tr>
    <td>Event Image:</td>
    <td><input type="file" name="eventImage" id="eventImage" value="<?php echo $eventImage; ?>" required >
</tr> 
<tr>
    <td>Event Name:</td>
    <td><input type="text" name="eventName" id="eventName" size="40" placeholder="Eg. Health Charity " value="<?php echo $eventName; ?>" required ></td>
</tr>

<tr>
    <td>Event Date:</td>
    <td><input type="date" name="eventDate" id="eventDate" value="<?php echo $eventDate; ?>" required ></td>
</tr>

<tr>
    <td>Event Location:</td>
    <td><input type="text" name="eventLocation" id="eventLocation" placeholder="Eg. Gambang, Kuantan" value="<?php echo $eventLocation; ?>" required ></td>
</tr>

<tr>
    <td>Event Description:</td>
    <td><textarea name="eventDesc" id="eventDesc" rows="10" cols="30" placeholder="Eg. Volunteers will be involved in community outreach in the public health field.
 They will be the organizers and managers of programs and initiatives that
 promote community wellness. This position requires the ability to identify 
general community health needs, as well as the ability to identify services 
that are necessary for specific populations. The role is focused on creating 
and executing outreach programs that aim to raise awareness on prevention 
and treatment of non-communicable diseases amongst young people." value="<?php echo $eventDesc; ?>" required ></textarea></td>
</tr>

<tr>
    <td>Event Point:</td>
    <td><input type="text" name="eventPoint" id="eventPoint" placeholder="Eg. 10" value="<?php echo $eventPoint; ?>" required ></td>
</tr>



<tr>
<td><div class="clearfix">
<input type="reset" value="Reset"></td>
<input type = "hidden" name="eventID" value="<?php echo $eventID; ?>"></td>
<td><input type="submit" value="Update"></td>
</div></tr>
</form>
</table>
</div>

<br><br>
<footer class="w3-center w3-white w3-padding-30px">
    <p>Copyright &copy; 2021. JABATAN KEBAJIKAN MASYARAKAT DAERAH PAHANG</p>
</footer>
</body>
</html>
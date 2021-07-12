<!-- VolunteerView.php -->
<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW PROFILE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h2{
  font-size: 40px;
  color: black;
  
}
body
{
  background-color: #DAF7A6 ;
}
p{
  text-align: left;
}
.container{
  margin: 50px 600px ;
  top: 0px;
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
<br><br>

<?php
include("dbVolunteer.php"); 


$query = "SELECT * FROM vol_profile WHERE  Vusrname = '".$_SESSION['Vusrname']."'"; 
$result = mysqli_query($conn, $query); 

if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)) { 
    
    $volunteerID = $row["volunteerID"];
  	$Vname = $row["Vname"]; 
    $Vic = $row["Vic"]; 
    $Vage= $row["Vage"];
	  $Vgender = $row["Vgender"]; 
    $Vrace = $row["Vrace"]; 
    $Vreligion=$row["Vreligion"]; 
    $Vaddrss=$row["Vaddrss"]; 
    $Vpostcode=$row["Vpostcode"]; 
    $VphoneNo=$row["VphoneNo"]; 
    $VemailAdd=$row["VemailAdd"]; 
    $VstatusEdu=$row["VstatusEdu"]; 
    $Vwork=$row["Vwork"]; 
    $Vlanguages = $row["Vlanguages"]; 
    $Vinterest = $row["Vinterest"]; 
    $Vskill = $row["Vskill"];
    $Vexperience = $row["Vexperience"]; 
    $egcyNo = $row["egcyNo"]; 
    $dateApp = $row["dateApp"]; 
    $Vusrname = $row["Vusrname"]; 
   	$Vpsw = $row["Vpsw"];

  }
}
?> 


<div class="container">
<h2 style="text-align: center"><b>MY PROFILE</b></h2>
<table class="w3-table-all w3-small" style="width : 600px; position:center; border:">
      <tr>
      <td><p>Username: </td><td><?php echo $Vusrname; ?></p></td>
      </tr>
      <tr><td>
      <p>Name:</td><td> <?php echo $Vname; ?></p></td></tr>
      <tr><td>
      <p>IC: </td><td><?php echo $Vic; ?></p></td></tr>
      <tr><td>
      <p>Age: </td><td><?php echo $Vage; ?></p></td></tr>
      <tr><td>
      <p>Gender: </td><td><?php echo $Vgender; ?></p></td></tr>
      <tr><td>
      <p>Email Address: </td><td><?php echo $VemailAdd; ?></p></td></tr>
      <tr><td>
      <p>Phone No:</td><td> <?php echo $VphoneNo; ?></p></td></tr>
      <tr><td>
      <p>Emergency Contact: </td><td><?php echo $egcyNo; ?></p></td></tr>
    <tr><td></td><td><a href ="http://localhost/RELATIES%20ONLINE%20PORTAL/editVolunteer.php?Vusrname=<?php echo $Vusrname; ?>" ><input type="submit" value="EDIT PROFILE" ></a></td></tr><br>
</div>
</table>
</body>
</html>
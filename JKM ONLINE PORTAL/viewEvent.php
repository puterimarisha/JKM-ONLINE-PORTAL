<!-- viewEvent.php -->
<?php session_start();
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
hr {
  border: 1px solid #f1f1f1;
  margin: 25px;
 }
.container {
  border-radius: 5px;
  background-color: #f7ddaa;
  margin: 50px 50px 50px 50px;
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
    <a href="ManageAccountAdmin.php" class="w3-bar-item w3-button">MANAGE ACCOUNT</a>
    <a href="logoutAdmin.php #logout" class="w3-bar-item w3-button">LOGOUT</a>
    </div>
</div>
</div>
</div>
</div>
<br><br><br>
<?php
include("dbAdmin.php");

$query="SELECT * FROM manageevent";
$result= mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
    
        $eventID = $row["eventID"];
        $eventName =$row["eventName"];
        $eventDate= $row["eventDate"];
        $eventTime= $row["eventTime"];
        $eventLocation= $row["eventLocation"];
        $eventDesc= $row["eventDesc"];
        $eventImage= $row["eventImage"];

 
?>

<div class="container">
<table align="center" >
<hr>
<tr>
 <td rowspan="6" width="200" height="200"><img src=<?php echo $eventImage; ?> alt="<?php echo $eventImage; ?>"  width="210" height="170"></td>
 <td colspan="3"><b>Events</b></td>
</tr>

<tr>
  <td>EVENT: </td>
  <td width="250px"><?php echo $eventName; ?></td>
</tr>

<tr>
  <td>DATE: </td>
  <td width="250px"><?php echo $eventDate; ?></td>
</tr>

<tr>
  <td>TIME: </td>
  <td width="250px"><?php echo $eventTime; ?></td>
</tr>

<tr>
<td>LOCATION: </td>
<td width="250px"><?php echo $eventLocation; ?></td>
</tr>

<tr>
<td>DESCRIPTION: </td>
<td width="250px"><?php echo $eventDesc; ?></td>
</tr>

<tr><td> <a href="http://localhost/RELATIES%20ONLINE%20PORTAL/eventqr.php?eventID=<?php echo $eventID; ?>" ><input type="submit" value="View"></a> <a href="http://localhost/RELATIES%20ONLINE%20PORTAL/editEvent.php?eventID=<?php echo $eventID; ?>" ><input type="submit" value="Edit"></a> <a href="http://localhost/RELATIES%20ONLINE%20PORTAL/deleteEvent.php?eventID=<?php echo $eventID; ?>"><input type="submit" value="Delete"></a><br>
</td></tr>


</div>
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
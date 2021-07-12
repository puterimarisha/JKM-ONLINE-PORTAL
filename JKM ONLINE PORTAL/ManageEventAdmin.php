<!-- ManageEventAdmin.php -->
<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Manage Event</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body
{
  background-color: #DAF7A6 ;
}
table{
      border-spacing: 20px;
      font-size: 20px;
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
<br><br>
<table align="center">
<tc><tr><td>
<a href="createEvent.php" class="" style="height: 100px"><input type="image" src="event.png" alt="create" style="height: 100px"></a>
</td>
<td>
<a href="createEvent.php"><button src="event.png" style="color: black; margin:50px; padding: 30px; border-radius: 15px;border:grey;">CREATE EVENT</button></a>
</tr></td></tc>

<tc><tr><td>
<a href="viewEvent.php" class="" style="height: 100px"><input type="image" src="editevent.png" alt="create" style="height: 100px"></a>
</td>
<td>
<a href="viewEvent.php"><button style="color: black; margin:50px; padding: 30px; border-radius: 15px;border:grey;">EDIT EVENT</button></a>
</tr></td></tc>

<tc><tr><td>
<a href="viewEvent.php" class="" style="height: 100px"><input type="image" src="remove.png" alt="create" style="height: 100px"></a>
</td>
<td>
<a href="viewEvent.php"><button style="color: black; margin:50px; padding: 30px; border-radius: 15px;border:grey;">DELETE EVENT</button></a>
</tr></td></tc>

</table>
<footer class="w3-center w3-white w3-padding-30px">
    <p>Copyright &copy; 2021. JABATAN KEBAJIKAN MASYARAKAT DAERAH PAHANG</p>
</footer>
</body>
</html>
</body>
</html>

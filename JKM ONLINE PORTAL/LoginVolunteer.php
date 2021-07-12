<!-- LoginVolunteer.php -->
<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN | VOLUNTEER</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h2{
    text-align: center;
}
body{
  background: #DAF7A6;
  margin : 0;
  padding: 0;
}
.w3-bar .w3-button{
  padding: 16px;
}
.bottom{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: black;
    text-align: center; 
    background-color: white;
    font-size: 21px;
}
a{
    text-decoration: none;
}
input[type=text],[type=password]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4682B4;
  color: black;
  padding: 20px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #FFFFFF;
}
.container-volunteer{
  border-radius: 5px;
  background-color:#CCD1D1;
  width: 50%;
  padding: 50px;
  margin: 150px auto;
  position: auto;
}
label{
    padding: 5px;
    font-size: 20px;
}
/*{
position: absolute;
  left: 710px;
  top: 330px;
}*/
</style>
</head>
<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar" style="height: 80px;">
    <a href="http://localhost/HomeVP.php" class="w3-bar-item w3-button w3-wide w3-hover-amber" style="height: 80px"><img src="logoJKM.jpg" alt="logoJKM" style="height: 50px"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="HomeVP.php #home" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-home"></i> HOME </a>
      <a href="AboutUsMain.php #about" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-user"></i> ABOUT US</a>
      <a href="registrationForm.php #course" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-th"></i> REGISTRATION</a>
      <a href="loginOption.php" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"> LOGIN</a>
    </div>
</div>
</div>
<?php

// to display error message if username and password is invalid 
if (isset($_SESSION['ERRMSG_ARR']))
{
echo "<h1 style='color:red'>Error Found: ";
for ($i=0; $i<count($_SESSION['ERRMSG_ARR']); $i++){
	echo $_SESSION['ERRMSG_ARR'][$i]."! ";
}
	echo "</h1>";
	unset($_SESSION['ERRMSG_ARR']);
}

?>

<div class="container-volunteer">
<form method="post" action="processVolunteer.php">
<h2>VOLUNTEER LOGIN</h2>
<hr>
<label for="Vusrname">Username</label><br>
<input type="text" name="Vusrname" id="Vusrname" placeholder="Eg: CC18151" required><br><br>
<label for="passWord">Password</label><br>
<input type="password" name="Vpsw" id="Vpsw" placeholder="Eg: *********" required><br>
<input type="submit" value="LOGIN"><br><br>
<a href="registrationForm.php">Don't Have Account Yet? Register Now</a><br><br>
</form>
</div>
</body>
<div class="bottom">
<p>Copyright &copy; 2021. JABATAN KEBAJIKAN MASYARAKAT DAERAH PAHANG</p>
</div>
</html>
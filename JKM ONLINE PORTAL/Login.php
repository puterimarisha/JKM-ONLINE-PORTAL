<!--LoginForm.php-->
<?php
   include("database.php");
   session_start();
?>

<!DOCTYPE html>
<html>
<title>TECH.EDU</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

 body,h3,h4,h5,h6 {
  font-family: "Raleway", sans-serif;
  background-image: url("https://backgrounddownload.com/wp-content/uploads/2018/09/background-for-web-page-design.jpg");
  background-attachment: fixed;
 }

 h1{
  font-family: "Raleway", sans-serif;
  color: black;
   }

 body, html {
  height: 100%;
  line-height: 1.8;
 }

 /* Full height image header 
 .bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("https://backgrounddownload.com/wp-content/uploads/2018/09/background-for-web-page-design.jpg");
  min-height: 100%;
 }*/
 

 .w3-bar .w3-button {padding: 16px;}

 h2{
  text-align: center;
  font-family: Raleway;
  font-size: 1.10em;
  padding-top: 50px;
  color: black;
 }

 /* Full-width input fields */
 input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  border-radius: 4px;
  background: #ffbf00;
 }

 input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
 }

 hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
 }

 /* Set a style for all buttons */
 button {
  background-color: #c0c0c0;
  color: black;
  font-weight: bold;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 10%;
  opacity: 1.0;
 }

 button:hover {
  opacity:0.6;
 }

 /* Extra styles for the cancel button */
 .cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
 }

 /* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  float: center;
  width: 20%;
 }

 /* Add padding to container elements */
 .container {
  padding: 16px;
 }

 /* Clear floats */
 .clearfix::after {
  content: "";
  clear: both;
  display: table;
 }

 /* Change styles for cancel button and signup button on extra small screens */
 @media screen and (max-width: 300px) {.cancelbtn, .signupbtn {width: 100%;}}

 #bttmbar {  
     text-align: center;
     font-size: 0.85em; 
     height: 4em; 
     line-height: 4em;     
     border-top: 1pxsolid #f1f1f1;
     color: #f1f1f1;
     padding-top: 20px;
    }
table {
  border-collapse: collapse;
  background-color: #ffffff;
  opacity: 0.8;
}
th, td{
  padding-left: 30px;
  padding-right: 30px;
}


</style>

<body>

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
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar" style="height: 80px;">
    <a href="http://localhost/MainPageredone.php" class="w3-bar-item w3-button w3-wide w3-hover-amber" style="height: 80px"><img src="logo.png" alt="logo" style="height: 50px"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="MainPageredone.php #about" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;">ABOUT </a>
      <a href="MainPageredone.php #team" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-user"></i> TEAM</a>
      <a href="MainPageredone.php #course" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-th"></i> COURSE</a>
      <a href="MainPageredone.php #contact" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="#login" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"> LOGIN</a>
      <a href="SignInForm.php" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"> SIGN UP</a>

    </div>

<!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close �</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#course" onclick="w3_close()" class="w3-bar-item w3-button">COURSE</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<table align="center" style="width: 50%; color: black; margin: 50px; border-radius: 10px">
<form method = "post" action="loginProcess.php" style="border:1px solid #ccc">
<div class="container">
    <tr><th><h1>Login</h1></th></tr>
    <hr>
	
    <tr><td><label><b>Username</b></label>
    <input type="text" placeholder="e.g John Doe	*" name="username" required></td></tr>

    <tr><td><label for="psw"><b>Password</b></label>
    <input type="password" placeholder="*password*" name="psw" required></td></tr>



    <tr><td><center><div class="clearfix">
     <button type="submit" class="signupbtn">Login</button></center>
    </div></td></tr>
  </div>
</form>
</table>

  <div id="bttmbar">Copyright &copy; TECH.EDU. All right reserved.</div>

</body>
</html>
<!-- HomeVolunteer.php-->
<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>HOME | COMMUNITIES ONLINE PORTAL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a{
    text-decoration: none;
}
h1{
    color: white;
    text-align: center;
}
body,html{
    background-color: #DAF7A6  ;
    height: 100%;
    line-height: 1.8;
    margin : 0;
    padding: 0;
}
/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("ii.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
.mySlides {
    display:none;
    }
.w3-left, .w3-right, .w3-badge {
    cursor:pointer;
    }
.w3-badge {
    height:13px;
    width:13px;
    padding:0;
    }
pre{
    font-size: 20px;
}
.quote{
    left: 250px;
    top: 250px;
    background-color: white;
    border-style: solid;
    border-color: grey;
    position: absolute ;
    float: right;
    border-collapse: initial;
    line-height: 1.8;
}
p{
    font-size: 16px;
    text-align: center;
}
.container {
  padding: 8px;
  width: 50%;
  position: relative;
  left: 25%;
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
    <a href="eventAttend.php" class="w3-bar-item w3-button">EVENT ATTEND</a>
    <a href="logoutVolunteer.php #logout" class="w3-bar-item w3-button">LOGOUT</a>
  </div>
    </div>
</div>
</div>
</div>
<!-- <h1>WELCOME TO JKM ONLINE ATTENDANCE</h1>-->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
<center>
<div class="w3-display-left w3-text-white" style="padding: 330px"> 
<span class="w3-jumbo w3-hide-small" style="text-align: center">Welcome to JKM Online Portal</span>
<br>
<span class="w3-xxlarge w3-hide-large w3-hide-medium">Start your new volunteering here with one click!</span>
<br>
<p>
<a href="AboutUsVolunteer.php #about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"> Let gain new experience with us today!</a>
</p>
</div>
</center>
</header>
<div class="container">
    <pre class="quote">
    &ldquo; Our generation has the ability and the responsibility 
                             
         to make our ever-more connected world a more
                                
           hopeful, stable and peaceful place. &rdquo;
                                  
                  &ndash; Natalie Portman
    </pre>
    </div>
    <div class="w3-content w3-display-container" style="max-width:400px;margin:110px;padding:10px;">

<br><br>
  <img class="mySlides" src="colorRun.jpg" style="width:100%">
  <img class="mySlides" src="2.jpg" style="width:100%">
  <img class="mySlides" src="4.jpeg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:90%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>
<h2 align="center"><b>TODAY EVENTS</b></h2><br>
<?php
include("dbAdmin.php");

$query="SELECT * FROM manageevent WHERE DATE(eventDate) = CURDATE()";
$result= mysqli_query($conn, $query) or die ("Could not execute query in HomeVolunteer.php");

if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
    
        $eventID = $row["eventID"];
        $eventName =$row["eventName"];
        $eventDate= $row["eventDate"];
        $eventLocation= $row["eventLocation"];
        $eventDesc= $row["eventDesc"];
        $eventImage= $row["eventImage"];
        $eventTime= $row["eventTime"];
 ?>
<div class="containers" style="background-color: #f7ddaa; margin: 50px 100px 30px 80px;">
<table align="center" >
<form method="post" action="joinEvent.php">
<hr>
<tr>
 <td rowspan="6" width="200" height="200"><img src=<?php echo $eventImage; ?> alt="<?php echo $eventImage; ?>"  width="210" height="190"></td>
 <td colspan="3"><b>Events</b></td>
</tr>
<tr>
  <td width="250px"><?php echo $eventName; ?></td>
</tr>

<tr>
  <td width="250px"><?php echo $eventDate; ?></td>
</tr>

<tr>
  <td width="250px"><?php echo $eventTime; ?></td>
</tr>

<tr>
<td width="250px"><?php echo $eventLocation; ?></td>
</tr>

<tr><td><button><a href="EventDetails.php">See Details</a></button><br>
</td></tr>
</form>
</table>
<?php
}
} else {
  echo "NO EVENT FOR TODAY";
}
?>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<br><br><br>
<footer class="w3-center w3-white w3-padding-30px">
    <p>Copyright &copy; 2021. JABATAN KEBAJIKAN MASYARAKAT DAERAH PAHANG</p>
</footer>
</body>
</html>
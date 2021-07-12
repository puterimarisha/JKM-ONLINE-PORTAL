<!-- loginOption.php-->
<!DOCTYPE html>
<html>
<head>
<title>LOGIN OPTION | RELATIES ONLINE PORTAL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
   background-color: #DAF7A6 ;
   height: 100%;
    line-height: 1.8;
    margin : 0;
    padding: 0;
}
p{
    font-size: 16px;
    text-align: center;
}
/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}
.w3-bar .w3-button {
  padding: 16px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 600px;
  height:350px;
  border-radius: 6px;
  position: auto;
 /* margin-top: 350px;
  margin-left: 35%;*/
  background-color: #CCD1D1;
  padding: 50px;
  margin: 200px auto;
  top: 50px;

  }
td,pre
{
  text-align:center;
}
.card:hover {
  box-shadow: 0 8px 10px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
  text-align:center;
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
table{
   padding: 0px;
   text-align:center;
}
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
<div class="card">
<h3 style="text-align:center;"><b>*Select the Category*</b></h3>
<table align="center;">
  <tr>
  <td><h4><b style="text-align: center;">VOLUNTEER</b></h4> 
  <a href="LoginVolunteer.php"><img src="volunteer.png" alt="volunteer">
  <div class="container">
  <pre>For Registered Volunteer use !</pre> 
  </div></td>

  <td><h4><b style="text-align: center;">ADMIN</b></h4> 
  <a href="LoginAdmin.php"><img src="admin.png" alt="admin">
  <pre>For Admin use only !</pre> 
  </td>
  </tr>
  <table>
</div>
<footer class="w3-center w3-white w3-padding-30px">
    <p>Copyright &copy; 2021. JABATAN KEBAJIKAN MASYARAKAT DAERAH PAHANG</p>
</footer>
</body>
</html>
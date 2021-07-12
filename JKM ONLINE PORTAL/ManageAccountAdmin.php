<!-- ManageAccountAdmin.php -->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Fetch Data From Database</title>
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
    background-color: #DAF7A6 ;
    height: 100%;
    line-height: 1.8;
    margin : 0;
    padding: 0;
}
/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("cover.jpg");
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
   /*position: fixed;*/
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
   /*height: 25px;*/
}
table{
    background-color: #f7ddaa;
}
th,td{
    padding: 10px 50px;
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
      <a href="ManageEventAdmin.php" class="w3-bar-item w3-button w3-hover-amber" style="height: 80px;"><i class="fa fa-th"></i> MANAGE EVENT</a>
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
include("dbVolunteer.php");

$query = "SELECT * FROM vol_profile";
$result=mysqli_query($conn, $query);
?>
<table align="center" border="1px" style="width:600px; line-height:30px">
<tr>
    <th colspan="7"><h2>Volunteer Record</h2></th>
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
<br><br><br>
<footer class="w3-center w3-white w3-padding-30px">
    <p>Copyright &copy; 2021. JABATAN KEBAJIKAN MASYARAKAT DAERAH PAHANG</p>
</footer>
</body>
</html>
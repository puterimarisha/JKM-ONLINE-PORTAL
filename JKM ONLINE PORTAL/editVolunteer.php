<!-- editVolunteer -->
<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>EDIT PROFILE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
/*body{
    font-size: 24px;
    background-color: #DAF7A6; 
    background-size: cover;
    background-position: center;
    height: 100%;
    line-height: 1.8;
    font-family: "Raleway", sans-serif
}*/
body,html{
    background-color: #DAF7A6; 
    height: 100%;
   /* line-height: 0.5;*/
    margin:0px;
    padding: px;
    bottom: 0px;
}
.w3-bar .w3-button  {
    padding: 16px;
}
h2{
    color: white; 
    text-align: center;
}
.top{
  /*  position: fixed;*/
    left: 0;
    top: 0;
    width: 100%;
    color: black;
    background-color: white;
}
.container {
  border-radius: 5px;
  background-color: #BFCAE2;
  padding: 8px;
  width: 50%;
  position: auto;
  left: 500px;
  top: 50px;
  line-height: 1.8;
  margin: 200px auto;
}
/*.bottom{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: black;
    text-align: center; 
    background-color: white;
}*/
a{
    text-decoration: none;
}

/*.error {
    color: #FF0000;
}*/
input[type=text],[type=password], select, textarea{
  width: 100%;
  padding: 12px 20px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
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
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset] {
  width: 100%;
  background-color: #4682B4;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
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
}

footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
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
<?php
include("dbVolunteer.php"); 

$query = "SELECT * FROM vol_profile WHERE volunteerID = '".$_SESSION['volunteerID']."'";
$result = mysqli_query($conn, $query) or die ("Could not execute query in editVolunteer.php"); 
$row = mysqli_fetch_array($result); 

    $Vname = $row['Vname']; 
    $Vic = $row['Vic'];
    $Vage= $row['Vage'] ;
	$Vgender = ['Vgender'] ; 
    $Vrace = $row['Vrace']; 
    $Vreligion=$row['Vreligion']; 
    $Vaddrss=$row['Vaddrss'] ; 
    $Vpostcode=$row['Vpostcode'] ; 
    $VphoneNo=$row['VphoneNo']; 
    $VemailAdd=$row['VemailAdd'] ; 
    $VstatusEdu=$row['VstatusEdu']; 
    $Vwork=$row['Vwork']; 
    $Vlanguages = $row['Vlanguages']; 
    $Vinterest = $row['Vinterest']; 
    $Vexperience = $row['Vexperience'] ; 
    $egcyNo = $row['egcyNo'] ; 
    $dateApp = $row['dateApp']; 
    $Vusrname = $row['Vusrname']; 
   	$Vpsw = $row['Vpsw'];

?>
<div class="container">
<h2>Edit Profile</h2>
<hr>
<table align="center";>
<form method="post" action="updateVOL.php">
<tr>
    <td>Name:</td>
    <td><input type="text" name="Vname" id="Vname" size="40" placeholder="Eg. AHMAD BIN ALI"  value ="<?php echo $Vname; ?> " required ></td>
</tr>

<tr>
    <td>IC:</td>
    <td><input type="text" name="Vic" id="Vic" placeholder="Eg. 000115115219"  value ="<?php echo $Vic; ?> " required ></td>
</tr>

<tr>
    <td>Age:</td>
    <td><input type="text" name="Vage" id="Vage" placeholder="Eg. 20"  value ="<?php echo $Vage; ?> "required ></td>
</tr>
<tr>
    <td>Gender:</td>
    <td><input type="radio" name="Vgender" id="male" value="male">Male
        <input type="radio" name="Vgender" id="female" value="female">Female</td>
</tr>

<tr>
    <td>Race:</td>
    <td><input type="text" name="Vrace" id="Vrace" placeholder="Eg. MALAY"   value ="<?php echo $Vrace; ?> " required ></td>
</tr>

<tr>
    <td>Religion:</td>
    <td><input type="text" name="Vreligion" id="Vreligion" placeholder="Eg. ISLAM" value ="<?php echo $Vreligion; ?> "required ></td>
</tr>

<tr>
    <td>Address:</td>
    <td><textarea name="Vaddrss" id="Vaddrss" rows="10" cols="30" value ="<?php echo $Vaddrss; ?> ">
    </textarea></td>
</tr>

<tr>
    <td>Postcode:</td>
    <td><input type="text" name="Vpostcode" id="Vpostcode" placeholder="Eg. 21060" value ="<?php echo $Vpostcode; ?> " required ></td>
</tr>

<tr>
    <td>Phone No:</td>
    <td><input type="text" name="VphoneNo" id="VphoneNo" placeholder="Eg. 0199474949" value ="<?php echo $VphoneNo; ?> "required ></td>
</tr>

<tr>
    <td>Email Address:</td>
    <td><input type="email" name="VemailAdd" id="VemailAdd" size="40" placeholder="Eg. ahmadali@gmail.com" value ="<?php echo $VemailAdd; ?> "required ></td>
</tr>

<tr>
    <td>Status Education:</td>
    <td><input type="checkbox" name="VstatusEdu" id="UPSR" value="UPSR" >UPSR
        <input type="checkbox" name="VstatusEdu" id="PMR/PT3" value="PMR/PT3" >PMR/PT3
        <input type="checkbox" name="VstatusEdu" id="SPM" value="SPM" >SPM
        <input type="checkbox" name="VstatusEdu" id="Other" value="Other" >Other
    </td>
</tr>

<tr>
    <td>Work:</td>
    <td><input type="text" name="Vwork" id="Vwork" placeholder="Eg. ENGINEER" value ="<?php echo $Vwork; ?> " required ></td>
</tr>

<tr>
    <td>Language Speech:</td>
    <td><input type="text" name="Vlanguages" id="Vlanguages" size="40" placeholder="Eg. ENGLISH, MANDARIN & MALAY"  value ="<?php echo $Vlanguages; ?> "required ></td>
</tr>

<tr>
    <td>Area Of Community Interest:</td>
    <td><select name="Vinterest" id="Vinterest">
    <option>Please Choose</option>
    <option>folk</option>
    <option>kid</option>
    <option>Communities</option>
    </select required></td>
</tr>

<tr>
    <td>Skill:</td>
    <td><select name="Vskill" id="Vskill">
    <option>Please Choose</option>
    <option>Leadership</option>
    <option>Teamwork</option>
    <option>Commitment</option>
    <option>Communication</option>
    <option>Compassion</option>
    <option>Time Management</option>
    </select required></td>
</tr>

<tr>
    <td>Experience:</td>
    <td><textarea name="Vexperience" id="Vexperience" rows="10" cols="30" value ="<?php echo $row['Vexperience']; ?> ">
    </textarea></td>
</tr>

<tr>
    <td>Emergency Contact No:</td>
    <td><input type="text" name="egcyNo" id="egcyNo" placeholder="Eg. 0198765432" value ="<?php echo $row['egcyNo']; ?> " required ></td>
</tr>

<tr>
    <td>Date of Application:</td>
    <td><input type="date" name="dateApp" id="dateApp" value ="<?php echo $row['dateApp']; ?> "  required ></td>
</tr>

<tr>
    <td>Username:</td>
    <td><input type="text" name="Vusrname" id="Vusrname" placeholder="Eg. ahmadAli" value ="<?php echo $row['Vusrname']; ?> " required ></td>
</tr>

<tr>
    <td>Password:</td>
    <td><input type="password" name="Vpsw" id="Vpsw" value ="<?php echo $row['Vpsw']; ?> " required ></td>
</tr>

<tr>
<td><div class="clearfix">
<input type="reset" value="Reset"></td>
<input type = "hidden" name="volunteerID" value="<?php echo $row['volunteerID']; ?>">
<td><input type="submit" value="Update"></td>
</div></tr>
</form>
</table>
</div>
<br><br><br><br>

<footer class="w3-center w3-white w3-padding-30px">
    <p>Copyright &copy; 2021. JABATAN KEBAJIKAN MASYARAKAT DAERAH PAHANG</p>
</footer>
</body>
</html>
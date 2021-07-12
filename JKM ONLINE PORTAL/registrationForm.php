<!-- registrationForm.php -->
<!DOCTYPE html>
<html>
<head>
<title>REGISTRATION FORM</title>
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
/* Full height image header */
/*.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}*/

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
  background-color: #CCD1D1;
  padding: 2px;
  width: 60% ;
  position: auto;
  left: 500px;
  top: 50px;
  line-height: 1.8;
  margin: 100px auto;
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
  height: 18px;
  margin: 25px;
  padding: 100px;
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
<br><br><br>
<div class="container">
<h2>Volunteer Registration Form</h2>
<hr>
<table align="center";>
<form method="post" action="insertVol.php" >
<tr>
    <td>Name:</td>
    <td><input type="text" name="Vname" id="Vname" size="40" placeholder="Eg. AHMAD BIN ALI" required ></td>
</tr>

<tr>
    <td>IC:</td>
    <td><input type="text" name="Vic" id="Vic" placeholder="Eg. 000115115219" required ></td>
</tr>

<tr>
    <td>Age:</td>
    <td><input type="text" name="Vage" id="Vage" placeholder="Eg. 20" required ></td>
</tr>
<tr>
    <td>Gender:</td>
    <td><input type="radio" name="Vgender" id="male" value="male">Male
        <input type="radio" name="Vgender" id="female" value="female">Female</td>
</tr>

<tr>
    <td>Race:</td>
    <td><input type="text" name="Vrace" id="Vrace" placeholder="Eg. MALAY" required ></td>
</tr>

<tr>
    <td>Religion:</td>
    <td><input type="text" name="Vreligion" id="Vreligion" placeholder="Eg. ISLAM" required ></td>
</tr>

<tr>
    <td>Address:</td>
    <td><textarea name="Vaddrss" id="Vaddrss" rows="10" cols="30">
    </textarea></td>
</tr>

<tr>
    <td>Postcode:</td>
    <td><input type="text" name="Vpostcode" id="Vpostcode" placeholder="Eg. 21060" required ></td>
</tr>

<tr>
    <td>Phone No:</td>
    <td><input type="text" name="VphoneNo" id="VphoneNo" placeholder="Eg. 0199474949" required ></td>
</tr>

<tr>
    <td>Email Address:</td>
    <td><input type="email" name="VemailAdd" id="VemailAdd" size="40" placeholder="Eg. ahmadali@gmail.com" required ></td>
</tr>

<tr>
    <td>Status Education:</td>
    <td><input type="checkbox" name="VstatusEdu" id="UPSR" value="UPSR" >UPSR
        <input type="checkbox" name="VstatusEdu" id="PMR/PT3" value="PMR/PT3" >PMR/PT3
        <input type="checkbox" name="VstatusEdu" id="VsSPMtatusEdu" value="SPM" >SPM
        <input type="checkbox" name="VstatusEdu" id="Other" value="Other" >Other
    </td>
</tr>

<tr>
    <td>Work:</td>
    <td><input type="text" name="Vwork" id="Vwork" placeholder="Eg. ENGINEER" required ></td>
</tr>

<tr>
    <td>Language Speech:</td>
    <td><input type="text" name="Vlanguages" id="Vlanguages" size="40" placeholder="Eg. ENGLISH, MANDARIN & MALAY" required ></td>
</tr>

<tr>
    <td>Area Of Community Interest:</td>
    <td><select name="Vinterest" id="Vinterest">
    <option>Please Choose</option>
    <option>Folk</option>
    <option>Children</option>
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
    <td><textarea name="Vexperience" id="Vexperience" rows="10" cols="30">
    </textarea></td>
</tr>

<tr>
    <td>Emergency Contact No:</td>
    <td><input type="text" name="egcyNo" id="egcyNo" placeholder="Eg. 0198765432" required ></td>
</tr>

<tr>
    <td>Date of Application:</td>
    <td><input type="date" name="dateApp" id="dateApp"  required ></td>
</tr>

<tr>
    <td>Username:</td>
    <td><input type="text" name="Vusrname" id="Vusrname" placeholder="Eg. ahmadAli" required ></td>
</tr>

<tr>
    <td>Password:</td>
    <td><input type="password" name="Vpsw" id="Vpsw"  required ></td>
</tr>

<tr>
<td>
<input type="reset" value="Reset"></td>
<td><input type="submit" onclick="message()" value="Finish"></td>
</tr>
</form>
</table>
</div>
<script>
    function message(){
        alert("Congratulation! Thanks for joining us.");
        return true;
    }
</script>
<br>
<footer class="w3-center w3-white w3-padding-30px">
    <p>Copyright &copy; 2021. JABATAN KEBAJIKAN MASYARAKAT DAERAH PAHANG</p>
</footer>
</body>
</html>
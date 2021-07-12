<!-- insertVol.php -->

<?php

include("dbVolunteer.php");

extract($_POST);
$query = "INSERT INTO vol_profile (Vname, Vic, Vage, Vgender, Vrace, Vreligion, Vaddrss, Vpostcode, VphoneNo, VemailAdd, VstatusEdu, Vwork, Vlanguages, Vinterest, Vskill, Vexperience, egcyNo, dateApp, Vusrname, Vpsw )
VALUES ('$Vname', '$Vic', '$Vage', '$Vgender', '$Vrace', '$Vreligion','$Vaddrss', '$Vpostcode', '$VphoneNo', '$VemailAdd', '$VstatusEdu', '$Vwork','$Vlanguages', '$Vinterest', '$Vskill', '$Vexperience', '$egcyNo', '$dateApp', '$Vusrname', '$Vpsw')";

if (mysqli_query($conn, $query)) {

	echo "<script type='text/javascript'> window.location='HomeVP.php' </script>";
	
} else {
	echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>

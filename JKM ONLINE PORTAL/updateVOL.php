<!-- updateVOL.php -->
<?php

include ("dbVolunteer.php");

extract ($_POST);

$query= "UPDATE vol_profile Set Vname='$Vname', Vic='$Vic', Vage='$Vage', Vgender='$Vgender', Vrace='$Vrace', Vreligion='$Vreligion', Vaddrss='$Vaddrss',Vpostcode='$Vpostcode', VphoneNo='$VphoneNo', VemailAdd='$VemailAdd', VstatusEdu='$VstatusEdu', Vwork='$Vwork', Vlanguages='$Vlanguages', Vinterest='$Vinterest', Vskill='$Vskill', Vexperience='$Vexperience', egcyNo='$egcyNo', dateApp='$dateApp', Vusrname= '$Vusrname', Vpsw='$Vpsw' WHERE volunteerID = '$volunteerID'";

$result = mysqli_query ($conn, $query) or die ("Could not execute query in editVolunteer.php");

if($result) {
    echo "<script type='text/javascript'> window.location='VolunteerView.php'</script>";
}

?>
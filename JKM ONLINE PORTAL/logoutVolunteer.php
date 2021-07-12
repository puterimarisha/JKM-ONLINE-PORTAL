<!-- logoutVolunteer -->
<?php
session_start();

session_destroy();

header("location: HomeVP.php");

?>
<!-- dbAdmin.php -->
<?php

define("DATABASE_HOST", "localhost");
define("DATABASE_USER", "root");

$conn = mysqli_connect(DATABASE_HOST, DATABASE_USER);

//if connection failed then display mysql error
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: ". mysqli_connect_error();
	}
	
//To select one particular database to be used
mysqli_select_db($conn, "attendanceeventmanagement") or die("could not open product database");

?>
<!-- redeem.php -->
<?php                                                   
session_start();
include("dbAdmin.php");
$redeem = ($_SESSION['totalPoint'] * 0.1) * 10;
$total = $_SESSION['totalPoint'] - $redeem;

$query = "INSERT INTO redeem (volunteerID, totalPoint, date, redeemPoint) VALUES ('".$_SESSION['volunteerID']."', '$total', 'NOW()', '$redeem')";

$_SESSION['total']=$redeem;

if (mysqli_query($conn, $query)) {

	echo "<script type='text/javascript'> window.location='rewardpage.php' </script>";
	
} else {
	echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
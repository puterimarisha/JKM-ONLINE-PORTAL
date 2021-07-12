<!-- update.php -->
<?php
include ("dbaseHT.php");

extract ($_POST);


$query = "UPDATE customerInfo SET fname = '$fname', lname = '$lname', email = '$email', phoneNo = '$phoneNo', address = '$address', laptop='$laptop', laptopPrice='$laptopPrice', quantity='$quantity', payment='$payment', totalPrice='totalPrice' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could no execute query in ubah.php");
if($result){
	echo "<script type = 'text/javascript'> window.location='view.php' </script>";
}
?>
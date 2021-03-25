<?php
	
	include ("dbconnect.php");
	
	$rec_id = $_GET['rec_id'];
	
	$supplier = $_POST['supplier'];
	$a_lname = $_POST['a_lname'];
	$a_fname = $_POST['a_fname'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	
	$sql = "update tblSupplier
				set Supplier = '$supplier',
					A_LName = '$lname',
					A_FName = '$fname',
					City = '$city',
					Address = '$address',
					
			
					where rec_id = $rec_id";
					
	$q = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	header("location: Supplier.php")
	
?>
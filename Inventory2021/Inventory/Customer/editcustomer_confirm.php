<?php
	
	include ("dbconnect.php");
	
	$rec_id = $_GET['rec_id'];
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$city = $_POST['city'];
	
	$sql = "update tblCustomer
				set FName = '$fname',
					LName = '$lname',
					City = '$city',
			
					where rec_id = $rec_id";
					
	$q = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	header("location: Customer.php")
	
?>
<?php
	
		$conn = mysqli_connect("localhost","root","","Inventory_db")
				or die(mysqli_error($conn));
				
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$city = $_POST ['city'];
	
		
		$sql = "insert into tblCustomer (FName, LName, City)
				values('$fname','$lname','$city')";
				
		$q = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		
		header("location:Customer.php");
?>
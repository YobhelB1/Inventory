<?php
	
		$conn = mysqli_connect("localhost","root","","Inventory_db")
				or die(mysqli_error($conn));
				
		$supplier = $_POST ['supplier'];		
		$a_fname = $_POST['a_fname'];
		$a_lname = $_POST['a_lname'];
		$city = $_POST ['city'];
		$address = $_POST ['address'];
	
		
		$sql = "insert into tblSupplier (Agent_FName, Agent_LName, City, Supplier, Address)
				values('$a_fname','$a_lname','$city','$supplier','$address')";
				
		$q = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		
		header("location:Supplier.php");
?>
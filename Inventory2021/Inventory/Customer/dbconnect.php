<?php
	
	$conn = mysqli_connect("localhost","root","","Inventory_db") or die(mysqli_error($conn));
	
	$sql = "Select * from tblCustomer";
	$q = mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>
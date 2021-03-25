<?php
	
	$conn = mysqli_connect("localhost","root","","inventory_db") or die(mysqli_error($conn));
	
	$sql = "Select * from tblProduct";
	$q = mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>
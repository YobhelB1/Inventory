<?php
		
	include("dbconnect.php");
	
	$sql = "delete from tblProduct where rec_id = ".$_GET['rec_id'];
	$q = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
	header("location:Inventory.php");

?>
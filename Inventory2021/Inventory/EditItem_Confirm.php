<?php
	
	include ("dbconnect.php");
	
	$rec_id = $_GET['rec_id'];
	
	$product = $_POST['prod'];
	$category = $_POST['cat'];
	$cost = $_POST['cost'];
	$descr = $_POST['descr'];
	
	$sql = "update tblProduct
				set Product = '$product',
					Category = '$category',
					Cost = '$cost',
					Descr = '$descr'
					where rec_id = $rec_id";
					
	$q = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	header("location: Inventory.php")
	
?>
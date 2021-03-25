<?php
		include ("dbconnect.php");
				
		$product = $_POST['prod'];
		$category = $_POST['cat'];
		$cost = $_POST ['cost'];
		$descr = $_POST['descr'];
		
		$sql = "insert into tblProduct(Product, Category, Cost, Descr)
				values('$product','$category','$cost','$descr')";
				
		$q = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		
		header("location:Inventory.php");
?>
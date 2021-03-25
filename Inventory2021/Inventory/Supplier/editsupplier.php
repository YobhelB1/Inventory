<?php

	include("dbconnect.php");
	
	echo "<link rel='stylesheet' type='text/css' href='../css/style.css'>";
	
	$rec_id = $_GET['rec_id']; 
	
	
	$sql = "select * from tblSupplier where rec_id = $rec_id";
	
	
	$q = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
	$r=mysqli_fetch_assoc($q);

?>

<div class="header">
<h1> Edit Customer</h1>
</div>

<form class = "table2" method="post" action="editsupplier_confirm.php?rec_id=<?php echo $rec_id;?>">

	Supplier: <br>
		<input type="text" name="supplier" value="<?php echo $r['Supplier'];?>">
		<br>
		
	Agent Lastname:<br>
		<input type="text" name="a_lname" value="<?php echo $r['Agent_LName'];?>">
		<br>
		
	Agent Firstname:<br>
		<input type="text" name="a_fname" value="<?php echo $r['Agent_FName'];?>">
		<br>
	
	City: <br>
		<input type="text" name="city" value="<?php echo $r['City'];?>">
		<br>
		
	Address:<br>
		<input type="text" name="address" value="<?php echo $r['Address'];?>">
		<br>
		
		<br>
	
		<input type="submit" name="submit" value="Edit Supplier">
</form>

<form class="center" method="post" action="Supplier.php">
<input type="submit" name="submit" value="Back">
</form>	

	

	
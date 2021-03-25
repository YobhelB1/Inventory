<?php

	include("dbconnect.php");
	
	echo "<link rel='stylesheet' type='text/css' href='../css/style.css'>";
	
	$rec_id = $_GET['rec_id']; 
	
	
	$sql = "select * from tblCustomer where rec_id = $rec_id";
	
	
	$q = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
	$r=mysqli_fetch_assoc($q);

?>

<div class="header">
<h1> Edit Customer</h1>
</div>

<form class = "table2" method="post" action="editcustomer_confirm.php?rec_id=<?php echo $rec_id;?>">


	Lastname:<br>
		<input type="text" name="lname" value="<?php echo $r['LName'];?>">
		<br>
	
	Firstname:<br>
		<input type="text" name="fname" value="<?php echo $r['FName'];?>">
		<br>
	
	City: <br>
		<input type="text" name="city" value="<?php echo $r['City'];?>">
		<br>
		<br>
	
		<input type="submit" name="submit" value="Edit Customer">
</form>

<form class="center" method="post" action="Customer.php">
<input type="submit" name="submit" value="Back">
</form>	

	

	
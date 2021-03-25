<?php

	include("dbconnect.php");
	
	echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
	
	$rec_id = $_GET['rec_id']; 
		
	$sql = "select * from tblProduct where rec_id = $rec_id";
	$q = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
	$r=mysqli_fetch_assoc($q);

?>

<div class="header">
<h1> Edit Item </h1>
</div>

<form class = "table2" method="post" action="EditItem_Confirm.php?rec_id=<?php echo $rec_id;?>">

	
	Product: <br>
			<input type="text" name="prod" value="<?php echo $r['Product'];?>">
			<br>
	Category:<br>
			<input type="text" name="cat" value="<?php echo $r['Category'];?>">
			<br>
	Cost:	<br>
			<input type="text" name="cost" value="<?php echo $r['Cost'];?>">
			<br>
	Description: <br>
			<input type="text" name="descr" value="<?php echo $r['Descr'];?>">
			<br>
			<br>
	<input type="submit" name="submit" value="Edit Item">
</form>
	
<form class="center" method="post" action="Inventory.php">
<input type="submit" name="submit" value="Back">
</form>	

	
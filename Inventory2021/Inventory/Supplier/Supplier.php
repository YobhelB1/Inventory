<?php
	include("dbconnect.php");

	echo "<link rel='stylesheet' type='text/css' href='../css/style.css'>";

	if(isset($_POST['val']))
	{
		$val = $_POST['val'];
		$field = $_POST['field'];
		
		$sql = "select * from tblSupplier where $field like '%$val%' order by Agent_LName";
	}
	else
		$sql = "select * from tblSupplier order by Agent_LName";
	
	$q = mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
	//this will run the sql statement.
?>
<div class="header">

<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="../Inventory.php">Manage Inventory</a>
	<a href="../Customer/Customer.php">Manage Customer</a>
	<a href="Supplier.php">Manage Supplier</a>
  </div>
</div>

<h1> Suppliers </h1>

<br>

<!--Search Bar-->
<form method="post" action="Customer.php">
	Search :
		<select name="field" class="selectstyle">
			<option value="Supplier">Supplier</option>
			<option value="Agent_LName">Agent Last Name</option>
			<option value="Agent_FName">Agent First name</option>
			<option value="City">City</option>
			<option value="Address">Address</option>
		</select>
		<br>
		<input type="text" name="val">
		<input type="submit" name="search" value="search">
</form>
</div>

<table class="table" border=1>
		<tr>
			<td> <?php echo "Supplier"; ?> </td>
			<td> <?php echo "Agent Last Name"; ?> </td>
			<td> <?php echo "Agent First Name"; ?> </td>
			<td> <?php echo "City"; ?> </td>
			<td> <?php echo "Address"; ?> </td>
			
		</tr>
<form method="post" action="addsupplier.php">
	<input type="submit" name="submit" value="Add Supplier" class="submit">
</form>
<br><br>


<?php
	
	while($r=mysqli_fetch_assoc($q))
	{
	?>
		
		<tr>
			<td> <?php echo $r['Supplier'];?> </td>
			<td> <?php echo $r['Agent_LName'];?> </td>
			<td> <?php echo $r['Agent_FName'];?> </td>
			<td> <?php echo $r['City'];?> </td>
			<td> <?php echo $r['Address'];?> </td>
			<td>
				<a href="editsupplier.php?rec_id=<?php echo $r['rec_id'];?>">
				<!--Variable rec_id will pass to editcontact.php-->
					<img src="images/editicon.png" width="25px" height="25px">
					</a>
					
				<a href="deletesupplier.php?rec_id=<?php echo $r['rec_id'];?>">
					<img src="images/deleteicon.png" width="25px" height="25px">
					</a>
			</td>
		</tr>
<?php
	}
?>
</table>


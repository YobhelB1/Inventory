<?php
	include("dbconnect.php");

	echo "<link rel='stylesheet' type='text/css' href='../css/style.css'>";

	if(isset($_POST['val']))
	{
		$val = $_POST['val'];
		$field = $_POST['field'];
		
		$sql = "select * from tblCustomer where $field like '%$val%' order by LName";
	}
	else
		$sql = "select * from tblCustomer order by LName";
	
	$q = mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
	//this will run the sql statement.
?>
<div class="header">

<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
	<a href="../Inventory.php">Manage Inventory</a>
    <a href="Customer.php">Manage Customer</a>
	<a href="../Supplier/Supplier.php">Manage Suppliers</a>
  </div>
 </div>
 
<h1> Customer List</h1>

<br>

<!--Search Bar-->
<form method="post" action="Customer.php">
	Search :
		<select name="field" class="selectstyle">
			<option value="LName">Last Name</option>
			<option value="FName">First name</option>
			<option value="City">City</option>
		</select>
		<br>
		<input type="text" name="val">
		<input type="submit" name="search" value="search">
</form>
</div>

<table class="table" border=1>
		<tr>
			<td> <?php echo "Last Name"; ?> </td>
			<td> <?php echo "First Name"; ?> </td>
			<td> <?php echo "City"; ?> </td>
			
		</tr>
		
<form method="post" action="addcustomer.php">
	<input type="submit" name="submit" value="Add Customer" class="submit"> 
</form>
<br><br>

<?php
	
	while($r=mysqli_fetch_assoc($q))
	{
	?>
		
		<tr>
			<td> <?php echo $r['LName'];?> </td>
			<td> <?php echo $r['FName'];?> </td>
			<td> <?php echo $r['City'];?> </td>
			<td>
				<a href="editcustomer.php?rec_id=<?php echo $r['rec_id'];?>">
				<!--Variable rec_id will pass to editcontact.php-->
					<img src="images/editicon.png" width="25px" height="25px">
					</a>
					
				<a href="deletecustomer.php?rec_id=<?php echo $r['rec_id'];?>">
					<img src="images/deleteicon.png" width="25px" height="25px">
					</a>
			</td>
		</tr>
<?php
	}
?>
</table>


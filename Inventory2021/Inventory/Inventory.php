


<?php
	include("dbconnect.php");



	//include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";

	if(isset($_POST['val']))
	{
		$val = $_POST['val'];
		$field = $_POST['field'];
		
		$sql = "select * from tblProduct where $field like '%$val%' order by Product";
	}
	else
		$sql = "select * from tblProduct order by Product";
	
	$q = mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
	//this will run the sql statement.
?>

<div class="header">
						<!--Menu-->
<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
	<a href="Inventory.php">Manage Inventory</a>
    <a href="Customer/Customer.php">Manage Customer</a>
	<a href="Supplier/Supplier.php">Manage Suppliers</a>
  </div>
 </div>
  
<h1> Inventory </h1>

<br>
						<!--Search Bar-->
<form method="post" action="Inventory.php">

	Search :  
		<select  name="field" class="selectstyle">
			<option value="Product">Product</option>
			<option value="Category">Category</option>
			<option value="Cost">Cost</option>
			<option value="Descr">Description</option>
		</select>
		<br>
		<input type="text" name="val">	

		<input type="submit" name="search" value="search">

		
		
		
</form>
</div>

<table class="table" border=1>
		<tr>
			<td> <?php echo "Product"; ?> </td>
			<td> <?php echo "Category"; ?> </td>
			<td> <?php echo "Cost"; ?> </td>
			<td> <?php echo "Description"; ?> </td>
			<td> <?php echo "Stock"; ?> </td>
		</tr>
		
		
		<br><br>
<form method="post" action="AddInventory.php">
	<input type="submit" name="submit" value="Add Item" class="submit">
</form>

<br><br>
<?php
	
	while($r=mysqli_fetch_assoc($q))
	{
	?>
		
		<tr>
			<td> <?php echo $r['Product'];?> </td>
			<td> <?php echo $r['Category'];?> </td>
			<td> <?php echo $r['Cost'];?> </td>
			<td> <?php echo $r['Descr'];?>
			<td> <?php echo $r['Stock'];?>
				<td>
			
				<a href="EditItem.php?rec_id=<?php echo $r['rec_id'];?>">
				<!--Variable rec_id will pass to editcontact.php-->
					<img src="images/editicon.png" width="25px" height="25px">
					</a>
					
				<a href="DeleteItem.php?rec_id=<?php echo $r['rec_id'];?>">
					<img src="images/deleteicon.png" width="25px" height="25px">
					</a>
				</td>
			</td>
		</tr>
		
<?php
	}
	
?>
</table>



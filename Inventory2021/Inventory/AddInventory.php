
<div class="header">
<h1> Add Item </h1>
</div>

<?php
 echo "<link rel='stylesheet' type='text/css' href='css/style.css' />";
 ?>


<form class="table2" method="post" action="AddInventory_Confirm.php">
	
		Product: <br> <input type="text" name="prod"> <br>
		Category: <br> <input type="text" name="cat"> <br>
		Cost: <br> <input type="text" name="cost"> <br>
		Description: <br> <input type="text" name="descr"> <br>
			
			
		<input type="submit" name="submit" value="Add to List">
</form>

<form class="center" method="post" action="Inventory.php">
<input type="submit" name="submit" value="Back">
</form>		
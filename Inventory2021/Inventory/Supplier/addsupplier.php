<div class="header">
<h1> Add Supplier </h1>
</div>

<?php
 echo "<link rel='stylesheet' type='text/css' href='../css/style.css' />";
 ?>


<form class="table2" method="post" action="addsupplier_confirm.php">
		Supplier: <br> <input type="text" name="supplier">	<br>
		Agent Last name: <br><input type="text" name="a_lname"> <br>
		Agent First name:<br> <input type="text" name="a_fname"> <br>
		City: <br><input type="text" name="city"> <br>
		Address: <br><input type="text" name="address"> <br>
			<br>
			
		<input type="submit" name="submit" value="Add to Suppliers">
</form>
		
<form method="post" action="Supplier.php">
<input type="submit" name="submit" value="Back">
</form>	
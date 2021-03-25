<div class="header">
<h1> Add Customer </h1>
</div>

<?php
 echo "<link rel='stylesheet' type='text/css' href='../css/style.css' />";
 ?>


<form class="table2" method="post" action="addcustomer_confirm.php">
	
		Lastname: <br><input type="text" name="lname"> <br>
		Firstname:<br> <input type="text" name="fname"> <br>
		City: <br><input type="text" name="city"> <br>

			<br>
			
		<input type="submit" name="submit" value="Add to Customer List">
</form>
		
<form method="post" action="Customer.php">
<input type="submit" name="submit" value="Back">
</form>	
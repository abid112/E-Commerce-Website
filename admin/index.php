<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<style>

			
		</style>
	</head>
	
	<body>
		<h1 align="center">DorDam</h1>
		<h2 align="center">Welcome , ADMIN</h2> 

		<hr>
		
		<form action="../ChangePass.php">
			<input type="submit" name="ChangePass" id ="ChaPassBu" value="Change Password"/>
		</form>
		</br>
		<form action="../logOut.php">
			<input type="submit" name="logout" value="Log out"/>
		</form>
		
		</br>
		<label>Item : </label></br>
		<div class="optionItem">
			<ul>
				<li><a href="addItem.php">Add Item<a></li>
				<li><a href="deleteItem.php">Delete Item</a></li>
				<li><a href="updateItem.php">Update Item</a></li>
				<li><a href="income.php">Income</a></li>
			</ul>
		</div>
		</br>
		<label>User : </label></br>
		<div class="optionUser">
			<ul>
				<li><a href="deleteUser.php">Delete User</a></li>
			</ul>
		</div>
		
	</body>
</html>
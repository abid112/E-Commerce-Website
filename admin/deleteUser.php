<?php
	include("../data/db_connector.php");
	if(isset($_POST['delete'])){
		$uId= $_POST['userID'];
		
		$sql1 = "DELETE FROM user WHERE UserID= '$uId'";
		if (mysqli_query($conn, $sql1)) {
			echo "User deleted successfully";
		} else {
			echo "Error deleting record: " . mysqli_error($conn);
		}	
		$sql2 = "DELETE FROM log_in WHERE User_ID= '$uId'";
		if (mysqli_query($conn, $sql2)) {
			echo "User deleted successfully";
		} else {
			echo "Error deleting record: " . mysqli_error($conn);
		}	
	}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	
	<body>
		<h1 align="center">DorDam</h1>
		<hr>
		<h3>Delete User:</h3><br><br>
		<form action="" method="post">		
		<br>
		<table>
		<tr>
			<td><label>User name :</label></td>
			<td><input type="text" name="userID"></br></td>
		</tr>	
		
		</table>	
		<input type="submit" name ="delete" value="Delete User"/><br><br>
	</form>
	<form action="index.php" method="get">
		<input type="submit" name ="adminHome" value="Go to Home Page"/>
	</form>
	</body>
</html>


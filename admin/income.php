<?php
	include("../data/db_connector.php");
	
	$sql = "SELECT * FROM admin_income where userName ='admin'";
	$result = mysqli_query($conn, $sql);		
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
				
	$inco=$row["Income"];
	
	echo '
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
				<form action="index.php" method="get">
				<input type="submit" name ="adminHome" value="Go to Home Page"/>
				</form>
				<br>
				<strong>Your Total Income is : '.$inco.'
			</body>
		</html>';
?>

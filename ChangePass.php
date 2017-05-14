<?php
	echo "hello";
	include("data/db_connector.php");
	session_start();
	//echo  $_SESSION['username'];
	if(isset($_SESSION['username'])){
		
		$id= $_SESSION['username'];
		
		$sql = "SELECT * FROM user where UserID ='$id'";
		$result = mysqli_query($conn, $sql);
		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
		$Opass = $row["Pass"];

		//echo $Opass;
		echo '
			<html>
				<head>
					<style>
						table, th, td {
							border: 0px solid black;
							border-collapse: collapse;
						}
						th, td {
							padding: 20px;
						}
					</style>
				</head>
				<body><br>
					<h1 align="center">DorDam</h1>
					<h3 align="center">User Profile</h3>

					<hr>
					<br><br>
					<form action="" method="post">
					<table align="center">
						<tr>
							<td><strong>Your User Name :</strong></td>
							<td><label>'.$id.'</label></td>
						</tr>
						<tr>
							<td><strong>Enter Your Old Password </strong></td>
							<td><input type="password" name="oldPass"/></td>
						</tr>
						<tr>
							<td><strong>Enter Your New Password </strong></td>
							<td><input type="password" name="newPass"/></td>
						</tr>
						<tr>
							<td>
							</td>
							<td><input type="submit" name="go" value="Change Password"/></td>
						</tr>						
					</table>
					</form>
					<table align="center">
						<tr>
							<td><form action="home.php" method="post">
								<input type="submit" name="home" value ="Go Home Page" />
							</form></td>
						</tr>
					</table>
				</body>
			</html>';
			
	}
	else{
		echo '<HTML>
				<head>
				</head>
				
				<body>
				<br>
					<h1 align="center">DorDam</h1>
										<hr><br><br>
					<h3 align="center">Log In first</h3>
					
					<table align="center">
						<tr>
							<td><form action="LogIn.php" method="post">
								<input type="submit" name="logIN" value ="Log In " />
							</form></td>

							<td><form action="home.php" method="post">
								<input type="submit" name="home" value ="Go Home Page" />
							</form></td>
						</tr>
					</table>
				</body>
			</HTML>';
	}
?>
<?php

	if(isset($_POST['go'])){
		//echo 'pressed';
		$oldPass=$_POST['oldPass'];
		$newPass=$_POST['newPass'];
		
		if($Opass==$oldPass){
			//echo "you r allowed to change ur password";
			$sql = "UPDATE user SET Pass='$newPass' WHERE UserID ='$id'";
				if (mysqli_query($conn, $sql)) {
					//echo "Record updated successfully";
					$sql = "UPDATE log_in SET PassWord='$newPass' WHERE User_ID='$id'";
					if (mysqli_query($conn, $sql)) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . mysqli_error($conn);
					}	
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}	
		}
		else{
			echo  "Password is not matched";
			//echo $error;
		}
	}
	
?>
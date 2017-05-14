<?php
	include("data/db_connector.php");
	session_start();
	//echo  $_SESSION['username'];
	if(isset($_SESSION['username'])){
		$id=$_SESSION['username'];
		$sql = "SELECT * FROM user where UserID ='$id'";
		$result = mysqli_query($conn, $sql);
		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
		$na=$row["name"];
		$mail=$row["Email"];
		$gen=$row["gender"];
		$mob=$row["Mobile"];
	
		echo '<html>
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
				
				<body>
					<h1 align="center">DorDam</h1>
					<h3 align="center">User Profile</h3>

					<hr>
					
					<table align="center">
						<tr>
							<td><strong>Your Name :</strong></td>
							<td><label>'.$na.'</label></td>
							
						</tr>
						<tr>
							<td><strong>Your User Name :</strong></td>
							<td><label>'.$id. '</label></td>
						</tr>
						<tr>
							<td><strong>Your E-mail :</strong></td>
							<td><label>'.$mail.'</label></td>
						</tr>
						<tr>
							<td><strong>Your Gender :</strong></td>
							<td><label>'.$gen.'</label></td>
						</tr>
						<tr>
							<td><strong>Your Mobile no. :</strong></td>
							<td><label>'.$mob.'</label></td>
						</tr>
						<tr>
							<td><form action="ChangePass.php" method="post">
								<input type="submit" name="changePass" value ="Change your Password" />
							</form></td>

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


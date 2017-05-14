<?php
	session_start();

	
	if(isset($_SESSION['username'])){
		//echo "Log out :) ";
		 session_destroy();
			echo '<HTML>
				<head>
				</head>
				
				<body>
				<br>
					<h1 align="center">DorDam</h1>
										<hr><br><br>
					<h3 align="center">You have been logged out</h3>
					
					<table align="center">
						<tr>
							<!--<td><form action="LogIn.php" method="post">
								<input type="submit" name="logIN" value ="Log In Again ?" />
							</form></td>-->

							<td><form action="home.php" method="post">
								<input type="submit" name="home" value ="Go Home Page" />
							</form></td>
						</tr>
					</table>
				</body>
			</HTML>';
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
								<input type="submit" name="logIN2" value ="Log In " />
							</form></td>

							<td><form action="home.php" method="post">
								<input type="submit" name="home2" value ="Go Home Page" />
							</form></td>
						</tr>
					</table>
				</body>
			</HTML>';
	}
?>


<?php
	session_start();
	
		$productID = $_SESSION['productID'];
		$catagory = $_SESSION['catagory'];
		$price = $_SESSION['price'];
		//$cart = $_SESSION['cart'];
		
		/*if(!isset($_SESSION['cart'])){
			
		}*/
		
		$_SESSION['cart'][$_SESSION['serial']] = $productID;
		$_SESSION['serial']=$_SESSION['serial']+1;
		
		/*echo sizeof($_SESSION['cart']);
		
		for($i=0;$i<$_SESSION['serial'];$i++){
			echo $_SESSION['cart'][$i].'<br>';
		}*/

		
		/*unset($_SESSION["productID"]);
		unset($_SESSION["catagory"]);*/
		//echo $productID;
			echo '<HTML>
				<head>
				</head>
				
				<body>
				<br>
					<h1 align="center">DorDam</h1>
										<hr><br><br>
					<h4 align="center">Cart</h4>
					<br><hr>
					
					<table align="center">
						<tr>
							<td><strong>Item '.$productID.'has been added to the cart.<br>
							It\'s price is '.$price.' <br>
							Click "Add to Cart" to complete the buy</strong><br></td>
						</tr>
						<tr>	
							<td><form action="confirmCart.php" method="post">
								<input type="submit" name="Proc" value ="Confirmation" />
							</form><br></td>
						</tr>
						<tr>
							<td><form action="home.php" method="post">
								<input type="submit" name="home" value ="Go Home Page" />
							</form></td></tr>
						
					</table>
				</body>
			</HTML>';
	
				
?>

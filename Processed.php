<?php
	include("data/db_connector.php");
	session_start();
		
	if(isset($_SESSION['username'])){
		//$productID = $_SESSION["productID"];
		$n =sizeof($_SESSION['cart']);
		$money =  $_SESSION['totalprice'];
		

		for($i=0;$i<$n;$i++){
			$productID = $_SESSION['cart'][$i];
			
			if($productID[0]==1){
				$sql = "SELECT * FROM men where P_M_Code ='$productID'";
				$result = mysqli_query($conn, $sql);		
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
				
				$pri=$row["P_M_Price"];
				$qua=$row["P_M_Quantity"];
				$Newqua =$qua - 1; 
				
				$sql = "UPDATE men SET P_M_Quantity='$Newqua' WHERE P_M_Code='$productID'";
				if (mysqli_query($conn, $sql)) {
					//echo "Record updated successfully";
					$sql = "SELECT * FROM admin_income where userName ='admin'";
					$result = mysqli_query($conn, $sql);		
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
					
					$inco=$row["Income"];
					
					$newInco = $inco+ $pri;
					//echo $inco ;
					//echo $newInco;
					
					$sql2 = "UPDATE admin_income SET Income='$newInco' WHERE userName='admin'";
					if (mysqli_query($conn, $sql2)) {
						echo " successfully";
					} else {
						echo "Error : " . mysqli_error($conn);
					}		
			} 
			else {
				echo "Error2 : " . mysqli_error($conn);
			}
		}
		else if($productID[0]==2){
			
					
				$sql = "SELECT * FROM women where P_W_Code ='$productID'";
				$result = mysqli_query($conn, $sql);		
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
				
				$pri=$row["P_W_Price"];
				$qua=$row["P_W_Quantity"];
				$Newqua =$qua - 1; 
				
				$sql = "UPDATE women SET P_W_Quantity='$Newqua' WHERE P_W_Code='$productID'";
				if (mysqli_query($conn, $sql)) {
					//echo "Record updated successfully";
					$sql = "SELECT * FROM admin_income where userName ='admin'";
					$result = mysqli_query($conn, $sql);		
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
					
					$inco=$row["Income"];
					
					$newInco = $inco+ $pri;
					//echo $inco ;
					//echo $newInco;
					
					$sql2 = "UPDATE admin_income SET Income='$newInco' WHERE userName='admin'";
					if (mysqli_query($conn, $sql2)) {
						echo " successfully";
					} else {
						echo "Error : " . mysqli_error($conn);
					}		
				} 
				else {
					echo "Error2 : " . mysqli_error($conn);
				}		
				
		}
		else if($productID[0]==3){
			$sql = "SELECT * FROM kids where P_K_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$pri=$row["P_K_Price"];
			$qua=$row["P_K_Quantity"];
			$Newqua =$qua - 1; 
			
			
			$sql = "UPDATE kids SET P_K_Quantity='$Newqua' WHERE P_K_Code='$productID'";
			
			if (mysqli_query($conn, $sql)) {
				//echo "Record updated successfully";
				$sql = "SELECT * FROM admin_income where userName ='admin'";
				$result = mysqli_query($conn, $sql);		
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
				
				$inco=$row["Income"];
				
				$newInco = $inco+ $pri;
				//echo $inco ;
				//echo $newInco;
				
				$sql2 = "UPDATE admin_income SET Income='$newInco' WHERE userName='admin'";
				if (mysqli_query($conn, $sql2)) {
					echo " successfully";
				} else {
					echo "Error : " . mysqli_error($conn);
				}		
			} 
			else {
				echo "Error2 : " . mysqli_error($conn);
			}		
		}
		else if($productID[0]==4){
			$sql = "SELECT * FROM computer where P_C_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$pri=$row["P_C_Price"];
			$qua=$row["P_C_Quantity"];
			$Newqua =$qua - 1; 
			
			
			$sql = "UPDATE computer SET P_C_Quantity='$Newqua' WHERE P_C_Code='$productID'";
			
			if (mysqli_query($conn, $sql)) {
				//echo "Record updated successfully";
				$sql = "SELECT * FROM admin_income where userName ='admin'";
				$result = mysqli_query($conn, $sql);		
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
				
				$inco=$row["Income"];
				
				$newInco = $inco+ $pri;
				//echo $inco ;
				//echo $newInco;
				
				$sql2 = "UPDATE admin_income SET Income='$newInco' WHERE userName='admin'";
				if (mysqli_query($conn, $sql2)) {
					echo " successfully";
				} else {
					echo "Error : " . mysqli_error($conn);
				}		
			} 
			else {
				echo "Error2 : " . mysqli_error($conn);
			}
		}
		else if($productID[0]==5){
			$sql = "SELECT * FROM computer_accessory where P_CA_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$pri=$row["P_CA_Price"];
			$qua=$row["P_CA_Quantity"];
			$Newqua =$qua - 1; 
			
			
			$sql = "UPDATE computer_accessory SET P_CA_Quantity='$Newqua' WHERE P_CA_Code='$productID'";
			
			if (mysqli_query($conn, $sql)) {
				//echo "Record updated successfully";
				$sql = "SELECT * FROM admin_income where userName ='admin'";
				$result = mysqli_query($conn, $sql);		
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
				
				$inco=$row["Income"];
				
				$newInco = $inco+ $pri;
				//echo $inco ;
				//echo $newInco;
				
				$sql2 = "UPDATE admin_income SET Income='$newInco' WHERE userName='admin'";
				if (mysqli_query($conn, $sql2)) {
					echo " successfully";
				} else {
					echo "Error : " . mysqli_error($conn);
				}		
			} 
			else {
				echo "Error2 : " . mysqli_error($conn);
			}		
		}
	    else if($productID[0]==6){
			$sql = "SELECT * FROM mobile where P_Mo_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$pri=$row["P_Mo_Price"];
			$qua=$row["P_Mo_Quantity"];
			$Newqua =$qua - 1; 
			
			$sql = "UPDATE mobile SET P_Mo_Quantity='$Newqua' WHERE P_Mo_Code='$productID'";
			if (mysqli_query($conn, $sql)) {
				//echo "Record updated successfully";
				$sql = "SELECT * FROM admin_income where userName ='admin'";
				$result = mysqli_query($conn, $sql);		
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
				
				$inco=$row["Income"];
				
				$newInco = $inco+ $pri;
				//echo $inco ;
				//echo $newInco;
				
				$sql2 = "UPDATE admin_income SET Income='$newInco' WHERE userName='admin'";
				if (mysqli_query($conn, $sql2)) {
					echo " successfully";
				} else {
					echo "Error : " . mysqli_error($conn);
				}		
			} 
			else {
				echo "Error2 : " . mysqli_error($conn);
			}		
		}
		else if($productID[0]==7){
			$sql = "SELECT * FROM electronics where P_E_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$pri=$row["P_E_Price"];
			$qua=$row["P_E_Quantity"];
			$Newqua =$qua - 1; 
			
			$sql = "UPDATE electronics SET P_E_Quantity='$Newqua' WHERE P_E_Code='$productID'";
			if (mysqli_query($conn, $sql)) {
				//echo "Record updated successfully";
				$sql = "SELECT * FROM admin_income where userName ='admin'";
				$result = mysqli_query($conn, $sql);		
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
				
				$inco=$row["Income"];
				
				$newInco = $inco+ $pri;
				//echo $inco ;
				//echo $newInco;
				
				$sql2 = "UPDATE admin_income SET Income='$newInco' WHERE userName='admin'";
				if (mysqli_query($conn, $sql2)) {
					echo " successfully";
				} else {
					echo "Error : " . mysqli_error($conn);
				}		
			} 
			else {
				echo "Error2 : " . mysqli_error($conn);
			}		
		}
		else if($productID[0]==8){
			$sql = "SELECT * FROM others where P_O_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$pri=$row["P_O_Price"];
			$qua=$row["P_O_Quantity"];
			$Newqua =$qua - 1; 
			
			$sql = "UPDATE others SET P_O_Quantity='$Newqua' WHERE P_O_Code='$productID'";
			if (mysqli_query($conn, $sql)) {
				//echo "Record updated successfully";
				$sql = "SELECT * FROM admin_income where userName ='admin'";
				$result = mysqli_query($conn, $sql);		
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
				
				$inco=$row["Income"];
				
				$newInco = $inco+ $pri;
				//echo $inco ;
				//echo $newInco;
				
				$sql2 = "UPDATE admin_income SET Income='$newInco' WHERE userName='admin'";
				if (mysqli_query($conn, $sql2)) {
					echo " successfully";
				} else {
					echo "Error : " . mysqli_error($conn);
				}		
			} 
			else {
				echo "Error2 : " . mysqli_error($conn);
			}		
		}

	}

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
							<td><strong>Products will be delivered Soon.<br>							
							            We will contact with you via your mobile number and Email.<br>	
										Happy shopping :)</strong><br></td>
						</tr>

						<tr>
							<td><br><form action="home.php" method="post">
								<input type="submit" name="home" value ="Go Home Page" />
							</form></td></tr>						
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
					<h3 align="center">Confirmation</h3>
					
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
	
	unset($_SESSION["productID"]);
	unset($_SESSION["catagory"]);
	unset($_SESSION['cart']);
	unset($_SESSION['serial']);
	
	unset($_SESSION['menQ']);
	unset($_SESSION['womenQ']);
	unset($_SESSION['kidsQ']);
	unset($_SESSION['computerQ']);
	unset($_SESSION['comAccQ']);
	unset($_SESSION['mobileQ']);
	unset($_SESSION['electroQ']);
	unset($_SESSION['othersQ']);
?>

<?php
	include("data/db_connector.php");
	session_start();
	$productID = $_SESSION['productID'];
	$catagory = $_SESSION['catagory'];
		
	$cat="";
	$bra="";
	$pri="";
	$qua="";
	$pic="";
	//echo "ok";
	if($catagory==1){
		if(isset($productID)){
			
		$sql = "SELECT * FROM men where P_M_Code ='$productID'";
		$result = mysqli_query($conn, $sql);		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
		
		$cat=$row["P_M_Catagory"];
		$bra=$row["P_M_Brand"];
		$pri=$row["P_M_Price"];
		$qua=$row["P_M_Quantity"];
		$pic=$row["Product_M_Pic"];
		//echo $pic;
		
		$_SESSION['price']=$pri;
		}
	}
	else if($catagory==2){
		//echo "ok";
		if(isset($productID)){
			
		$sql2 = "SELECT * FROM women where P_W_Code ='$productID'";
		$result2 = mysqli_query($conn, $sql2);		
		
		$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC) or die(mysqli_error($conn));
		
		$cat=$row2["P_W_Catagory"];
		$bra=$row2["P_W_Brand"];
		$pri=$row2["P_W_Price"];
		$qua=$row2["P_W_Quantity"];
		$pic=$row2["Product_W_Pic"];
		
		$_SESSION['price']=$pri;
		}
	}
	else if($catagory==3){
		if(isset($productID)){
			
		$sql2 = "SELECT * FROM kids where P_K_Code ='$productID'";
		$result2 = mysqli_query($conn, $sql2);		
		
		$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC) or die(mysqli_error($conn));
		
		$cat=$row2["P_K_Catagory"];
		$bra=$row2["P_K_Brand"];
		$pri=$row2["P_K_Price"];
		$qua=$row2["P_K_Quantity"];
		$pic=$row2["Product_K_Pic"];
		
		$_SESSION['price']=$pri;
		}
	}
	else if($catagory==4){
		if(isset($productID)){
			
		$sql2 = "SELECT * FROM computer where P_C_Code ='$productID'";
		$result2 = mysqli_query($conn, $sql2);		
		
		$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC) or die(mysqli_error($conn));
		
		$cat=$row2["P_C_Catagory"];
		$bra=$row2["P_C_Brand"];
		$pri=$row2["P_C_Price"];
		$qua=$row2["P_C_Quantity"];
		$pic=$row2["Product_C_Pic"];
		
		$_SESSION['price']=$pri;
		}
	}
	else if($catagory==5){
		if(isset($productID)){
			
		$sql2 = "SELECT * FROM computer_accessory where P_CA_Code ='$productID'";
		$result2 = mysqli_query($conn, $sql2);		
		
		$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC) or die(mysqli_error($conn));
		
		$cat=$row2["P_CA_Catagory"];
		$bra=$row2["P_CA_Brand"];
		$pri=$row2["P_CA_Price"];
		$qua=$row2["P_CA_Quantity"];
		$pic=$row2["Product_CA_Pic"];
		
		$_SESSION['price']=$pri;
		}
	}
	else if($catagory==6){
		if(isset($productID)){
			
		$sql2 = "SELECT * FROM mobile where P_Mo_Code ='$productID'";
		$result2 = mysqli_query($conn, $sql2);		
		
		$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC) or die(mysqli_error($conn));
		
		$cat=$row2["P_Mo_Catagory"];
		$bra=$row2["P_Mo_Brand"];
		$pri=$row2["P_Mo_Price"];
		$qua=$row2["P_Mo_Quantity"];
		$pic=$row2["Product_Mo_Pic"];
		
		$_SESSION['price']=$pri;
		}
	}
	else if($catagory==7){
		if(isset($productID)){
			
		$sql2 = "SELECT * FROM electronics where P_E_Code ='$productID'";
		$result2 = mysqli_query($conn, $sql2);		
		
		$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC) or die(mysqli_error($conn));
		
		$cat=$row2["P_E_Catagory"];
		$bra=$row2["P_E_Brand"];
		$pri=$row2["P_E_Price"];
		$qua=$row2["P_E_Quantity"];
		$pic=$row2["Product_E_Pic"];
		
		$_SESSION['price']=$pri;
		}
	}
	else if($catagory==8){
		if(isset($productID)){
			
		$sql2 = "SELECT * FROM others where P_O_Code ='$productID'";
		$result2 = mysqli_query($conn, $sql2);		
		
		$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC) or die(mysqli_error($conn));
		
		$cat=$row2["P_O_Catagory"];
		$bra=$row2["P_O_Brand"];
		$pri=$row2["P_O_Price"];
		$qua=$row2["P_O_Quantity"];
		$pic=$row2["Product_O_Pic"];
		
		$_SESSION['price']=$pri;
		}
	}
	
	echo'<html>
			<head>
			<style>
			*{
					padding: 0;
					margin: 0;
			 }
			.menu {
					position: absolute;
					top:125px;
					list-style-type: none;
					margin: 0;
					padding: 0;
					width: 200px;
					background-color: #f1f1f1;
					border: 3px solid #73AD21;
			}

			.menu li {
					display: block;
					color: #940808;
					padding: 15px 25px;
					background-color: lightblue;
				
			}
			.menu li  ul{
					display: block;
					position: absolute;
					top: 0;
					left: 100px;
				}
			.menu li ul{
					display: block;
					position: absolute;
					top: 50px;
					left: 200px;
					width: 150px;
					border: 3px solid #73AD21;
				}
			.menu li :hover {
					background-color: #555;
					color: white;
				}

			.menu li:hover ul{
					display: block;
					background-color: #555;
					color: white;
				}
			#searchText{		
				position: absolute;
				top: 40px;
				right: 625px;
				width: 300px;
				height: 25px;
			}

			#searchButton{
				position: absolute;
				top: 42px;
				right: 550px;
				width: 50px;
				height: 25px;
			}

			#LogInBu{
				position: absolute;
				top: 32px;
				right: 300px;
				width: 100px;
				height: 25px;
			}
			#LogOutBu{
				position: absolute;
				top: 32px;
				right: 175px;
				width: 100px;
				height: 25px;
			}
			#SignUpBu{
				position: absolute;
				top: 32px;
				right: 50px;
				width: 100px;
				height: 25px;
			}
			#ProfileBu{
				position: absolute;
				top: 75px;
				right: 150px;
				width: 150px;
				height: 25px;
			}
			.product{
					position: absolute;
					top: 200px;
					right: 300px;

			}
			.productPic{
					position: absolute;
					top: 200px;
					right: 600px;
			}

			table, th, td {
					border: 0px solid black;
					border-collapse: collapse;
			}
					th, td {
					padding: 10px;
			}

			</style>
			</head>
			<body>

			<h1>DorDam</h1>

			<input type="text" id ="searchText"/>
			<input type="button" id ="searchButton" value="search"/>

			<form action="LogIn.php">
				<input type="submit" id ="LogInBu" value="Log In"/>
			</form>

			<form action="logOut.php">
				<input type="submit" id ="LogOutBu" value="Log Out" />
			</form>

			<form action="SignUp.php">
				<input type="submit"  id ="SignUpBu" value="Sign Up"/>
			</form>

			<form action="Profile.php">
				<input type="submit" id ="ProfileBu" value="My Profile"/>
			</form>

			</br>

			</br>
			</br>
			</br>


			<hr>

			<ul class="menu">
			  <li><a href="Home.php" style="background-color:red">Home</a></li>
			  <li><a href="Men.php">Men</a></li>
			  <li><a href="Women.php">Women</a></li>
			  <li><a href="Kids.php">Kids</a></li>
			  <li><a href="Pc&Lap.php">Computer</a></li>
			  <li><a href="Pc&Lap_Acc.php">Computer Accessory</a></li>
			  <li><a href="Mobile.php">Mobile & its Accessory</a></li>
			  <li><a href="Electro.php">Electronics</a></li>
			  <li><a href="Others.php">Others</a></li>
			  
			</ul>
			
			<table class="product" border="1" style="width:30%" align ="Center">
						<tr>
							<td><strong>Product ID :</strong></td>
							<td><label>'.$productID.'</label></td>
							
						</tr>
						<tr>
							<td><strong>Product Catagory :</strong></td>
							<td><label>'.$cat. '</label></td>
						</tr>
						<tr>
							<td><strong>Product Brand :</strong></td>
							<td><label>'.$bra.'</label></td>
						</tr>
						<tr>
							<td><strong>Product Price :</strong></td>
							<td><label>'.$pri.'</label></td>
						</tr>
						<tr>
							<td><strong>Product Quantity :</strong></td>
							<td><label>'.$qua.'</label></td>
						</tr>
						<tr>
							<td><form action="home.php" method="post">
								<input type="submit" name="home" value ="Go Home Page" />
							</form></td>
							
							<td><form action="cart.php" method="post">
								<input type="submit" name="cart" value ="Add to CART" />
							</form></td>							
						</tr>
					</table>
					<table class="productPic" border="1" style="width:30%" ">
						<td><img src="'.$pic.'" alt="" style="width:200px; height:auto;"></td>
					</table>
			</body>
			</html>';
?>
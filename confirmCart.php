<?php
	include("data/db_connector.php");
	
	session_start();
	//$catagory = $_SESSION['catagory'];
	$n =sizeof($_SESSION['cart']);
	$totalprice =0 ;
	
	echo '<HTML>
				<head>
				</head>
				
				<body>
				<br>
					<h1 align="center">DorDam</h1>
										<hr><br>
					<h3 align="center">Cart</h3>
					<hr>
			<table align="center">
				<tr><th>Product ID &nbsp &nbsp &nbsp &nbsp &nbsp </th>
					<th>Product Catagory &nbsp &nbsp &nbsp &nbsp &nbsp</th>
					<th>Product Brand &nbsp &nbsp &nbsp &nbsp &nbsp</th>
					<th>Product Price &nbsp &nbsp &nbsp &nbsp &nbsp</th></tr>';

	for($i=0;$i<$n;$i++){
		$productID = $_SESSION['cart'][$i];
		
		//echo $productID[0];

		if($productID[0]==1){
			$sql = "SELECT * FROM men where P_M_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$cat=$row["P_M_Catagory"];
			$bran=$row["P_M_Brand"];
			$pri=$row["P_M_Price"];
			
			$_SESSION['menQ'][]=$productID;
			
		}
		else if($productID[0]==2){
			$sql = "SELECT * FROM women where P_W_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$cat=$row["P_W_Catagory"];
			$bran=$row["P_W_Brand"];
			$pri=$row["P_W_Price"];
			
			$_SESSION['womenQ'][]=$productID;
		}	
		
		else if($productID[0]==3){
			$sql = "SELECT * FROM kids where P_K_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$cat=$row["P_K_Catagory"];
			$bran=$row["P_K_Brand"];
			$pri=$row["P_K_Price"];
			
			$_SESSION['kidsQ'][]=$productID;
		}	
		
		else if($productID[0]==4){
			$sql = "SELECT * FROM computer where P_C_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$cat=$row["P_C_Catagory"];
			$bran=$row["P_C_Brand"];
			$pri=$row["P_C_Price"];
			
			$_SESSION['computerQ'][]=$productID;
		}
		
		else if($productID[0]==5){
			$sql = "SELECT * FROM computer_accessory where P_CA_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$cat=$row["P_CA_Catagory"];
			$bran=$row["P_CA_Brand"];
			$pri=$row["P_CA_Price"];
			
			$_SESSION['comAccQ'][]=$productID;
		}
		
		else if($productID[0]==6){
			$sql = "SELECT * FROM mobile where P_Mo_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$cat=$row["P_Mo_Catagory"];
			$bran=$row["P_Mo_Brand"];
			$pri=$row["P_Mo_Price"];
			
			$_SESSION['mobileQ'][]=$productID;
		}
		
		else if($productID[0]==7){
			$sql = "SELECT * FROM electronics where P_E_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$cat=$row["P_E_Catagory"];
			$bran=$row["P_E_Brand"];
			$pri=$row["P_E_Price"];
			
			$_SESSION['electroQ'][]=$productID;
		}
		else if($productID[0]==8){
			$sql = "SELECT * FROM others where P_O_Code ='$productID'";
			$result = mysqli_query($conn, $sql);		
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($conn));
			
			$cat=$row["P_O_Catagory"];
			$bran=$row["P_O_Brand"];
			$pri=$row["P_O_Price"];
			
			$_SESSION['othersQ'][]=$productID;
		}
		
		$totalprice= $totalprice+ $pri;
	

		echo '<tr>	
				<td>'.$productID.'</td>					
				<td>'.$cat.'</td>
				<td>'.$bran.'</td>
				<td>'.$pri.'</td>&nbsp &nbsp &nbsp
				<!--<td><form action="" method="post"><input type="submit" name="delete'.$i.'" value="Delete Item'.$i.'"></form></td>-->
				</tr>';
	}
	
	echo '<hr>
		</table>
		<br><hr><hr>';
	echo '<h4 align ="center">Total Cost  &nbsp &nbsp:  &nbsp &nbsp &nbsp'.$totalprice.'</h4>';
	$totalprice = $_SESSION['totalprice'];
	echo '<table class="button" align ="center">
			<tr><td><form action="Home.php" method="post"><input type="submit" name="home" value="Home Page">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</form></td>
				<td><form action="Processed.php" method="post"><input type="submit" name="Pro" value="Processed"></form></td></tr>
		</table>';
	/*if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		echo 'click again';
		for($i=0;$i<$n;$i++){
			if(isset($_POST['delete'."$i"])){
				echo "ok";
				echo $i;
				if($i==$n-1){
					$_SESSION['cart'][$i]= null;
				}
				else{
				$_SESSION['cart'][$i]= null;
				$_SESSION['cart'][$i]=$_SESSION['cart'][$i+1];
				$_SESSION['cart'][$i+1]= null;
			
				}
		
			}
			
		}
		$n=$_SESSION['totalQ'];
	}*/
?>
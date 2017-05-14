<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
		<h1 align="center">DorDam</h1>
		<hr>
	<form action="" method="post">	
		<label>Catagory :</label><br>
			<input name="catagory" type="radio" value="Men"/>Men </br>
			<input name="catagory" type="radio" Value="Women"/>Women </br>
			<input name="catagory" type="radio" Value="Kids"/>Kids </br>
			<input name="catagory" type="radio" Value="Computer"/>Computer </br>
			<input name="catagory" type="radio" Value="Computer Accessory"/>Computer Accessory </br>
			<input name="catagory" type="radio" Value="Mobile"/>Mobile  </br>
			<input name="catagory" type="radio" Value="Electronics"/>Electronics </br>
			<input name="catagory" type="radio" Value="Others"/>Others </br>
			</td>		
		<br>
		<table>
		<tr>
			<td><label>Product Code :</label></td>
			<td><input type="text" name="pCode"></br></td>
		</tr>	
		<tr>
			<td><label>Product Catagory :</label></td>
			<td><input type="text" name="pCat"></br></td>
		</tr>
		<tr>
			<td><label>Product brand :</label></td>
			<td><input type="text" name="pBrand"></td>
		</tr>
		<tr>		
			<td><label>Product Price :</label></td>
			<td><input type="text" name="pPrice"></td>
		</tr>
		<tr>		
			<td><label>Product Quantity :</label></td>
			<td><input type="text" name="pQuanti"></td>
		</tr>	
		<tr>		
			<td><label>Product Picture :</label></td>
			<td><input type="text" name="pPic" value="Product Pic/"></td>
		</tr>	
		</table>	
		<input type="submit" name ="add" value="Add Item"/><br><br><br>

	</form>	
	<form action="index.php" method="get">
		<input type="submit" name ="adminHome" value="Go to Home Page"/>
	</form>
		
	</body>
</html>
<?php
include("../data/db_connector.php");
	if(isset($_POST['add'])){
		$P_Code=$_POST['pCode'];
		$P_Cata=$_POST['pCat'];
		$P_brand=$_POST['pBrand'];
		$P_price=$_POST['pPrice'];
		$P_quantity=$_POST['pQuanti'];
		$P_pic=$_POST['pPic'];
		
		if(isset($_POST['catagory'])==true){
			$catagory = $_POST['catagory'];
			if($catagory=='Men'){
				$is_Men_buton_true = 'checked';
				
				
				if (!mysqli_query($conn ,"insert into men(P_M_Code,P_M_Catagory,P_M_Brand,P_M_Price,P_M_Quantity,Product_M_Pic) values('$P_Code','$P_Cata','$P_brand','$P_price','$P_quantity','$P_pic')")){
					echo("Error.Item hasn't been added");
				}
				else {
					echo "Item has been added";
				}
				
			}
			else if($catagory=='Women'){
				$is_Women_buton_true = 'checked';
				if (!mysqli_query($conn ,"insert into women(P_W_Code,P_W_Catagory,P_W_Brand,P_W_Price,P_W_Quantity,Product_W_Pic) values('$P_Code','$P_Cata','$P_brand','$P_price','$P_quantity','$P_pic')")){
					echo("Error.Item hasn't been added");
				}
				else {
					echo "Item has been added";
				}
				
			}
			else if($catagory=='Kids'){
				$is_Kids_buton_true = 'checked';				
				if (!mysqli_query($conn ,"insert into kids(P_K_Code,P_K_Catagory,P_K_Brand,P_K_Price,P_K_Quantity,Product_K_Pic) values('$P_Code','$P_Cata','$P_brand','$P_price','$P_quantity','$P_pic')")){
					echo("Error.Item hasn't been added");
				}
				else {
					echo "Item has been added";
				}
			}
			else if($catagory=='Computer'){
				$is_Computer_buton_true = 'checked';				
				if (!mysqli_query($conn ,"insert into computer(P_C_Code,P_C_Catagory,P_C_Brand,P_C_Price,P_C_Quantity,Product_C_Pic) values('$P_Code','$P_Cata','$P_brand','$P_price','$P_quantity','$P_pic')")){
					echo("Error.Item hasn't been added");
				}
				else {
					echo "Item has been added";
				}
			}
			else if($catagory=='Computer Accessory'){
				$is_ComputerAcc_buton_true = 'checked';				
				if (!mysqli_query($conn ,"insert into computer_accessory(P_CA_Code,P_CA_Catagory,P_CA_Brand,P_CA_Price,P_CA_Quantity,Product_CA_Pic) values('$P_Code','$P_Cata','$P_brand','$P_price','$P_quantity','$P_pic')")){
					echo("Error.Item hasn't been added");
				}
				else {
					echo "Item has been added";
				}
			}
			else if($catagory=='Mobile'){
				$is_Mobile_buton_true = 'checked';				
				if (!mysqli_query($conn ,"insert into mobile(P_Mo_Code,P_Mo_Catagory,P_Mo_Brand,P_Mo_Price,P_Mo_Quantity,Product_Mo_Pic) values('$P_Code','$P_Cata','$P_brand','$P_price','$P_quantity','$P_pic')")){
					echo("Error.Item hasn't been added");
				}
				else {
					echo "Item has been added";
				}
			}
			else if($catagory=='Electronics'){
				$is_Electronics_buton_true = 'checked';				
				if (!mysqli_query($conn ,"insert into electronics(P_E_Code,P_E_Catagory,P_E_Brand,P_E_Price,P_E_Quantity,Product_E_Pic) values('$P_Code','$P_Cata','$P_brand','$P_price','$P_quantity','$P_pic')")){
					echo("Error.Item hasn't been added");
				}
				else {
					echo "Item has been added";
				}
			}
			else{
				$is_Others_buton_true = 'checked';
				if (!mysqli_query($conn ,"insert into others(P_O_Code,P_O_Catagory,P_O_Brand,P_O_Price,P_O_Quantity,Product_O_Pic) values('$P_Code','$P_Cata','$P_brand','$P_price','$P_quantity','$P_pic')")){
					echo("Error.Item hasn't been added");
				}
				else {
					echo "Item has been added";
				}
			}
		}
		else{
			$catagoryError = "PLEASE SELECT A Catagory";
			echo $catagoryError;
		}
		
	}
?>





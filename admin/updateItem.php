
<!DOCTYPE html>
<html>
	<head>
	</head>
	
	<body>
		<h1 align="center">DorDam</h1>
		<hr>
		<h3>Update Item's Price:</h3><br><br>
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
			<td><label>Product Price :</label></td>
			<td><input type="text" name="pPrice"></br></td>
		</tr>
		
		</table>	
		<input type="submit" name ="delete" value="Update Price"/><br><br>
	</form>
	<form action="index.php" method="get">
		<input type="submit" name ="adminHome" value="Go to Home Page"/>
	</form>
	</body>
</html>

<?php
include("../data/db_connector.php");
	if(isset($_POST['delete'])){
		$P_Code=$_POST['pCode'];
		$P_Price=$_POST['pPrice'];
		
		if(isset($_POST['catagory'])==true){
			$catagory = $_POST['catagory'];
			if($catagory=='Men'){
				$is_Men_buton_true = 'checked';								
				$sql = "UPDATE men SET P_M_Price='$P_Price' WHERE P_M_Code='$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}			
			}
			else if($catagory=='Women'){
				$is_Women_buton_true = 'checked';
				$sql = "UPDATE women SET P_W_Price='$P_Price' WHERE P_W_Code='$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}	
				
			}
			else if($catagory=='Kids'){
				$is_Kids_buton_true = 'checked';				
				$sql = "UPDATE kids SET P_K_Price='$P_Price' WHERE P_K_Code='$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}	
			}
			else if($catagory=='Computer'){
				$is_Computer_buton_true = 'checked';				
				$sql = "UPDATE computer SET P_C_Price='$P_Price' WHERE P_C_Code='$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}	
			}
			else if($catagory=='Computer Accessory'){
				$is_ComputerAcc_buton_true = 'checked';				
				$sql = "UPDATE computer_accessory SET P_CA_Price='$P_Price' WHERE P_CA_Code='$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}	
			}
			else if($catagory=='Mobile'){
				$is_Mobile_buton_true = 'checked';				
				$sql = "UPDATE mobile SET P_Mo_Price='$P_Price' WHERE P_Mo_Code='$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}	
			}
			else if($catagory=='Electronics'){
				$is_Electronics_buton_true = 'checked';				
				$sql = "UPDATE electronics SET P_E_Price='$P_Price' WHERE P_E_Code='$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}	
			}
			else{
				$is_Others_buton_true = 'checked';
				$sql = "UPDATE others SET P_O_Price='$P_Price' WHERE P_O_Code='$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}	
			}
		}
		else{
			$catagoryError = "PLEASE SELECT A Catagory";
			echo $catagoryError;
		}
		
	}
?>
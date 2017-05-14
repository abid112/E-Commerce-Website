<?php
include("../data/db_connector.php");
	if(isset($_POST['delete'])){
		$P_Code=$_POST['pCode'];
		
		if(isset($_POST['catagory'])==true){
			$catagory = $_POST['catagory'];
			if($catagory=='Men'){
				$is_Men_buton_true = 'checked';								
				$sql = "DELETE FROM men WHERE P_M_Code= '$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record deleted successfully";
				} else {
					echo "Error deleting record: " . mysqli_error($conn);
				}			
			}
			else if($catagory=='Women'){
				$is_Women_buton_true = 'checked';
				$sql = "DELETE FROM women WHERE P_W_Code= '$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record deleted successfully";
				} else {
					echo "Error deleting record: " . mysqli_error($conn);
				}	
				
			}
			else if($catagory=='Kids'){
				$is_Kids_buton_true = 'checked';				
				$sql = "DELETE FROM kids WHERE P_K_Code= '$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record deleted successfully";
				} else {
					echo "Error deleting record: " . mysqli_error($conn);
				}	
			}
			else if($catagory=='Computer'){
				$is_Computer_buton_true = 'checked';				
				$sql = "DELETE FROM computer WHERE P_C_Code= '$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record deleted successfully";
				} else {
					echo "Error deleting record: " . mysqli_error($conn);
				}	
			}
			else if($catagory=='Computer Accessory'){
				$is_ComputerAcc_buton_true = 'checked';				
				$sql = "DELETE FROM computer_accessory WHERE P_CA_Code= '$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record deleted successfully";
				} else {
					echo "Error deleting record: " . mysqli_error($conn);
				}	
			}
			else if($catagory=='Mobile'){
				$is_Mobile_buton_true = 'checked';				
				$sql = "DELETE FROM mobile WHERE P_Mo_Code= '$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record deleted successfully";
				} else {
					echo "Error deleting record: " . mysqli_error($conn);
				}	
			}
			else if($catagory=='Electronics'){
				$is_Electronics_buton_true = 'checked';				
				$sql = "DELETE FROM electronics WHERE P_E_Code= '$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record deleted successfully";
				} else {
					echo "Error deleting record: " . mysqli_error($conn);
				}	
			}
			else{
				$is_Others_buton_true = 'checked';
				$sql = "DELETE FROM others WHERE P_O_Code= '$P_Code'";
				if (mysqli_query($conn, $sql)) {
					echo "Record deleted successfully";
				} else {
					echo "Error deleting record: " . mysqli_error($conn);
				}	
			}
		}
		else{
			$catagoryError = "PLEASE SELECT A Catagory";
			echo $catagoryError;
		}
		
	}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	
	<body>
		<h1 align="center">DorDam</h1>
		<hr>
		<h3>Delete Item:</h3><br><br>
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
				
		<br>
		<table>
		<tr>
			<td><label>Product Code :</label></td>
			<td><input type="text" name="pCode"></br></td>
		</tr>	
		
		</table>	
		<input type="submit" name ="delete" value="Delete Item"/><br><br>
	</form>
	<form action="index.php" method="get">
		<input type="submit" name ="adminHome" value="Go to Home Page"/>
	</form>
	</body>
</html>
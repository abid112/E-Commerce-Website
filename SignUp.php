<?php
	include("data/db_connector.php");	
	
	$name = "";
	$nameErr = "";
	$id= "";
	$id_error= "";
	$email = "";
	$email_error = "";
	$pass = "";
	$pass_error="";
	$repass = "";
	$repass_error="";
	$mob = "";
	$mob_error="";
	$is_male_buton_true = '';
	$is_female_buton_true = '';
	$is_others_buton_true = '';
	$gender="";
	$genderErr = "";
	
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$name = $_POST['name'];
		$id = $_POST['UserID'];
		$email =$_POST['Email'];
		$pass=$_POST['Pass'];
		$repass=$_POST['RePass'];
		$mob=$_POST['Mobile'];	
		$check=0;
		
		if(empty($name)==true){
			$nameErr = "NAME REQUIRED";				
		}
		else{
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = "Only letters and white space allowed"; 
			}
			else {
				$check=$check+1;
			}			
		}
		echo "<br/>";
		if(empty($id)==true){
			$id_error = "UserID REQUIRED";				
		}
		else{
			$count= strlen($id);
			if($count>10){
				$id_error = "Limit Crossed";	
			}
			else {
				$check=$check+1;
			}
			
		}				
		echo "<br/>";	
		if(empty($email)==true){
			$email_error = "Email REQUIRED";				
		}
		else{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$email_error = "Invalid email format"; 
			}
			else{
				$check=$check+1;
			}
		}				
		echo "<br/>";
		if(empty($pass)==true){
			$pass_error = "Password REQUIRED";				
		}
		else{
			if (!preg_match("/^[a-zA-Z0-9 ]*$/",$pass)) {
				$pass_error = "Invalid Pattern"; 
			}
			else{
				$check=$check+1;
			}
			
		}	
		echo "<br/>";
		if(empty($repass)==true){
			$repass_error = "Re-Enter Password REQUIRED";				
		}
		else{
			if($repass!=$pass){
				$repass_error = "Password doesn't match";
			}
			$check=$check+1;
		}		
		echo "<br/>";
		if(empty($mob)==true){
			$mob_error = "Mobile Number REQUIRED";				
		}
		else{
			$count_m= strlen($mob);
			if($count_m!=11){
				$mob_error = "Mobile Number Digit should be 11";
			}
			else {
				if (!preg_match("/^[0-9]*$/",$mob)) 	
				{
					$mob_error = "Only Number is allowed";
				}
				else{
					$check=$check+1;
				}
			}
			
		}		
		echo "<br/>";
		if(isset($_POST['gender'])==true){
			$gender = $_POST['gender'];
			if($gender=='m'){
				$is_male_buton_true = 'checked';
				$gender="Male";
				$check=$check+1;
			}
			else if($gender=='f'){
				$is_female_buton_true = 'checked';
				$gender="Female";
				$check=$check+1;
			}
			else {
				$is_others_buton_true = 'checked';
				$gender="Other";
				$check=$check+1;
			}
		}
		else{
			$genderErr = "PLEASE SELECT A GENDER";
		}
		if($check==7){
			if (!mysqli_query($conn ,"insert into user(name,UserID,Email,Pass,gender,Mobile) values('$name ','$id','$email','$pass','$gender','$mob')")){
					echo "Error.Sign Up is not Done";
				}
			else {
					if (!mysqli_query($conn ,"insert into log_in(User_ID,PassWord) values('$id','$pass')")){
						echo "Sign Up is not Done";
					}
					else{
						echo "Sign Up is successfully Done";
						header("location: LogIn.php");
						
					}						
				}
		}
		
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<style>
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
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	
		<h1 align ="center">Creat your DorDam Account</h1> </br>

		<table border="1" style="width:25%" align ="Center">

		
		  <tr>
			<td>Name</td>
			<td><input name="name" type="text" style="width:100%"/>
			<?= $nameErr; ?></td> 		
		  </tr>
		  <tr>
			<td>User Name</td>
			<td><input name="UserID" type="text" style="width:100%"/>
			<?= $id_error; ?></td>
			
		  </tr>

		  <tr>
			<td>Email</td>
			<td><input name="Email" type="text"style="width:100%" /> 
			<?= $email_error; ?></td>
			
		  </tr>

			<tr>
				<td>Password</td>
				<td><input name="Pass" type="password"  style="width:100%"/>
				<?= $pass_error; ?></td>
				
			</tr>
			
			<tr>
				<td>Re-Enter Password</td>
				<td><input name="RePass" type="password"  style="width:100%"/>
				<?= $repass_error; ?></td>
				
			</tr>

		  <tr>
			<td>Gender</td>
			<td>
			<input name="gender" type="radio" value="m"/>Male </br>
			<input name="gender" type="radio" value="f"/>Female </br>
			<input name="gender" type="radio" value="o"/>Other
			</br><?php echo $genderErr; ?>
			</td>
			 
		  </tr>
		  
		  
		  <tr>
			<td>Mobile Number</td>
			<td><input name="Mobile" type="text"style="width:100%" /> 
			<?= $mob_error; ?></td>
		  </tr>

		  <tr>
			<td colspan="3"> <br> </td>
		  </tr> 
		  
		  <tr>
			<td colspan="3", align ="right">
				<input type="submit" name="submit" value="Sign up"/>
			</td>
		  </tr>   

	</table>
	</form>
	</body>
</html>

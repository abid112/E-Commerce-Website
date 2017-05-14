<?php
	$host='localhost';
	$username='root';
	$pass='';
	$db_name='e_commarce';
	
	$conn =  @mysqli_connect($host,$username,$pass,$db_name) or die("Please check your Username or Password or selected Database's name");	
?>
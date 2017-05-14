<?php
	$query = $_GET['q'];
	
	if($query=='m' ||$query=='M'){
		echo "Men<br>Mobile";
	}
	else if($query=='w' ||$query=='W'){
		echo "Women";
	}
	else if($query=='k' ||$query=='K'){
		echo "kids";
	}
	else if($query=='c' ||$query=='C'){
		echo "Computer <br>Computer Accessory";
	}
	else if($query=='e' ||$query=='E'){
		echo "Electronics";
	}
	else if($query=='o' ||$query=='O'){
		echo "Others";
	}
?>
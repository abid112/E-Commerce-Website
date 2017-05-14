<?php
	include("data/db_connector.php");
	session_start();
	
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
		$_SESSION['serial']= 0;
		$_SESSION['totalprice']=0;
		$_SESSION['totalQ']=array();
		
		$_SESSION['menQ']=array();
		$_SESSION['womenQ']=array();
		$_SESSION['kidsQ']=array();
		$_SESSION['computerQ']=array();
		$_SESSION['comAccQ']=array();
		$_SESSION['mobileQ']=array();
		$_SESSION['electroQ']=array();
		$_SESSION['othersQ']=array();
	}
	
	$sql1 = "SELECT * FROM men
			ORDER BY P_M_Code DESC
			LIMIT 1;";
	$result1 = mysqli_query($conn, $sql1);	
	$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC) or die(mysqli_error($conn));
	$menID = $row1["P_M_Code"];
	$menP=$row1["Product_M_Pic"];	
	//echo $menP;
	
	$sql2 = "SELECT * FROM women
			ORDER BY P_W_Code DESC
			LIMIT 1;";
	$result2 = mysqli_query($conn, $sql2);	
	$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC) or die(mysqli_error($conn));
	$womenID = $row2["P_W_Code"];
	$womenP=$row2["Product_W_Pic"];	
	
	$sql3 = "SELECT * FROM kids
			ORDER BY P_K_Code DESC
			LIMIT 1;";
	$result3 = mysqli_query($conn, $sql3);	
	$row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC) or die(mysqli_error($conn));
	$kidsID = $row3["P_K_Code"];
	$kidsP=$row3["Product_K_Pic"];	
	
	$sql4 = "SELECT * FROM computer
			ORDER BY P_C_Code DESC
			LIMIT 1;";
	$result4 = mysqli_query($conn, $sql4);	
	$row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC) or die(mysqli_error($conn));
	$comID = $row4["P_C_Code"];
	$comP=$row4["Product_C_Pic"];
	
	$sql5 = "SELECT * FROM computer_accessory
			ORDER BY P_CA_Code DESC
			LIMIT 1;";
	$result5 = mysqli_query($conn, $sql5);	
	$row5 = mysqli_fetch_array($result5,MYSQLI_ASSOC) or die(mysqli_error($conn));
	$comACID = $row5["P_CA_Code"];
	$comAcP=$row5["Product_CA_Pic"];
	
	$sql6 = "SELECT * FROM mobile
			ORDER BY P_Mo_Code DESC
			LIMIT 1;";
	$result6 = mysqli_query($conn, $sql6);	
	$row6 = mysqli_fetch_array($result6,MYSQLI_ASSOC) or die(mysqli_error($conn));
	$mobID =$row6["P_Mo_Code"];
	$mobP=$row6["Product_Mo_Pic"];
	
	$sql7 = "SELECT * FROM electronics
			ORDER BY P_E_Code DESC
			LIMIT 1;";
	$result7 = mysqli_query($conn, $sql7);	
	$row7 = mysqli_fetch_array($result7,MYSQLI_ASSOC) or die(mysqli_error($conn));
	$elecID = $row7["P_E_Code"];
	$elecP=$row7["Product_E_Pic"];
	
	$sql8 = "SELECT * FROM others
			ORDER BY P_O_Code DESC
			LIMIT 1;";
	$result8 = mysqli_query($conn, $sql8);	
	$row8 = mysqli_fetch_array($result8,MYSQLI_ASSOC) or die(mysqli_error($conn));
	$otherID = $row8["P_O_Code"];
	$otherP=$row8["Product_O_Pic"];
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		
		if(isset($_POST['show1']))
		{
			$_SESSION['catagory']=1;			
			$_SESSION['productID']= $menID;			
			header("location: Product Details.php");
		}
		else if(isset($_POST['show2']))
		{
			$_SESSION['catagory']=2;	
			$_SESSION['productID']= $womenID;
			header("location: Product Details.php");
		}
		else if(isset($_POST['show3']))
		{
			$_SESSION['catagory']=3;			
			$_SESSION['productID']= $kidsID;
			header("location: Product Details.php");
		}
		else if(isset($_POST['show4']))
		{
			$_SESSION['catagory']=4;				
			$_SESSION['productID']= $comID;
			header("location: Product Details.php");
		}
		else if(isset($_POST['show5']))
		{
			$_SESSION['catagory']=5;				
			$_SESSION['productID']= $comACID;
			header("location: Product Details.php");
		}
		else if(isset($_POST['show6']))
		{
			$_SESSION['catagory']=6;				
			$_SESSION['productID']= $mobID;
			header("location: Product Details.php");
		}
		else if(isset($_POST['show7']))
		{
			$_SESSION['catagory']=7;				
			$_SESSION['productID']= $elecID;
			header("location: Product Details.php");
		}
		else if(isset($_POST['show8']))
		{
			$_SESSION['catagory']=8;				
			$_SESSION['productID']= $otherID;
			header("location: Product Details.php");
		}
	}
	
	echo '<html>
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
			#contentHolder{
				position: absolute;
				top: 63px;
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
			
			.recent{
					position: absolute;
					top: 125px;
					right: 775px;

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
			<script>
			function Request(value) {
			document.getElementById("contentHolder").innerHTML = value;
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("contentHolder").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "hint.php?q="+value, true); //true=Asynchronous Request
        xmlhttp.send(); 
}
</script>
			<h1>DorDam</h1>

			<!--<input type="text" id ="searchText"/>-->
			<input type="button" id ="searchButton" value="search"/>
			<form action="" method=""post>
			<input type="text" id ="searchText" onkeyup="Request(this.value)" />
			<input type="button" id ="searchButton" value="search"/>
			<span id="contentHolder"></span></form>

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
			<form action="" method="post">
			<table class="recent" border="1" style="width:15%" align ="Center">
				<tr>
					<td><img src="'.$menP.'" alt="" style="width:200px; height:auto;"></td>
					<td><img src="'.$womenP.'" alt="" style="width:200px; height:auto;"></td>
					<td><img src="'.$kidsP.'" alt="" style="width:200px; height:auto;"></td>
					<td><img src="'.$comP.'" alt="" style="width:200px; height:auto;"></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" name="show1" value="Show Details"></td>
					<td align="center"><input type="submit" name="show2" value="Show Details"></td>
					<td align="center"><input type="submit" name="show3" value="Show Details"></td>
					<td align="center"><input type="submit" name="show4" value="Show Details"></td>
				</tr>
				<tr>
					<td><img src="'.$comAcP.'" alt="" style="width:200px; height:auto;"></td>
					<td><img src="'.$mobP.'" alt="" style="width:200px; height:auto;"></td>
					<td><img src="'.$elecP.'" alt="" style="width:200px; height:auto;"></td>
					<td><img src="'.$otherP.'" alt="" style="width:200px; height:auto;"></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" name="show5" value="Show Details"></td>
					<td align="center"><input type="submit" name="show6" value="Show Details"></td>
					<td align="center"><input type="submit" name="show7" value="Show Details"></td>
					<td align="center"><input type="submit" name="show8" value="Show Details"></td>
				</tr>
			</table>
			</form>
			</body>
			</html>';

	
?>



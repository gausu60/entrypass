<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_REQUEST['check_Out'])) 
{
	if (($_REQUEST['out_id']=="")) {
		echo "<br><b>please enter valid id_Number<b>";
	}else{
		
		$outDateTime = date('Y-m-d H:i:s');
		$id = $_REQUEST['out_id'];
		$sql = "UPDATE GUEST SET Check_Out={$currentDateTime} where id = {$id}";
		if (mysqli_query($conn,$sql)) 
		{
		 	echo "<br> 1 Record Successfull Thank you visit again!";
		}
		else{
			echo "unable to insert data";
		}
		
		
				
	}
}


?>
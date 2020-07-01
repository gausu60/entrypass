<!DOCTYPE html>
<html>
<head>
	<title>student data</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
	<h1>VISITOR DATA</h1>

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

$sql = "SELECT * FROM guest;";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
	echo '<table class="table">';
        	echo "<thead>";
        		echo "<tr>";
        		echo "<th>Id</th>";
        		echo "<th>NAME</th>";
        		echo "<th>purpose</th>";
        		echo "<th>company</th>";
        		echo "<th>check_in</th>";
        		echo "<th>meet</th>";
                echo "<th>Check_Out</th>";
        		echo "</tr>";
        	echo "</thead>";
        
    // output data of each row
    
    	echo "<tbody>";
    	while($row = mysqli_fetch_assoc($result)) 
    {
    	echo "<tr>";
    		echo "<td>". $row['id'] ."</td>";
    		echo "<td>". $row['Name'] ."</td>";
    		echo "<td>". $row['Purpose'] ."</td>";
    		echo "<td>". $row['Company'] ."</td>";
    		echo "<td>". $row['Check_in'] ."</td>";
    		echo "<td>". $row['Meet'] ."</td>";
            echo "<td>". $row['check_out'] ."</td>";



    	echo "</tr>";
    	
        
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
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

if (isset($_REQUEST['submit'])) 
{
	if (($_REQUEST['name']=="")||($_REQUEST['purpose']=="")||($_REQUEST['company']=="")||($_REQUEST['meet']=="")) {
		echo "<b>please fill All field</b>";
	}
	else
	{
		$name = $_REQUEST['name'];
		$purpose = $_REQUEST['purpose'];
		$company = $_REQUEST['company'];
		$meet = $_REQUEST['meet'];
		$currentDateTime = date('Y-m-d H:i:s');
		$sql = "INSERT INTO guest(name, purpose, company, check_in,meet) VALUES ('$name','$purpose','$company','$currentDateTime','$meet');";
		if (mysqli_query($conn,$sql)) 
		{
		 	echo "<br> 1 Record Successfull Thank you visit again!";
		}
		else{
			echo "unable to insert data";
		}
		
		
				
	}
}

mysqli_close($conn);
?>
<?php include_once 'check_out.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Entry_Pass</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="containter">
		<h1>Welcome to Entry Pass Information</h1>
		<div class="rows">
			<div class="col-sm-4">
				<form  class="form-group" method="post">
					<label for="Name">Name:</label><br>
					<input type="text" name="name" class="form-control">
					<label for="Purpose">Purpose:</label><br>
					<input type="text" name="purpose" class="form-control">
					<label for="Company">Company:</label><br>
					<input type="text" name="company" class="form-control">
					<label for="Meet">Meet:</label><br>
					<input type="text" name="meet" class="form-control">
					<label for="cell">Telephone:</label><br>
					<input type="text" name="telephone" class="form-control">
					<input type="submit" name="submit" class="btn btn-lg btn-success"><br>
					
				</form>
				<div class="form-group">
				<fieldset>
					<legend>Check_ out Entry</legend>
				<form class="form-group" action="">
					<label for="id">ID_NUMBER:</label>
					<input type="text" name="out_id" maxlength="3"><button type="submit" name="check_Out">Check_Out</button>
				</form>
				</fieldset>
				
			</div>
			</div>

			<div class="col-sm-6 offset-sm-2">
				<?php
				include_once("databasetest.php");
?>
			</div>

		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
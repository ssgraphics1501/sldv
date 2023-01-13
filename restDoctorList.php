<?php 
if(!isset($_SESSION)){
	session_start();
}
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style>
		.css-serial {
  counter-reset: serial-number;  /* Set the serial number counter to 0 */
}

		td{
			padding: 5px;
		}
		th{
			padding: 5px;
		}
		
.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Increment the serial number counter */
  content: counter(serial-number);  /* Display the counter */
}
	</style>
</head>

<body>
	<div>
		<h2>My Doctors List</h2>
	<?php
	error_reporting(E_ALL); 
ini_set('display_errors', 1);
	$headquarter = $_SESSION['headquarter'];
	$type = $_SESSION['type'];

	
	include('connection.php');

	if(!$connection){
			echo '<span style="color:blue">You are NOT Connected!</span>';
			
		}
		
		if ($connection -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


		
		$stm = mysqli_prepare($connection, "Select name, specialty, place, phone, email, headquarter from doctorlist where headquarter =? ");
		if($stm){
		$stm->bind_param('s', $headquarter);
		$stm->execute();
		$stm->bind_result($name, $specialty, $place, $phone, $email, $hquar);
		echo "<table border='solid black 1px' style='border-collapse:collapse; color:black;border-color:grey;' class='css-serial'>";
		echo "<tr><th>Serial No.</th><th>Name of Dr</th><th>Specialty</th><th>Address</th><th>Phone</th><th>Email</th><th>Headquarter</th></tr>";
		
		while($stm->fetch()){
			echo "<tr><td></td><td>" . $name . "</td>";
			echo "<td>" . $specialty . "</td>";
			echo "<td>" . $place . "</td>";
			echo "<td>" . $phone . "</td>";
			echo "<td>" . $email . "</td>";
			echo "<td>" . $hquar . "</td></tr>";
			}
		
		
		echo "</table>";
		}


	
	?>
	
	</div>
</body>
</html>
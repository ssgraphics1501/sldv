<?php session_start() ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<style>
		.css-serial {
  counter-reset: serial-number;  /* Set the serial number counter to 0 */
}

.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Increment the serial number counter */
  content: counter(serial-number);  /* Display the counter */
}
	</style>
</head>

<body>
	
	<?php
	error_reporting(E_ALL); 
ini_set('display_errors', 1);
	$headquarter = $_POST['headquarter'];
	$type = $_SESSION['type'];

	
	include('connection.php');

	if(!$connection){
			echo '<span style="color:blue">You are NOT Connected!</span>';
			
		}
		
		if ($connection -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$hquarter = $_POST['headquarter'];

if($hquarter === "All"){
	$hq = 1;
}

elseif($hquarter === "Select"){
	$hq = 2;
}
else{
	$hq = 3;
}

$makeTable = "<table border='solid black 1px' style='border-collapse:collapse' class='css-serial'>";
$makeTable .= "<tr><th>Serial No.</th><th>Doctor's Name</th><th>Specialty</th><th>Address</th><th>Phone</th><th>Email</th>";
$makeTable .= "<th>Headquarter</th></tr>";

	if($hq == 1){
		
		
		$stm = "Select name, specialty, place, phone, email, headquarter from doctorlist";
		
		$query = mysqli_query($connection, $stm);
		
		
		echo $makeTable;
		 
	
		while ($row = mysqli_fetch_assoc($query)) {
			echo "<tr><td></td><td>" . $row['name'] . "</td>";
			echo "<td>" . $row['specialty'] . "</td>";
			echo "<td>" . $row['place'] . "</td>";
			echo "<td>" . $row['phone'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['headquarter'] . "</td></tr>";
		}
		
		
		echo "</table>";
	}

elseif($hq == 2){
	$makeTable = '';
}
	
	else{
		
		$stm = mysqli_prepare($connection, "Select name, specialty, place, phone, email, headquarter from doctorlist where headquarter =? ");
		if($stm){
		$stm->bind_param('s', $hquarter);
		$stm->execute();
		$stm->bind_result($name, $specialty, $place, $phone, $email, $hquar);
		echo $makeTable;
		
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
	}

	
	?>
	
	
</body>
</html>
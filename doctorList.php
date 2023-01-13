<?php session_start() ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	error_reporting(E_ALL); 
ini_set('display_errors', 1);
	$headquarter = $_SESSION['headquarter'];
	$type = $_SESSION['type'];

	
	include('connection.php');

	if(!$conn){
			echo '<span style="color:blue">You are NOT Connected!</span>';
			
		}
		
		if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

	if($type == 1){
		
		$stm = "Select name, specialty, place, phone, email, headquarter from doctorlist";
		
		$query = mysqli_query($conn, $stm);
		//$results = mysqli_fetch_assoc($query);
		
		//print_r($results);
		
		echo "<table border='solid black 1px' style='border-collapse:collapse'>";
		echo "<tr><th>Name of Dr</th><th>Specialty</th><th>Address</th><th>Phone</th><th>Email</th><th>Headquarter</th></tr>";
	
		while ($row = mysqli_fetch_assoc($query)) {
			echo "<tr><td>" . $row['name'] . "</td>";
			echo "<td>" . $row['specialty'] . "</td>";
			echo "<td>" . $row['place'] . "</td>";
			echo "<td>" . $row['phone'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['headquarter'] . "</td></tr>";
		}
		
		
		echo "</table>";
	}
	
	elseif($type == 2){
		
		$stm = mysqli_prepare($conn, "Select name, specialty, place, phone, email, headquarter from doctorlist where headquarter =? ");
		$stm->bind_param('s', $headquarter);
		$stm->execute();
		$stm->bind_result($name, $specialty, $place, $phone, $email, $hq);
		echo "<table border='solid black 1px' style='border-collapse:collapse'>";
		echo "<tr><th>Name of Dr</th><th>Specialty</th><th>Address</th><th>Phone</th><th>Email</th><th>Headquarter</th></tr>";
		
		while($stm->fetch()){
			echo "<tr><td>" . $name . "</td>";
			echo "<td>" . $specialty . "</td>";
			echo "<td>" . $place . "</td>";
			echo "<td>" . $phone . "</td>";
			echo "<td>" . $email . "</td>";
			echo "<td>" . $hq . "</td></tr>";
		}
		
		
		echo "</table>";
	}

elseif($type == 3){
		
		$stm = mysqli_prepare($conn, "Select name, specialty, place, phone, email, headquarter from doctorlist where headquarter =? ");
		$stm->bind_param('s', $headquarter);
		$stm->execute();
		$stm->bind_result($name, $specialty, $place, $phone, $email, $hq);
		echo "<table border='solid black 1px' style='border-collapse:collapse'>";
		echo "<tr><th>Name of Dr</th><th>Specialty</th><th>Address</th><th>Phone</th><th>Email</th><th>Headquarter</th></tr>";
		
		while($stm->fetch()){
			echo "<tr><td>" . $name . "</td>";
			echo "<td>" . $specialty . "</td>";
			echo "<td>" . $place . "</td>";
			echo "<td>" . $phone . "</td>";
			echo "<td>" . $email . "</td>";
			echo "<td>" . $hq . "</td></tr>";
		}
		
		
		echo "</table>";
	}
	
	
	
	
	
	
	
	?>
	
	
</body>
</html>
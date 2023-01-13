	<?php
	if(!isset($_SESSION)){
		session_start();
	}
 	
	error_reporting(E_ALL); 
	ini_set('display_errors', 1);
	//$allDate = $_POST['allDate'];
	// $frDate = $_POST['frDate'];
	// $toDate = $_POST['toDate'];

	 $frDate = '2021-01-01';
	 $toDate = '2022-05-27';

	//$type = $_SESSION['type'];

	
	include('connection.php');

	if(!$connection){
			echo '<span style="color:blue">You are NOT Connected!</span>';
			
		}
		
		if ($connection -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$dt =3;
$makeTable = "<table border='solid black 1px' style='border-collapse:collapse'>";

$makeTable .= "<tr>
<th>ID</th>
<th>MR Name</th>
<th>Headquarters</th>
<th>Doctor's Name</th>
<th>Products Promoted</th>
<th>Products Prescribed</th>
<th>POB</th>
<th>Remarks</th>
<th>Date</th>";


$makeTable .= "</tr>";

	if($dt == 1){
		
		
		$stm = "Select * from daily_report";
		
		$query = mysqli_query($connection, $stm);
		
		
		echo $makeTable;
		 
	
		while($row = mysqli_fetch_assoc($query)){

	echo "<tr>";
	echo '<td>' . $row['id']. '</td>';
	echo '<td>' . $row['mr_name']. '</td>';
	echo '<td>' . $row['dr_name']. '</td>';
	echo '<td>' . $row['prod_promoted']. '</td>';
	echo '<td>' . $row['prod_prescribed']. '</td>';
	echo '<td>' . $row['pob']. '</td>';
	echo '<td>' . $row['remarks']. '</td>';
	echo '<td>' . $row['headquarters']. '</td>';
	echo '<td>' . $row['date']. '</td>';
	echo "<tr>";	
}
		
		
		echo "</table>";
	}

elseif($dt == 2){
	$makeTable = '';
}
	
	else{
		
		
		$stm = mysqli_prepare($connection, "Select * from daily_report where date BETWEEN ? and ? ");
		if($stm){
		$stm->bind_param('ss', $frDate, $toDate);
		$stm->execute();
		$stm->bind_result($id, $mr_name, $dr_name, $prod_promoted, $prod_prescribed, $pob, $remarks, $headquarters, $date);
		
		
		while($stm->fetch()){
			$makeTable .= "<tr>";
			$makeTable .= '<td>'.$id. '</td>';
			$makeTable .= '<td>'.$mr_name. '</td>';
			$makeTable .= '<td>'.$dr_name. '</td>';
			$makeTable .= '<td>'.$prod_promoted. '</td>';
			$makeTable .= '<td>'.$prod_prescribed. '</td>';
			$makeTable .= '<td>'.$pob. '</td>';
			$makeTable .= '<td>'.$remarks. '</td>';
			$makeTable .= '<td>'.$headquarters. '</td>';
			$makeTable .= '<td>'.$date. '</td>';
			$makeTable .= "</tr>";	
			}
		
		
		$makeTable .= "</table>";
		}
	}

	echo $makeTable;
	?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
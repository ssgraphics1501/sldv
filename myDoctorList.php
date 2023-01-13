
	<?php
include('connection.php');
	
	$query = mysqli_prepare($connection, "Select name from doctorlist where name like ?");

$input = "%" . $_POST['drName'] . "%";
	//$input = "Vishal Malhotra";
	
	$query->bind_param('s', $input);
	
	$query->execute();
	
	//$stm = $query->get_result();

	$query->bind_result($name);
	
	
	
	if(!empty($query)){
		$output = '<ul>';
	//while($row = mysqli_fetch_assoc($stm)){
		while($query->fetch()){
		$output .= '<li>'.$name.'</li>';
	}
	
	$output .= '</ul>';
	
	echo $output;
	}

else{
	$output = "No Data found!";
	echo $output;
}
	
	


	
	?>
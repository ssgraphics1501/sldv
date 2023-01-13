<?php session_start(); 
		
	$type = $_SESSION['type'];

	if($type !== 1){
		header("Location:login.php");
	}
	
// Marking this page by $active, it works like dynamic name

	$active = 'Admin';

// including header.php page for navigation menu and style
	include('header.php');

//Including adminAction.php to add doctor, employee and see list of doctor and daily report	
	include('adminAction.php');
?>


	
	<div class="addDoctor1">
<!-- including addDoctor.php | Form to add Doctor -->
		<?php 
		include('addDoctor.php'); 
		?>
	</div>

	

<!-- Adding footer.php page -->
	<div class="footer">
	<?php include('footer.php'); ?>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.js" 
	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
	crossorigin="anonymous"></script> 
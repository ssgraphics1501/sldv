<?php session_start() ?>
	
	<?php
		
	$type = $_SESSION['type'];

	if($type !== 1){
		header("Location:login.php");
	}


	
			$active = 'Admin';

//Includding header.php file to get header and all css style and script

			include('header.php');

//Including adminAction.php file to get four action link for Admin
			include('adminAction.php');
		?>
	
	<div id="adminShow">

<!-- Including addEmployee.php file to get form to insert new Employee -->
		<?php include('addEmployee.php'); ?>
	</div>
	
	<div class="footer">
	<?php include('footer.php'); ?>
	</div>
	

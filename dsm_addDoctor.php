<?php session_start() ?>

<!-- <link href="css/adminAction.css" rel="stylesheet"> -->

	

	<?php
	$type = $_SESSION['type'];
	$name = $_SESSION['name'];
	$headquarter = $_SESSION['headquarter'];
	
	
	if($type !== 2){
		header("Location:login.php");
	}
	
if(isset($_POST['logOut'])){
	session_destroy();
	header("Location:index.php");
}

	?>
	
	
	<script>
		$(document).ready(function(){
			

			
			$('#dailyReport').click(function(){
				$('#adminShow').css('display','block');
				$('#adminShow').load("dailyReport.php")
				
			});
			
		});
	</script>
	
	
	
	<?php
		$active = 'Admin';

		//Including header.php file to add navigation menu
		include('header.php');
		

	?>


	

	<div class="mainAdminAction">
		<a href="dsm.php"><div id="doctorList">Doctor List</div></a>
		<a href="dsm_addDoctor.php"><div id="addDoctor">Add Doctor</div></a>
		<a href="dsm_dailyReport.php"><div id="dailyReport">Daily Report</div></a>
	</div>
	

	<!-- including addDoctor.php to display form to add doctor -->
	<div id="adminShow"> <?php include('addDoctor.php'); ?>  </div>
	
	<!-- Including footer.php for footer details -->
	<div class="footer">
	<?php include('footer.php'); ?>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.js" 
	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
	crossorigin="anonymous"></script> 
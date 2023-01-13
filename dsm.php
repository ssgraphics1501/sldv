<?php
    if(!isset($_SESSION['name'])) 
     { 
         session_start(); 
		
     }

?>
<!-- <?php session_start() ?> -->

<link href="css/adminAction.css" rel="stylesheet">

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
	
	<?php
	$active = 'Divisional Sales Manager';
		include('header.php');
		
	?>
	
	<div class="mainAdminAction">
		<a href="dsm.php"><div id="doctorList">Doctor List</div></a>
		<a href="dsm_addDoctor.php"><div id="addDoctor">Add Doctor</div></a>
		<a href="dsm_dailyReport.php"><div id="dailyReport">Daily Report</div></a>
	</div>
	
	<div id="adminShow"> 
		<?php include('restDoctorList.php') ?> 
		
	</div>

	<div class="footer">
	<?php include('footer.php'); ?>
	</div>
	
</body>
</html>
<?php session_start();

	
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
	$active = 'DSM';
	include('header.php');
	
	?>
	
	
	

	<div class="mainAdminAction">
		<a href="dsm.php"><div id="doctorList">Doctor List</div></a>
		<a href="dsm_addDoctor.php"><div id="addDoctor">Add Doctor</div></a>
		<a href="dsm_dailyReport.php"><div id="dailyReport">Daily Report</div></a>
	</div>
	
	<div id="adminShow"> <?php include('daily_report.php'); ?>  </div>
	
	<div class="footer">
	<?php include('footer.php'); ?>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.js" 
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
crossorigin="anonymous"></script>

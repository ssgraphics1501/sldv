<?php session_start() ?>

<!-- <link href="css/adminAction.css" rel="stylesheet"> -->
		<?php
	$type = $_SESSION['type'];
	$name = $_SESSION['name'];
	$headquarter = $_SESSION['headquarter'];
	
	if($type !== 3){
		header("Location:login.php");
	}
	
if(isset($_POST['logOut'])){
	session_destroy();
	header("Location:index.php");
}
 include('header.php');
	?>

	<div class="mainAdminAction">
		<a href="mr.php"><div id="doctorList">Doctor List</div></a>
		<a href="mr_addDoctor.php"><div id="addDoctor">Add Doctor</div></a>
		<a href="mr_dailyReport.php"><div id="dailyReport">Daily Report</div></a>
	</div>
	
	<div id="adminShow"> <?php include('daily_report.php'); ?> </div>
	
	<div class="footer">
	<?php include('footer.php'); ?>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.js" 
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
crossorigin="anonymous"></script>
</body>
</html>
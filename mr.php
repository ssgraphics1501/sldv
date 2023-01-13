<?php
    if(!isset($_SESSION['name'])) 
     { 
         session_start(); 
     }

?> 
	<link href="css/adminAction.css" rel="stylesheet">
	
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
		
		$active = 'Medical Representative';
		include('header.php');
		
		
	?>
	
	<script>
		$(document).ready(function(){
			
		$("#printButton").click(function(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div#adminShow").printArea( options );
    });
			
		});

	</script>
	
	<div class="mainAdminAction">
		<a href="mr.php"><div id="doctorList">Doctor List</div></a>
		<a href="mr_addDoctor.php"><div id="addDoctor">Add Doctor</div></a>
		<a href="mr_dailyReport.php"><div id="dailyReport">Daily Report</div></a>
	</div>
	<div id="adminShow">
		<span style="background-color: lightgray">	<?php include('restDoctorList.php') ?></span><br>	
	</div>
	
	<div class="footer">
	<?php include('footer.php'); ?>
	</div>

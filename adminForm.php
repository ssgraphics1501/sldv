<?php
if(!isset($_SESSION['type']))
{
session_start(); 
}


	$type = $_SESSION['type'];

	if($type !== 1){
		header("Location:login.php");
	}
	
	if(isset($_SESSION['headquarter'])){
		$headquarter = $_SESSION['headquarter'];
	}

	include('header.php');
	?>


	<h2>Doctor List</h2><br>

	<form enctype="multipart/form-data" method="post" action="">
		<label><span style="color: white">Select Headquarter : </span>
			<select id="hq" class="hq">
				<option value="Select"> Select </option>
				<option value="All"> All </option>
				<option value="New Delhi"> New Delhi </option>
				<option value="Mumbai"> Mumbai </option>
				<option value="Chandigarh"> Chandigarh </option>
				
			</select>
	</form>
		
		
		
		<div id="dList"></div>
		
		<script>
	$(document).ready(function(){
		
		$('#hq').change(function(){
					var hqr = $('#hq').val();
					$.ajax({
						url:"adminDoctorList.php",
						method:"POST",
						data : {headquarter:hqr},
						success : function(data){
							$('#dList').html(data);
						}
						
					})
					
				})

		
	})
				
			</script>
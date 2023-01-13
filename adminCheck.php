<?php
    if(!isset($_SESSION['type']))
     { 
         session_start(); 
		
     }

	 $type = $_SESSION['type'];
 
	 if($type !== 1){
		 header("Location:login.php");
	 }
	 
	 $active = 'Admin';

	//Including header.php to get header menu
	 include('header.php');

	 //Including AdminAction.php to get CTA for Admin
	 include('adminAction.php');
?>
	
	<div id="adminShow">

	<div>
		
	<?php

	//Including connection.php for database connection
	include('connection.php');

	
	if(isset($_SESSION['headquarter'])){
		$headquarter = $_SESSION['headquarter'];
	}
	?>
	<h2>Doctor List</h2>

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
	<br><br>
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
</div>
</div>
<div class="footer">
<?php include('footer.php'); ?>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 

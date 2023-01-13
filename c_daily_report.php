<?php
 	if(!isset($_SESSION['type']))
	 { 
		 session_start(); 
		
	 }
		 
		 $type = $_SESSION['type'];
		 
		 
		 if($type !== 1){
			 header("Location:login.php");
		 }
?>

		<!-- <div id="dList"> -->
			
<!--				SELECT ALL DATE-->
			<div id="mainDate">

				<form enctype="multipart/form-data" method="post" action="">
					<label for="fromDate"><span style="color: white">From : </span></label>
					<input type="date" name="fromDate" id="fromDate" value="2000-01-01">
					
					<label for="toDate"><span style="color: white">To : </span></label>
					<input type="date" name="toDate" id="toDate"  value="2099-12-31">
					<button id="dateRange" type="submit">Submit</button>
				</form>
				<div id="dReport"></div>
			</div>
	
			

		<!-- </div> -->

		


		<script>
	$(document).ready(function(){
		
		$('#dateRange').click(function(){
			event.preventDefault();

					var frDate = $('#fromDate').val();
					var toDate = $('#toDate').val();
			
//					var frDate = '2021-08-04';
//					var toDate = '2021-08-08';
			
			
			
					$.ajax({
						url:"dReportDatewise.php",
						method: "POST",
						data : {frDate:frDate, toDate:toDate},
						success : function(data){
							$('#dReport').html(data);
							
							// console.log (data);
						},
						
						
					});
					
				});

	});
				
			</script>
	
	
		
		
		

<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->

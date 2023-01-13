	<?php
	if(!isset($_SESSION['type']))
	{ 
		session_start(); 
	   
	}
		
		$type = $_SESSION['type'];
		$name = $_SESSION['name'];
		$headquarter = $_SESSION['headquarter'];
		
		if($type !== 2 && $type !== 3){
			header("Location:login.php");
		}
		
		$inputField = 
			'<input type="checkbox" name="ProCode" value="NME"><label for="ProCode">NME</label>
			<input type="checkbox" name="ProCode" value="UCL"><label for="ProCode">UCL</label>
			<input type="checkbox" name="ProCode" value="SMX"><label for="ProCode">SMX</label>
			<input type="checkbox" name="ProCode" value="NVT"><label for="ProCode">NVT</label>
			<input type="checkbox" name="ProCode" value="UCT"><label for="ProCode">UCT</label>
			<input type="checkbox" name="ProCode" value="ORZ"><label for="ProCode">ORZ</label>
			<input type="checkbox" name="ProCode" value="NTX"><label for="ProCode">NTX</label>
			<input type="checkbox" name="ProCode" value="UVT"><label for="ProCode">UVT</label>
			<input type="checkbox" name="ProCode" value="DEX"><label for="ProCode">DEX</label>
			<input type="checkbox" name="ProCode" value="CHT"><label for="ProCode">CHT</label>
			<input type="checkbox" name="ProCode" value="CDT"><label for="ProCode">CDT</label>
			<input type="checkbox" name="ProCode" value="LIV"><label for="ProCode">LIV</label>
			<input type="checkbox" name="ProCode" value="UVT"><label for="ProCode">UVT</label>
			<input type="checkbox" name="ProCode" value="NVT-N"><label for="ProCode">NVT-N</label>
			<input type="checkbox" name="ProCode" value="VCP"><label for="ProCode">VCP</label>
			';
			// <span><p id="hide" name="hide" class="hide" value="Hide">Hide</p></span>
	
	include('connection.php');
		  
		 if(isset($_POST['submit'])) {
			
			 $mrName = $_POST['mr'];
			 $hq = $_POST['hq'];
			 $name = $_POST['drName'];
			 $prodProm = $_POST['prodProm'];
			 $prodPres = $_POST['prodPres'];
			 $pob = $_POST['pob'];
			 $remarks = $_POST['remarks'];
			 $date = $_POST['date'];
			 
			 $query = mysqli_prepare($connection, "Insert into daily_report (mr_name, headquarters, dr_name, prod_promoted, prod_prescribed, pob, remarks, date) values(?,?,?,?,?,?,?,?)");
			 
			 $query->bind_param('ssssssss', $mrName, $hq, $name, $prodProm, $prodPres, $pob, $remarks, $date);
			 $query->execute();
			 
			}
			 
		  
	?>
	
	<div class="div_container">
		
		<h2>Submit Daily Report</h2>
		
	<form enctype="multipart/form-data" id="form-add-doctor" method="post" action="<?php $_SERVER['PHP_SELF'] ?>" >
		
	
			
				<label class="add-doctor-label" for="mr">MR :</label>
				<input class="restInput default_input" type="text" id="mr" name="mr" placeholder="Name of MR">
			
				<label class="add-doctor-label" for="hq">H.Q. :</label>
				<input class="restInput default_input" type="text" id="hq" name="hq" placeholder="Head Quarter">
			
				<label class="add-doctor-label" for="drName">Name :</label>
				<input class="restInput default_input" type="text" name="drName" id="drName" placeholder="Doctor's Name">


			
				<label class="add-doctor-label" for="qual">Product Promoted :</label>
				<input class="default_input" type="text" name="prodProm" id="promPro" placeholder="Product Promoted ">
					<div id="promoted1" class="medicine"> <?php echo $inputField ?> </div>
			

				<label class="add-doctor-label" for="spec">Product Prescribe :</label>
				<input class="default_input" type="text" name="prodPres" id="presPro" placeholder="Product Prescribe ">
					<div id="prescribed1" class="medicine"> <?php echo $inputField ?> </div>
			


				<label class="add-doctor-label" for="dob">POB :</label>
				<input class="restInput default_input" type="text" name="pob" id="pob" placeholder="POB ">
			
				
				<label class="add-doctor-label" for="remarks">Remarks :</label>
				<input class="restInput default_input" type="text" name="remarks" id="remarks" placeholder="Remarks " >
				
				<label class="add-doctor-label" for="remarks">Date :</label>
				<input class="restInput default_input" type="date" name="date" id="date" placeholder="Date " >
					<br>
					<input type="submit" name="submit" id="submit" value="Submit">
		
					<input type="reset" name="reset" id="reset" value="Reset">
					
		</form>
	
</div>

	<script>
		$(document).ready(function(){			
			//ROW 1
//			Medicine code for Product Promtion
			
			$('#promPro').click(function(){
				$('.medicine').fadeOut('fast');
				$('#promoted1').fadeIn('fast');
			$('input[type="checkbox"]:checked').prop('checked',false);	
				$("#promoted1 input[name='ProCode']").click(function(){
					
					const box = [];
					$.each($("input[name='ProCode']:checked"), function(){
						box.push($(this).val());
						$('#promPro').val(box.join(', '));
					});
					
					
				});
			});

			
			
			$('.restInput').click(function(){
				$('#promoted1').fadeOut('fast');
				$('#prescribed1').fadeOut('fast');
			})
					
			
//		Medicine code for Product Prescribed
			$('#presPro').click(function(){
				$('.medicine').fadeOut('fast');
				$('#prescribed1').fadeIn('fast');
			$('input[type="checkbox"]:checked').prop('checked',false);	
				$("#prescribed1 input[name='ProCode']").click(function(){
					const box = [];
					$.each($("input[name='ProCode']:checked"), function(){
						box.push($(this).val());
						$('#presPro').val(box.join(', '));
					});
					
					
				});
			});
			
				
			
		//ready end:	
		});
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" 
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
crossorigin="anonymous"></script>
</body>
</html>

	<?php
	include('connection.php');
	
	if(!$connection){
		echo "<h3>You are not Connected</h3>";
	}
	$qry = mysqli_query($connection, "Select * from doctorlist");
	
//	 where name like 'Pra%'
	
	$result = mysqli_fetch_array($qry);
	
	function checkInput($data){
		htmlspecialchars($data);
		stripslashes($data);
		trim($data);
		return $data;
	}
	
	if(isset($_POST['submit'])){
		
		$query = mysqli_prepare($connection, "Insert into doctorlist (mr, name, specialty, place, phone, email, headquarter, qualification, dob, doma, remarks) values (?,?,?,?,?,?,?,?,?,?,?)");
		$mr = $_POST['mr'];
		$name = $_POST['drName'];
		$specl = $_POST['spec'];
		$place = $_POST['add'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$hq = $_POST['hq'];
		$qual = $_POST['qual'];
		$dob = $_POST['dob'];
		$doma = $_POST['doma'];
		$remarks = $_POST['remarks'];
		$query->bind_param('sssssssssss',$mr, $name, $specl, $place, $phone, $email, $hq, $qual, $dob, $doma, $remarks );
		$query->execute();
		
		
	}
	
	?>
	
	
	<!-- <div class="flex-container"> -->
	<div class="flex-container">
				<p class="formHead">Add Doctor</p>

			<form enctype="multipart/form-data" id="add-doctor" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

			<div class="inputForm">
			

			
				<div>
					<label class="add-doctor-label" for="mr">MR :</label>
					<input class="add-doctor-input" type="text" id="mr" name="mr" placeholder="Name of MR">
						
					<label class="add-doctor-label" for="hq">H.Q. :</label>
					<input class="add-doctor-input" type="text" id="hq" name="hq" placeholder="Head Quarter">
				
					<label class="add-doctor-label" for="drName">Name :</label>
					<input class="add-doctor-input" type="text" name="drName" id="drName" placeholder="Doctor's Name">
					<div class="pkj" id="pkj" style="background-color: white"></div>
		
					<label class="add-doctor-label" for="qual">Qualification :</label>
					<input class="add-doctor-input" type="text" name="qual" id="qual" placeholder="Qualification ">
					
					<label class="add-doctor-label" for="spec">Speciality :</label>
					<input class="add-doctor-input" type="text" name="spec" id="spec" placeholder="Speciality ">
				
					<label class="add-doctor-label" for="dob">D.O.B :</label>
					<input class="add-doctor-input" type="text" name="dob" id="dob" placeholder="Date of Birth ">
				
					<label class="add-doctor-label" for="doma">DOMA :</label>
					<input class="add-doctor-input" type="text" name="doma" id="doma" placeholder="DOMA ">	
			
					<label class="add-doctor-label" for="add">Address :</label>
					<input class="add-doctor-input" type="text" name="add" id="add" placeholder="Address">
				
					<label class="add-doctor-label" for="phone">Phone :</label>
					<input class="add-doctor-input" type="text" name="phone" id="phone" placeholder="Phone No. ">
			
					<label class="add-doctor-label" for="email">Email :</label>
					<input class="add-doctor-input" type="text" name="email" id="email" placeholder="email " >
				
					<label class="add-doctor-label" for="remarks">Remarks :</label>
					<input class="add-doctor-input" type="text" name="remarks" id="remarks" placeholder="Remarks " ><br>
				</div>

				<div class='submit-container'>

					<a href="index.php"><< Back To Homepage</a>
					
					<div class="submit-reset-div">
					
							<input class="add-doctor-submit" type="submit" name="submit" id="submit" value="Submit"><br>
							<input class="add-doctor-submit" type="reset" name="reset" id="reset" value="Reset"><br>
					</div>
		
				</div>
		
		</div>

		
</form>
			
	</div>
	<!-- </div> -->
	
	<script>
		
		$(document).ready(function(){
			
			$('#reset').click(function(){
				$('#addDoctor').reset();
			})
			
				
			$('#drName').keyup(function(){
				var nameInput = $(this).val();
				
				
				
				if(nameInput.length<2){
					$('#pkj').fadeOut().html('');	
				}
				
				if($('#mr').length>0){
					$('#pkj').fadeOut().html('');
				}
				
				
				if(nameInput.length >= 2){
					$('#pkj').fadeIn('fast');
					$.ajax({
					url:"myDoctorList.php",
					method : "POST",
					data:{drName : nameInput},
					success : function(data){
					$('#pkj').html(data);
					}
				});
				}
				
				$(document).on('click', '#pkj li', function(){
					
					$('#drName').val( $(this).text() );
					$('#pkj').fadeOut('fast');
					var nameInput = $('#drName').val();
					$.ajax({
					url : "myDoctorListRest.php",
					method : "POST",
					data:{drName : nameInput},
					dataType:"JSON",
					success : function(data){
					$('#mr').val(data.MR);
					$('#qual').val(data.Quali);
						$('#spec').val(data.Specialty);
						$('#hq').val(data.hquarter);
						$('#dob').val(data.DOB);
						$('#doma').val(data.DOMA);
						$('#add').val(data.Add);
						$('#phone').val(data.Phone);
						$('#email').val(data.email);
						$('#remarks').val(data.Remarks);
						
						
					}
				});
				});
				
			});
			
			
		});
	</script>

<script src="https://code.jquery.com/jquery-3.6.0.js" 
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
crossorigin="anonymous"></script> 

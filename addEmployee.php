<?php
if(!isset($_SESSION['type'])){
	session_start();
}

?>

<!-- <link href="css/addEmploye.css" rel="stylesheet"> -->

<?php

	include('connection.php');
	
	if(!$connection){
		echo "<h3>You are not Connected</h3>";
	}
	
	$qry = mysqli_query($connection, "Select * from user");
	
//	 where name like 'Pra%'
	
	$result = mysqli_fetch_array($qry);
	
	function checkInput($data){
		htmlspecialchars($data);
		stripslashes($data);
		trim($data);
		return $data;
	}
	
	if(isset($_POST['submit'])){
		
		$query = mysqli_prepare($connection, "Insert into user (name, user_id, password, type, headquarter) values (?,?,?,?,?)");
		$name = $_POST['name'];
		$user_id = $_POST['user_id'];
		$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
		$type = $_POST['type'];
		$headquarter = $_POST['hq'];
	
		$query->bind_param('sssis', $name, $user_id, $pass, $type, $headquarter);
		$query->execute();
		
		//header("Location:adminCheck.php");
	
	}
		
	?>

		<div class="add-emp-box">

		
			

				<div class="add-emp-form">

					<p class="formHead">Add Employees</p>

					<form enctype="multipart/form-data" id="addDoctor" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">

						<p>
							<label for="name">Name</label>
							<input type="text" id="name" name="name" placeholder="Name of Employee">
						</p>
						
						<p>
							<label for="user_id">User ID</label>
							<input type="text" name="user_id" id="user_id" placeholder="User ID">
						</p>

						<p>
							<label for="qual">Password </label>
							<input type="password" name="pass" id="pass" placeholder="Password ">
						</p>				
						
						<p>
							<label for="spec">Type </label>
							<input type="number" name="type" id="type" placeholder="Type ">
						</p>
					
						<p>
							<label for="hq">H.Q.</label>
							<input type="text" id="hq" name="hq" placeholder="Head Quarter">
						</p>

						<p>
							<label for="submit"></label>
							<button type="submit" name="submit">Submit</button>
						</p>

						<p>
						<label for="reset"></label>
						<button type="reset" name="reset">Reset</button>
						</p>

						<p>
							
							<a href="index.php"><< Back To Website</a>
						</p>
							





					</form>
				</div>
			
			
		</div>
		
		
			
		
		
	<script>
		$(document).ready(function(){
			
			$('#reset').click(function(){
				$('#addDoctor').reset();
			})
			
				
			$('#name').keyup(function(){
				var nameInput = $(this).val();
				
				
				
				if(nameInput.length<2){
					$('#pkj').fadeOut().html('');	
				}
			});
		});
	</script>
	
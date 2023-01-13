<?php
	$error = $user_id = $client_password = $loggerType = '';


	// Checking whether Submit button has been pressed
	
	if(isset($_POST['submit'])){
		$user_id = checkInput($_POST['user_id']);
		$client_password = $_POST['password'];
		$loggerType = $_POST['logger'];
		

		// Determing the role of Logger
		switch($loggerType){
			case "Admin" :
				$logType = 1;
				break;
				
			case "Medical Representative" :
				$logType = 3;
				break;
				
			case "Division Sales Manager" :
				$logType = 2;
				break;
			
		}
		
		
		
		// $connect = mysqli_connect('localhost', 'root', '', 'sldv')  or die("You're Not connected to any Database"); 
		// $connect = mysqli_connect('localhost', 'sldvlifesciences', 'Drewq5435678sd', 'sldv');
		// $connect = mysqli_connect('localhost', 'sldvlifesciences', 'pramod@sldv', 'sldv');
		// $connect = mysqli_connect('sql303.epizy.com', 'epiz_20236345', 'BGuU6Vdj', 'epiz_20236345_sldv') or die("You're Not connected to any Database");
		
		
			try{
				$connect = mysqli_connect('sql303.epizy.com', 'epiz_20236345', 'BGuU6Vdj', 'epiz_20236345_sldv');
			}
			catch(Exception $error){
	
				die("Could not connect with Database");
			}
			
		try{

			$stm = mysqli_prepare($connect, "select name, user_id, password, type, headquarter from user where user_id=?");
		}
		catch(Exception $e)	{
			die("Something wrong with Prepare statement!");
		}
		
		$stm->bind_param('s', $user_id);
		
		$stm->execute();
		
		$stm->bind_result($name, $user_id, $server_pass, $type, $headquarter);
		
		$stm->fetch();
		
		if(empty($stm)){
			$error = "Your UserID or Password is wrong!";
		}
		
		
		// Verifing entered password with saved in database
		$check_pass = password_verify($client_password, $server_pass);

		// If password is correct, creating session data for name and type
		if($check_pass){
			if(!isset($_SESSION['name'])) 
			{ 
				session_start(); 
			}
		
				$_SESSION['name'] = $name;
				$_SESSION['headquarter'] = $headquarter;
		}
		else{
			$error = "Your UserID or Password is wrong!";
		}
		
		
		
		if($error == '' ){

			$_SESSION['type'] = $logType;

		switch($logType){
			case 1:
				header("Location:adminCheck.php");
				break;
				
			case 2 :
				header("Location:dsm.php");
				break;
				
			case 3 :
				header("Location:mr.php");
			}
		}
		
		else{
			$error = "Your UserID or Password is wrong!";
		}
		
		$connect->close();
		 
	}
	  
	 function checkInput($data){
		 $data = htmlspecialchars($data);
		 $data = trim($data);
		 $data = stripslashes($data);
			 return $data;
	 }
		
	  
	
	?>
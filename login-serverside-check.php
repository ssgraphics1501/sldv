<?php
	error_reporting(E_ALL); 
	ini_set('display_errors', 1);
	$error = $user_id = $password = $loggerType = '';
	
	if(isset($_POST['submit'])){
		$user_id = checkInput($_POST['user_id']);
		$client_password = checkInput($_POST['password']);
		
		$loggerType = checkInput($_POST['logger']);
		
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
		
		//echo '<span style="color:white">'.$type.'</span>';
		
		$connect = mysqli_connect('localhost', 'root', '', 'sldv'); 
		// $connect = mysqli_connect('localhost', 'sldvlifesciences', 'Drewq5435678sd', 'sldv');
		// $connect = mysqli_connect('localhost', 'sldvlifesciences', 'pramod@sldv', 'sldv');
		// $connect = mysqli_connect('fdb25.awardspace.net', '2980236_pramod', 'seema.pihu1971', '2980236_pramod');
		
		
		if(!$connect){
			die('You are NOT Connected!');
			
		}
		
		if ($connect -> connect_errno) {
  die("Failed to connect to MySQL: " . $mysqli -> connect_error);
  exit();
}
			
		$stm = mysqli_prepare($connect, "select name, user_id, type, headquarter, password from user where user_id=?");
		
		$stm->bind_param('s', $user_id);
		
		$stm->execute();
		
		$stm->bind_result($name, $user_id, $type, $headquarter, $server_password);
		
		
		
		$stm->fetch();

		$pass_result = password_verify($client_password, $server_password);

		if($pass_result){

			if(!isset($_SESSION['name'])) 
			{ 
				session_start(); 
			}
		   
		   $_SESSION['name'] = $name;
		   $_SESSION['headquarter'] = $headquarter;
		   $_SESSION['type'] = $type;
			
		}
		
		
		else{
			$error = "Your UserID or Password is wrong!";
		}
		
       
		
		
		
		if(empty($stm)){
			$error = "Your UserID or Password is wrong!";
		}

            if($logType === $type ){
                
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

}
	  
	 function checkInput($data){
		 $data = htmlspecialchars($data);
		 $data = trim($data);
		 $data = stripslashes($data);
			 return $data;
	 }
		
	  
	
?>
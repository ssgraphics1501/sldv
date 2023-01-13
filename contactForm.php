	<?php
	// require_once 'PHPMailer/Exception.php';
	// require_once 'PHPMailer/PHPMailer.php';
	// require_once 'PHPMailer/SMTP.php';

	require_once 'vendor/autoload.php';
	require_once 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require_once 'vendor/phpmailer/phpmailer/src/SMTP.php';
	require_once 'vendor/phpmailer/phpmailer/src/Exception.php';
	
	$name = checkInput($_POST['name']);
	$mobile = checkInput($_POST['mobile']);
	$email = checkInput($_POST['email']);
	$visitorMessage = checkInput($_POST['urMessage']);
	
	$message = '<b>NAME : </b>'. $name . '<br>';
	$message .= '<b>MOBILE : </b>'. $mobile . '<br>';
	$message .= '<b>EMAIL : </b>'. $email . '<br>';
	$message .= '<b>MESSAGE : </b>'. $visitorMessage . '<br>';

	
	
	
	try{

//Server settings
$mail = new PHPMailer\PHPMailer\PHPMailer(true);
$mail->SMTPDebug = 1;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'pramod.dilip@gmail.com';                     //SMTP username
$mail->Password   = 'kqmncawlvxvowksa';                               //SMTP password
$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
$mail->Port       = 587;              //TCP port to connect to; use 587 if you have 


$mail->setFrom($email, $name);
$mail->addAddress('ssgraphics1501@gmail.com','SS Graphics');
$mail->addCC('pramod.dilip@gmail.com','Dilip Kumar Jha');
$mail->addReplyTo($email, $name);
$mail->msgHTML($message);
$mail->Subject = 'Feedback/Questions from Visitor on sldv website';
$mail->send();
if($mail){

	header("Location:index.php");
}
	}
catch(phpmailerException $e){
	echo $e->errorMessage();
}
catch(Exception $e){
	echo $e->getMessage();
}
	
	function checkInput($data){
		 $data = htmlspecialchars($data);
		 $data = trim($data);
		 $data = stripslashes($data);
			 return $data;
	 }
	?>

<!doctype html>
<html>
<head>
	<title>SLDV Life Sciences | Daily Report</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<meta name="keywords" content="SLDV Life Sciences, Life Sciences, SLDV" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	 <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
	<link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
    <!-- online-fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
	
	<style>
		*{
			padding: 0;
			margin: 0;
		}
		::placeholder{
			color: lightgray;
		}
		
		
		.flex-container{
			display: flex;
			background-color: darkcyan;
			padding: 10px;
			flex-direction: column;
			justify-content: center;
			align-items: center;
	}
		
	.flex-container div	{
		justify-content: center;
		align-items: center;
		width: 96.2%;
		display: flex;
		margin-top: 5px;
		}
		
		.button-flex{
			width: 100vw;
			display: flex;
			padding: 10px;
			justify-content: center;
			align-items: center;
		}
		
		table td{
			border-color: lightgray;
			padding: 3px;
		}	
		
		
		
		table th{
			border-color: lightgray;
			padding: 1px;
			color: white;
			text-align: center;
			font-size: 1em;
		}
		
		input{
			height: 30px;
			width: 17vw;
		}
		
		.button{
			background: red; 
			padding: 5px;
			width: 100px;
			color: white
		}
		
		.button:hover{
			background: white;
			cursor: pointer;
			color: black;
			border: solid yellow 1px;
		}
	
		table td:first-child{
			width: 10vw;
			text-align: center;
			color: white;
		}
		
		@media only screen and (max-width:400px){
			.flex-container{
			display: flex;
			background-color: darkcyan;
			padding: 10px;
			flex-direction: column;
			justify-content:flex-start;
			align-items: flex-start;
	}
		
	.flex-container div	{
		justify-content:flex-start;
		align-items:flex-start;
		width: 50%;
		display: flex;
		margin-top: 100px;
		}
		
		}
		
		.dReport{
			width: 200%;	
		}
		
		.dReport label{
			width: 8%;
			color: white;
		}
		
		.dReport input[type=text]{
			width: 80%;
	}
		
		.css-serial {
  counter-reset: serial-number;  /* Set the serial number counter to 0 */
}

.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Increment the serial number counter */
  content: counter(serial-number);  /* Display the counter */
}
		
	</style>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src="https://m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>

<meta name="robots" content="noindex">
</head>

<body>
	 <!-- header -->
<!--
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="form/index.html">
                     <img src="images/logo.png"  />
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="form/index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="form/about.html">About</a>
                        </li>
                        
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="form/gallery.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form/contact.html">Contact</a>
                        </li>
                         <li>           
                         <a class="btn  ml-lg-2 w3ls-btn" style="color:Black;" href="form/login/Default.php">Login</a>
                           </li>
                    </ul>
                </div>
            </nav>
        </header>
-->
 <!-- main image slider container -->
	
	<?php
	error_reporting(E_ALL); 
ini_set('display_errors', 1);
	?>
	
	
	<div class="flex-container">
		
		<div>
			<form enctype="multipart/form-data" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		
			<div class="dReport">
				<label for="mr">MR : </label><input type="text" name="mr" id="mr" placeholder="Name of MR">
				 <label for="hq" >H.Q. : </label><input type="text" name="hq" id="hq" placeholder="Headquarter">
			</div>	
			<br>
<br>

				<table border="solid 1px" style="border-collapse: collapse; width: 95%; overflow-x: auto" class="css-serial">
			<tr>
				<th>Sr. No.</th>
				<th>Doctor Name </th>
				<th>Product Promoted </th>
				<th>Product Prescribed </th>
				<th>POB </th>
				<th>Remarks </th>
				
			</tr>
			
			<tr>
				<td></td>
				<td><input type="text" name="drName[]" placeholder="Doctor's Name"></td>
				<td><input type="text" name="prProm[]" placeholder="Products Promoted "></td>
				<td><input type="text" name="prPres[]" placeholder="Products Prescribed "></td>
				<td><input type="text" name="POB[]" placeholder="POB "></td>
				<td><input type="text" name="remarks[]" placeholder="Remarks "></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="text" name="drName[]" placeholder="Doctor's Name"></td>
				<td><input type="text" name="prProm[]" placeholder="Products Promoted "></td>
				<td><input type="text" name="prPres[]" placeholder="Products Prescribed "></td>
				<td><input type="text" name="POB[]" placeholder="POB "></td>
				<td><input type="text" name="remarks[]" placeholder="Remarks "></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="text" name="drName[]" placeholder="Doctor's Name"></td>
				<td><input type="text" name="prProm[]" placeholder="Products Promoted "></td>
				<td><input type="text" name="prPres[]" placeholder="Products Prescribed "></td>
				<td><input type="text" name="POB[]" placeholder="POB "></td>
				<td><input type="text" name="remarks[]" placeholder="Remarks "></td>
			</tr>

					
			<tr>
				<td></td>
				<td><input type="text" name="drName[]" placeholder="Doctor's Name"></td>
				<td><input type="text" name="prProm[]" placeholder="Products Promoted "></td>
				<td><input type="text" name="prPres[]" placeholder="Products Prescribed "></td>
				<td><input type="text" name="POB[]" placeholder="POB "></td>
				<td><input type="text" name="remarks[]" placeholder="Remarks "></td>
			</tr>
	
			<tr>
				<td></td>
				<td><input type="text" name="drName[]" placeholder="Doctor's Name"></td>
				<td><input type="text" name="prProm[]" placeholder="Products Promoted "></td>
				<td><input type="text" name="prPres[]" placeholder="Products Prescribed "></td>
				<td><input type="text" name="POB[]" placeholder="POB "></td>
				<td><input type="text" name="remarks[]" placeholder="Remarks "></td>
			</tr>

					
			<tr>
				<td></td>
				<td><input type="text" name="drName[]" placeholder="Doctor's Name"></td>
				<td><input type="text" name="prProm[]" placeholder="Products Promoted "></td>
				<td><input type="text" name="prPres[]" placeholder="Products Prescribed "></td>
				<td><input type="text" name="POB[]" placeholder="POB "></td>
				<td><input type="text" name="remarks[]" placeholder="Remarks "></td>
			</tr>

			
		</table>
		
			
		</div>
			</div>
		<div class="button-flex">
			<div>	<button class="button" type="submit" name="submit" id="submit">Submit</button></div>
		</div>
		
	</form>
	
	
	
	<?php
	date_default_timezone_set("Asia/Kolkata");
	if(isset($_POST['submit'])){
		$mrName = $_POST['mr'];
		$hquarter = $_POST['hq'];
		$doctorName = $_POST['drName'];
		$productPromoted = $_POST['prProm'];
		$productPrescribed = $_POST['prPres'];
		$pob = $_POST['POB'];
		$remarks = $_POST['remarks'];
		
		
		$table = '<b>Name of MR : </b>'.$mrName.' <span style="color:red">::</span>   <b>Headquarter : </b>'.$hquarter.'<br>';
		$table .= '<table style="border:solid black 1px; border-collapse: collapse;"><tr><th style="padding:10px">Name</th><th style="padding:10px">Product Promoted</th><th style="padding:10px">Product Prescribed</th><th style="padding:10px">POB</th><th>Remarks</th></tr>';
		
		for($i=0;$i<6;$i++){
			$table .= '<tr>';
		$table .= '<td style="padding:10px">'.$doctorName[$i].'</td>';
		$table .= '<td style="padding:10px">'.$productPromoted[$i].'</td>';
		$table .= '<td style="padding:10px">'.$productPrescribed[$i].'</td>';
		$table .= '<td style="padding:10px">'.$pob[$i].'</td>';
		$table .= '<td style="padding:10px">'.$remarks[$i].'</td>';
			$table .= '</tr>';
		}
		
		$table .= '</table>';
		
		require_once __DIR__ . '/vendor/autoload.php';
		define('_MPDF_TTFONTDATAPATH', sys_get_temp_dir()."/");
		
	$mpdf = new \Mpdf\Mpdf();
		$mpdf->simpleTables = false;
$mpdf->WriteHTML($table);
		
		$date = date("d-m-y_h-i-s");
		$filename = $mrName.$date;
		
		
$mpdf->Output('pdf/'.$filename . '.pdf', \Mpdf\Output\Destination::FILE);
		
		
		//require_once('form/class.phpmailer.php');
		include('form/class.phpmailer.php');
		$email = 'ssgraphics1501@gmail.com';
		$message = "<h1>Daily Report</h1>";
		
		try{
$mail = new PHPMailer();
$mail->setFrom($email,$mrName);
$mail->addAddress('pramod.dilip@gmail.com','Dilip Kumar Jha');

$mail->AddAttachment('pdf/'.$filename . '.pdf');

$mail->addReplyTo($email,$mrName);
$mail->msgHTML($message);
$mail->Subject = 'Feedback from MR';
$mail->send();
if($mail){
echo 'Mail has been sent';

}
}
catch(phpmailerException $e){
	echo $e->errorMessage();
}
catch(Exception $e){
	echo $e->msgHTML();
}
		
}
	?>
	
	
	
</body>
</html>
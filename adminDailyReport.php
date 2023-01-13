<?php 
session_start() ;
$type = $_SESSION['type'];

if($type !== 1){
	header("Location:login.php");
}

$active = 'Admin';
include('header.php'); 
include('adminAction.php');
?>
<!--	INCLUDING OUTER PHP FILE-->		
		<div id="adminShow">
<?php

include('c_daily_report.php');
?>
		</div>	
		<?php
			include('footer.php');
			?> 

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
			
 	
	

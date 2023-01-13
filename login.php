<?php include('login-serverside.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/7776537971.js" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
    <style>
        html{
            min-height: 100%;
        }
        
    </style>
</head>

<body class="default-page-body">


 

	<!-- Child 1 of body -->
        <h1 class="user-login-text"> User Login </h1><br>

    <!-- Defaul-page-box starts here | Child 2 of body  -->
        <div class="default-page-box">
        
            <div class="login-form-parent">
    
            <!-- LOGIN-FORM DIV START HERE -->
                <div class="login-form">
                    <!-- <h2 class="center"> Login Here </h2>
                    <p class="center">Registered user login here as selected  type of user.</p> -->
                    
                    
                    <form id="frm" method="post" enctype="multipart/form-data" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> ">

                 
      
                     
<!--	Logger Type-->
						<div class="userType">
                        <label for="logger" class="default_label center">Select:</label>
                        <select name="logger" id="logger" class="default_input">
                            <option value="Admin">Admin</option>
                            <option value="Division Sales Manager">Division Sales Manager</option>
                            <option value="Medical Representative">Medical Representative</option>
                        </select>
						</div>
  <br><br>

                        
<!--User ID-->
					
                            <div class="userId">
                                <label for="user_id" class="default_label font-3 center"><i class="fa-solid fa-user"></i></label>
                                <input type="text" name="user_id" id="user_id" placeholder="User ID" required class="default_input"/>
                                
                            </div>
                            <br><br>
			
<!--Password					-->
					
                            <div class="password">
                                <label for="password" class="default_label font-3 center"><i class="fa-solid fa-key"></i></label>
                                <input type="password" name="password" id="upass"  placeholder="Password"  required class="default_input"/>
                            </div>
                            <br><br>
                                


                            <div style="color: white; padding: 1px">
                            <?php 
                            
                            echo $error; 
                            ?>
                        </div>

                    
<!--Submit					-->
                        
                            <button name="submit" class="login-submit-btn">Log In</button><br><br>
                        

                        <a href="index.php"><< Back To Website</a>
					
                </form>
            </div>
            <!-- LOGING-FORM DIV END ABOVE -->

                        <div class="lock">
                            <img src="images/lgin.jpg" width="100%" alt="">
                        </div>

            
           
        </div>
        <!-- login-form-parent ends above -->

        </div>
        <!-- default-page-box ends above -->


        <!-- Child 3 of body -->

        <div class="white">
        <br><br>
           
                © 2019 SLDV Life Sciences. All Rights Reserved | Designed by
                <a href="http://pramodjha.epizy.com/" target="_blank" class="pramod">Pramod Jha</a>
            
        </div>
       

</body>

</html>











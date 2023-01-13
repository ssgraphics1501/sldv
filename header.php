<?php
    if(!isset($_SESSION['type']))
     { 
         session_start(); 
		
     }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SLDV Life Sciences | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="SLDV Life Sciences, Life Sciences, SLDV" />
    <link href="css/style.css" rel="stylesheet">
    

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7776537971.js" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" 
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
crossorigin="anonymous"></script>

<link rel="icon" type="image/x-icon" href="images/favicon.ico">
   
</head>

<body>

<header>
     
            <nav class="main-nav">

                <div class="logo-div">
                <a class="" href="index.php">
                     <img src="images/logo.png"  />
                    </a>
                </div>
             <!-- PHP Code -->
               <?php 
      
      if(isset($_SESSION['type'])){
          $type = $_SESSION['type'];

       

      }else{
          $type = false;
      }
          if($type == 1){

              echo '<h2>';
              echo '<a href=' . '"adminCheck.php"' . 'class="header-dashboard"' .'>';
              echo 'Admin Dashboard' . '</a>' . '</h2>';
          
          }elseif($type == 2){
              
              echo '<h2>' . '<a href=' . '"dsm.php"' . 'class="header-dashboard">' 
              . $_SESSION['name'] . '<br><h5>Dashboard</h5></a></h2>';
          }

          elseif($type == 3){
              
              echo '<h2>' . '<a href=' . '"mr.php"' . 'class="header-dashboard">' 
              . $_SESSION['name'] . '<br><h5>Dashboard</h5></a></h2>';
          }

          if(isset($_POST['logOut'])){
            session_destroy();
            header("Location:index.php");
        }
              ?>
                    
                    <!-- DIV-BAR FOR SMALLER SCREEN -->

                    <div class="menu-bar-icon white">
                <i class="fa-solid fa-bars"></i>
                </div>

                    <!-- class="main-menu"       -->
                
                    <ul class="main-nav-menu">
                        <li>
                            <a class="nav-anchor <?php if(isset($active)){ if($active == 'Home'){echo 'active';}else{echo '';}} ?>" href="index.php">Home</a>
                        </li>
                        <li class="">
                            <a class="nav-anchor <?php if(isset($active)){ if($active == 'About'){echo 'active';}else{echo '';}} ?>" href="about.php">About</a>
                        </li>
                        
                        <li class="">
                            <a class="nav-anchor <?php if(isset($active)){ if($active == 'Products'){echo 'active';}else{echo '';}} ?> " href="products.php">Products</a>
                        </li>
                        <li class="  ">
                            <a class="nav-anchor <?php if(isset($active)){ if($active == 'Contact'){echo 'active';}else{echo '';}} ?>" href="contact.php">Contact</a>
                        </li>

                            <?php
                                    if($type == 1 || $type == 2 || $type == 3){
                                       
                                      echo '<li name="logOut">';
                                      echo '<a class="nav-anchor login-button"'; 
                                      echo 'style="color:Black;" href="logout.';
                                      echo 'php">Logout</a>';
                                      echo '</li>';

                                    // echo $type;

                                    }else{

                                    echo  '<li>';
                                    echo '<a class="nav-anchor login-button"'; 
                                    echo 'style="color:Black;" href="login.';
                                    echo 'php">Login</a>';
                                    echo '</li>';

                                    // echo 'False';

                                    }

                            ?>

                        
                    </ul>
                
            </nav>

           

        </header>

        <script>
            $(document).ready(function () { 
                $('.menu-bar-icon').click(function(){
                    $('.main-nav-menu').toggle();
                    
                })
             })
        </script>         
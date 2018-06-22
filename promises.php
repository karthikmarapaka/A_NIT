<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['email_s']))
        {   $email_p=$_SESSION['email_s'];
        } 
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['s_no_s']))
        {   $s_no_p=$_SESSION['s_no_s'];
        } 
        else
        {
            header('location: login.php');
        }

if(isset($_SESSION['first_name_s']))
        {
            $first_name_p=$_SESSION['first_name_s'];
            
        }
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['reg_no_s']))
        {
            $reg_no_p=$_SESSION['reg_no_s'];
            
        }
        else
        {
            header('location: login.php');
        }
?>
<html>
     
<!-- Mirrored from personala.bitballoon.com/light.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 May 2018 09:57:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
       
        <title>Promises | A_NIT</title>
         <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <script type="text/javascript" src="bootstrap\js\jquery-3.2.1.min.js">
        </script>
        <script type="text/javascript" src="bootstrap\js\bootstrap.min.js">
            </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo3.png" />
         <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <style type="text/css">
            .background{
                background: url(img/background_22.png) no-repeat center center fixed;
                background-size:cover;
            }
                   
            .parent{
                   overflow:hidden;
                   }
            .left{
                background-color:rgba(178,190,181,.1);
                border-radius:3%;
                overflow-y:scroll;
                  }
            .right{
                    background-color:rgba(178,190,181,.1);
                    border-radius:3%;
                  }
                  ::-webkit-scrollbar { 
    display: none; 
}
            
     </style>
        
    </head>
    
    <body class="background">
        <?php include "navigation_bar.php"; ?>
        <br><br><br><br>
        <div class="container">
            <center><h2><u>Promises and Achievements of Student Council</u></h2></center>
            <br>
            <div class="row">
                <span class="parent">
            <div class="left col-lg-offset-1 col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-5 col-md-5 col-sm-10 col-xs-10" style="height:70vh;">
                <center><h3><u>Promises</u></h3></center>
                
                <?php 
                $p1="SELECT * FROM panda WHERE type='p'";
                $pq=mysqli_query($a,$p1);
                while($pqr=mysqli_fetch_array($pq)){
                    echo '<h6 class="glyphicon glyphicon-plus"></h6>'.' '.$pqr[1];
                    echo '<br><br>';
                }
                ?>
            </div>
                    </span>
            <div class="right col-lg-offset-0 col-md-offset-0 col-xs-offset-1 col-sm-offset-1 col-lg-5 col-md-5 col-sm-10 col-xs-10" style="height:auto;">
               <center><h3><u>Achievements</u></h3></center>
               <?php 
                $q2="SELECT * FROM panda WHERE type='a'";
                $pd=mysqli_query($a,$q2);
                while($pde=mysqli_fetch_array($pd)){
                    echo '<span class="glyphicon glyphicon-plus"></span>'.$pqr[1];
                    echo '<br><br>';
                }
                ?>
            </div>
        </div>
            </div>
        <br><br>
        <?php include "footer.php"; ?>
        
    </body>
</html>
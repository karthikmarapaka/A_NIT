<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['email_s']))
        {   $email_w=$_SESSION['email_s'];
        } 
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['s_no_s']))
        {   $s_no_w=$_SESSION['s_no_s'];
        } 
        else
        {
            header('location: login.php');
        }

if(isset($_SESSION['first_name_s']))
        {
            $first_name_w=$_SESSION['first_name_s'];
            
        }
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['reg_no_s']))
        {
            $reg_no_w=$_SESSION['reg_no_s'];
            
        }
        else
        {
            header('location: login.php');
        }
?>
<html>
    <head>
       
        <title>Projects | A_NIT</title>
         <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <script type="text/javascript" src="bootstrap\js\jquery-3.2.1.min.js">
        </script>
        <script type="text/javascript" src="bootstrap\js\bootstrap.min.js">
            </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
         <link rel="shortcut icon" href="img/logo3.png"/>
          <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <style type="text/css">
            .background{
                background: url(img/background_15.jpg) no-repeat center center fixed;
                background-size:cover;
            }
            .bg{
                
                background-color:rgba(255,255,0,0.5);
                border:1px solid white;
                
            }
            
            .team{
               color:white;
            }
            
            #num,#num2{
                display:none;
            }
            
        </style>
       
    </head>
    
    <body class="background" style="overflow-x:hidden;">
        <?php include "navigation_bar.php"; ?>
        <br><br><br><br>
        
                
        
        <?php 
        $rp="SELECT * FROM projects WHERE status_r='completed'";
        $rq=mysqli_query($a,$rp);
        while($rr=mysqli_fetch_array($rq))
        {
            
        ?>
        
        
        <div class='container'>
        <div class='bg'>
            <center><h2 style="color:white; background-color:rgba(0,128,0,0.5); padding:3vh 0vw; margin:0px 0px 0px 0px;"><?php echo $rr[1];?></h2></center>
            <br> 
            <div class="body" style="margin:0px 0px 0px 0px;"><div class="team"><?php echo $rr[2];?></div>
                <br>
           
            <div class='ab'><?php echo $rr[6];?></div><br>
            <div class='ex'><?php echo $rr[7];?></div><br>
            <div class="ts" style="color:white;"><?php echo $rr[9];?>        <br>
            </div>
           
            
        </div>
        </div></div>
        <br><?php
        }
        ?>
             
        <br><br>
       
        <?php include "footer.php"; ?>
        
    </body>
</html>

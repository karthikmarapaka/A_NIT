<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);
include "connect.php";
if(isset($_SESSION['email_s']))
        {   $email_c=$_SESSION['email_s'];
        } 
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['s_no_s']))
        {   $s_no_c=$_SESSION['s_no_s'];
        } 
        else
        {
            header('location: login.php');
        }

if(isset($_SESSION['first_name_s']))
        {
            $first_name_c=$_SESSION['first_name_s'];
            
        }
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['reg_no_s']))
        {
            $reg_no_c=$_SESSION['reg_no_s'];
            
        }
        else
        {
            header('location: login.php');
        }
?>
<html>
    <head>
       
        <title>Complaint Box | A_NIT</title>
         <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <script type="text/javascript" src="bootstrap\js\jquery-3.2.1.min.js">
        </script>
        <script type="text/javascript" src="bootstrap\js\bootstrap.min.js">
            </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
         <link rel="shortcut icon" href="img/logo3.png"/>
          <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <style type="text/css">
            .background{
                background: url(img/background_37.jpg) no-repeat center center fixed;
                background-size:cover;
            }
        </style>
       
    </head>
    
    <body class="background" style="overflow-x:hidden;">
        <?php include "navigation_bar.php"; ?>
        <br><br><br><br>
        
                 
    <center><h2 style="color:orangered;">Categories</h2></center>
    <br>
        <div class="row">
            <div class="col-lg-offset-2 col-lg-3 col-md-offset-2 col-md-3 col-xs-offset-1 col-xs-5 col-sm-offfset-1 col-sm-5">
               <a href="ragging_complaint.php" style="text-decoration:none;color:black;">
                <button class="btn btn-group-justified">
                    
                        Ragging  </button>
                    </a>
              
            </div>
             <div class="col-lg-offset-2 col-lg-3 col-md-offset-2 col-md-3  col-xs-5  col-sm-5">
                <a href="mess_complaint.php" style="text-decoration:none;color:black;">
                 <button  class="btn btn-group-justified">
                    
                        Mess Issues</button>
                    </a>
                
            </div></div>
    <br>
    <div class="row">
             <div class="col-lg-offset-2 col-lg-3 col-md-offset-2 col-md-3 col-xs-offset-1 col-xs-5 col-sm-offfset-1 col-sm-5">
                <a href="college_complaint.php" style="text-decoration:none;color:black;">
                 <button  class="btn btn-group-justified">
                   
                        College Maintenance  </button>
                    </a>
              
            </div>
             <div class="col-lg-offset-2 col-lg-3 col-md-offset-2 col-md-3 col-xs-5 col-sm-5">
              <a href="hostel_complaint.php" style="text-decoration:none;color:black;">
                 <button class="btn btn-group-justified">
                    
                        Hostel Maintenance </button>
                    </a>
               
            </div>
        </div>
        <br>
        <div class="container"><hr></div><br>
        <div class="container" style='color:red;'>
            <ul>
                <li>Identity of Students who give compliants about ragging will never be revealed(Anonymous).</li>
                <br>
                
                <li>Complaints about mess, college maintenance and hostel maintenance can be given either public or anonymous.</li>
                <br>
                <li>However your identity will not revealed in the website.</li>
                <br>
                <li>If you give complaint anonymous, your complaint will be deleted by Authorities upon completion of work.</li>
                <br>
                <li>If you give complaint public, you can put the complaint in website till work is completed(Not for Ragging).</li>
            <br>
            <li> Please delete your complaint your after work is done(Not for Ragging).</li>
            <br>
            <li> Please don't spam this Complaint Box.</li>
            </ul>
        </div>
        <br>
        <br>
        <?php include "footer.php"; ?>
        
    </body>
</html>

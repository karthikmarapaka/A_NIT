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
            $sqla= "SELECT password FROM my_account WHERE reg_no='$reg_no_a'";
            if($result=mysqli_query($a,$sqla))
            {
                $row=mysqli_fetch_row($result);
            }
        }
        else
        {
            header('location: login.php');
        }
?>
<html>
    <head>
        <title>Change Password | My Account | A_NIT</title>
         <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <script type="text/javascript" src="bootstrap\js\jquery-3.2.1.min.js">
        </script>
        <script type="text/javascript" src="bootstrap\js\bootstrap.min.js">
            </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
          <link rel="shortcut icon" href="img/logo3.png" />
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Josefin+Slab" rel="stylesheet">
     <style type="text/css">
            .background{
                background: url(img/nit_lightings.jpg) no-repeat center center fixed;
                background-size:cover;
                
            }
            .animate {
            -webkit-animation: animatezoom .8s;
            animation: animatezoom .8s
        }

        @-webkit-keyframes animatezoom 
        {
         from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
            }
    
        @keyframes animatezoom {
        from {transform: scale(0)} 
            to {transform: scale(1)}
                }
        </style>
    </head>
    <body class="background" style="overflow-x:hidden;">
        <?php include "navigation_bar.php"; ?>
        <br>
        <br>
        <div class="container kar5">
            <div class="row kar1">
                <center><div> 
                <a href="#">
                    <img src="img\1.png" alt="LOGO">
                </a>
            </div>
                </center>
            </div>
            <br>
            
            <div class="row">
                <div class="col-md-offset-2 col md-8 col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6 col-sm-offset-2 col-sm-8">
            <div class="panel panel-primary animate">
                <div class="panel-heading">
                    <center>
                        <h3 class="kar2">
                        NIT Warangal
                       </h3>
                        </center>
                </div>
                <div class="panel-body">
                    <center><h4 class="text-warning"> 
                        Change Password
                    </h4></center>
                    <form method="post" action="change_password.php" enctype="multipart/form-data" autocomplete="on">
                        <div class="form-group">
                            <input type="password" placeholder="Old Password" name="old_password" class="form-control" required autocomplete="off">
                            </div>
                        <div class="form-group">
                            <input type="password" placeholder="New Password" name="new_password1" class="form-control" required autocomplete="off">
                            </div>
                        <div class="form-group">
                            <input type="password" placeholder="Retype New Password" name="new_password2" class="form-control" required autocomplete="off">
                            </div>
                        <?php
                       $message="";
if($_SERVER['REQUEST_METHOD']=='POST')
    {  
                $b=mysqli_real_escape_string($a,$_POST['old_password']);
                $t=mysqli_real_escape_string($a,$_POST['new_password1']);
                $c=mysqli_real_escape_string($a,$_POST['new_password2']);
                        $sqla= "SELECT password,first_name FROM my_account WHERE reg_no='$reg_no_c'"; 
                         $result=mysqli_query($a,$sqla);
                         $row=mysqli_fetch_array($result);
                         if($b==$row[0])
                         {             if($t==$c){
                             
                         
                $q ="UPDATE my_account SET password='$c' WHERE reg_no='$reg_no_c'" or die("insertionerror".$q);
                          if($sr=mysqli_query($a,$q))
                                  { 
                                      $message="Password changed successfully";
                                        echo '<div class="alert alert-danger">';
                                        echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                         echo $message;        
                                              echo '</div>';
                                                      }
                                                else
                                              {
                                                   $message="Error updating password. Please try again.";
                                                      echo '<div class="alert alert-danger">';
                                                      echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                      echo $message; 
                                                      echo '</div>';
                                               }
                         } else {
                              $message="Passwords did not match. Please try again.";
                                        echo '<div class="alert alert-danger">';
                                        echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                         echo $message;        
                                              echo '</div>';
                         }
                         
                                              }
                        else
                    {
                            $message="Old Password is not correct. Please try again.";
                                        echo '<div class="alert alert-danger">';
                                        echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                         echo $message;        
                                              echo '</div>';
                    }
                               
                    }
          
?>
                       <div class="form-group">
                             <center>
                            <button class="btn btn-primary">
                              Submit
                             </button>
                            </center>
                    </div>
                    </form>
                    
                </div>
                
            </div>
                </div>
                </div>
            </div>
        <?php include "footer.php"; ?>
    </body>
</html>
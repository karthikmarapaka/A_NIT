<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);
 include "connect.php";
?>
<html>
    <head>
        <title>Login | A_NIT</title>
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
                background: url(img/background_14.jpg) no-repeat center center fixed;
                background-size:cover;
            }
            body{
                 font-size:90%;
            }
        </style>
        
    </head>
    <body class="background" style="overflow-x:hidden">
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
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center>
                        <h3 class="kar2">
                        NIT Warangal
                       </h3>
                        </center>
                </div>
                <div class="panel-body">
                    <center><h4 class="text-warning"> 
                        Login to your account
                    </h4></center>
                    <form method="post" action="login.php" enctype="multipart/form-data" autocomplete="on">
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control" required autocomplete="on">
                            </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control" required autocomplete="off">
                            </div>
                        <?php
                        
       
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $g1=mysqli_real_escape_string($a,$_POST['email']);
            $g2=mysqli_real_escape_string($a,$_POST['password']);
            $sql ="SELECT email,password,first_name,s_no,reg_no FROM my_account WHERE email='$g1' and password='$g2'" ;
            if($result=mysqli_query($a,$sql))
            {
            $row=mysqli_fetch_array($result); 
             if($row[0]==$g1 && $row[1]==$g2)
                 {  $_SESSION['first_name_s']=$row[2];
                    $_SESSION['email_s']=$row[0];
                    $_SESSION['s_no_s']=$row[3];
                    $_SESSION['reg_no_s']=$row[4];
                 header("location: index.php");
                 }
                else
                        {
                            echo '<div class="alert alert-danger">';
                            echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                             echo 'Email and Password are not matched. Please try agian'; 
                             echo '</div>';
                         }
            }
                
       }
        mysqli_close($a);
        ?>
                        <div class="form-group">
                          
                        <center>
                            <button class="btn btn-primary">
                              Login
                             </button>
                            </center>
                    </div>
                    </form>
                    
                </div>
                <div class="panel-footer">
                    <div class="row" style="font-size:90%;">
                        <div class="col-lg-4 col-sm-5 col-xs-6 col-md-6">
                        Forgot Password? <a href="forgot_password.php">Click Here</a>
                        </div>
                        <div class="col-lg-offset-8 col-sm-offset-7 col-md-offset-7 col-xs-offset-6">
                        Not a member yet? <a href="signup.php">Click Here</a>
                    </div>
                        </div>
                </div>
            </div>
                </div>
                </div>
            </div>
            <?php include "footer.php"?>
                    
    </body>
</html>


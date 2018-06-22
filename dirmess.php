<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['email_s']))
        {   $email_d=$_SESSION['email_s'];
        } 
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['s_no_s']))
        {   $s_no_d=$_SESSION['s_no_s'];
        } 
        else
        {
            header('location: login.php');
        }

if(isset($_SESSION['first_name_s']))
        {
            $first_name_d=$_SESSION['first_name_s'];
            
        }
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['reg_no_s']))
        {
            $reg_no_d=$_SESSION['reg_no_s'];
           
        }
        else
        {
            header('location: login.php');
        }
?>
<html>
    <head>
       
        <title>DIrector's Messsage | A_NIT</title>
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
            
        </style>
        
    </head>
    
    <body class="background" style="overflow-x:hidden;">
        <?php include "navigation_bar.php"; ?>
        <br><br><br><br>
        <div class="container">
        <div class="jumbotron">
            
            <form>
                                   <center>Director's Message to Students</center>
                            <br>
                                                     <?php                                         
                $q ="SELECT * FROM director_message";
                          if($sr=mysqli_query($a,$q))
                                {                                     
                    while($row=mysqli_fetch_array($sr))
                {
                ?>
            <div class="row">
                <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"><?php echo "$row[0]"; ?></div>
                <div class="col-md-11 col-lg-11 col-sm-11 col-xs-11"> 
               
                    <textarea name="director_message" readonly rows="10" class="form-control"><?php echo $row[1]; ?></textarea>
              
                </div>
                       </div>
                            <hr>
                <?php                     }                                 
                                                                                    
                                       }
                         ?>
                                         
                            </form>
        
            </div>
        </div>    
        <br><br><br>
        <?php include "footer.php"; ?>
       
    </body>
</html>

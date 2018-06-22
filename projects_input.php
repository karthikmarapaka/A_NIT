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
       
        <title>Submit project details | A_NIT</title>
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
        </style>
        
    </head>
    
    <body style=" height:100%; width:100%;" class="background">
        
       <?php include "navigation_bar.php"; ?>
        <br><br>
        <br><br>
                   <div class="container">
                       
        <div class="row" style="margin-top:10vh;margin-bottom:10vh;">
            <div class=" col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-2 col-lg-8">
        <div class=" panel-primary">
            <div class="panel-heading kat3">
                <h4>
                    Project Details
                </h4>
            </div>
            <div class="panel-body">
                
                <br>
                <form class="form" method="post" action="projects_input.php" enctype="multipart/form-data" autocomplete="on">
                   
                    <?php
$message="";

if($_SERVER['REQUEST_METHOD']=='POST')
    {
                $d=mysqli_real_escape_string($a,$_POST['top_j']);
                $e=mysqli_real_escape_string($a,$_POST['team_j']);
                $f=mysqli_real_escape_string($a,$_POST['branch_j']);
                $g=mysqli_real_escape_string($a,$_POST['year_j']);
                $h=mysqli_real_escape_string($a,$_POST['reg_no_j']);
                $i=mysqli_real_escape_string($a,$_POST['our_abilities_j']);
                $j=mysqli_real_escape_string($a,$_POST['expecting_j']);
                $k=mysqli_real_escape_string($a,$_POST['mobile_no_j']);
                $l=mysqli_real_escape_string($a,$_POST['ts_j']);
              
                  if (preg_match("/^[0-9]*$/",$h))
                 {              $q="INSERT INTO projects(title_r,team_members_r,branch_r,year_r,reg_no_r,our_abilities_r,expecting_r,number_r,team_status_r)VALUES ('$d','$e','$f','$g','$h','$i','$j','$k','$l')" or die("insertion_error".$q);
                                   if($sr=mysqli_query($a,$q))
                                          { echo "<script type='text/javascript'>window.location.href = 'projects.php';</script>";
                                               
                                          }
                                                                                                  
                                    }
                                    else 
                                   {
                                      $message="Error! Registration Number must contain digits only";
                                       echo '<div class="alert alert-danger">';
                                       echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                       echo $message; 
                                       echo '</div>';
                                  }                                      
                 }
     mysqli_close($a);
?>
                    
                    <div class="form-group">
                        <input type="text" placeholder="Title of the Project" name="top_j" class="form-control" required="true">
                    </div>
                     <div class="form-group">
                        <textarea name="team_j" placeholder="1)#Student1 2)#Student2 3)#Student3...." class="form-control" rows='3' required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="branch_j" placeholder="1)#Branch1 2)#Branch2 3)#Branch3...." class="form-control" rows='3' required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="year_j" placeholder="1)#Year1 2)#Year2 3)#Year3...." class="form-control" rows='1' required="true"></textarea>
                    </div>
                     <div class="form-group">
                        <input type="text" placeholder="Registration No(Only one)" name="reg_no_j" class="form-control" required="true">
                    </div>
                              
                                  
                    
                    <div class="form-group">
                        <textarea name="our_abilities_j" placeholder="Your Abitlies" class="form-control" rows='3' required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="expecting_j" placeholder="What you are expecting from others" class="form-control" rows='3' required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="mobile_no_j" placeholder="1)#Mobile1 2)#Mobile2 3)#Mobile3...." class="form-control" rows='3' required="true"></textarea>
                    </div>
                     <div class="form-group">
                        
                   <select name="ts_j" placeholder="" class="form-control" required="true">
                        <option value="eg_year" disabled="true" selected>Team status</option>
                                            <option value="Seeking to form a team">Seeking to form a team</option>
                                            <option value="Team formed">Team formed</option>
                                            
                    </select>
                     </div>
                     
                   
                   
                   
                    
                    <br>
                    
                    <div class="form-group">
                        <center class='col-lg-offset-4 col-xs-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                             <input type='submit' class='btn-primary form-control' value='Submit'>            
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

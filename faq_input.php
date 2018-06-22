<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['email_s']))
        {   $email_f=$_SESSION['email_s'];
        } 
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['s_no_s']))
        {   $s_no_f=$_SESSION['s_no_s'];
        } 
        else
        {
            header('location: login.php');
        }

if(isset($_SESSION['first_name_s']))
        {
            $first_name_f=$_SESSION['first_name_s'];
            
        }
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['reg_no_s']))
        {
            $reg_no_f=$_SESSION['reg_no_s'];
            
        }
        else
        {
            header('location: login.php');
        }
?>
<html>
    <head>
       
        <title>FAQ's | A_NIT</title>
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
                background: url(img/background_20.jpg) no-repeat center center fixed;
                background-size:cover;
                
            }
             
                
              
  </style>
        
    </head>
    <body class="background" style="overflow-x:hidden;">
        <?php include "navigation_bar.php"; ?>
        <br>
        <br>
        <br>
        <?php
                       $message="";
if($_SERVER['REQUEST_METHOD']=='POST')
    {  
                $b_f=mysqli_real_escape_string($a,$_POST['ask_query']);
                
                        $faqa= "INSERT INTO faq(question_f,answer_f)VALUES('$b_f','')"; 
                        if($sra=mysqli_query($a,$faqa))
                                     { echo "<script type='text/javascript'>window.location.href = 'faq.php';</script>";
                                                 //$message="Query asked successfully. Answer will be posted in few hours";
                                                //  echo '<div class="alert alert-danger">';
                                             // echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                          // echo $message; 
                                                   //  echo '</div>';
                                                  //   header('location: faq.php');
    
    }
    
                        
                               
                    }   
          
?>
         <div class="container">
            <div id="id02" class="virtual">
              <div class="row animate">
                <div class="col-md-offset-2 col md-8 col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6 col-sm-offset-2 col-sm-8">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <center>
                        <h3 class="kar2">
                        Frequently Asked Questions
                       </h3>
                        </center>
                </div>
                <div class="panel-body">
                    <center><h4 class="text-warning"> 
                        Queries
                    </h4></center>
                    <form  class="form" method="post" action="faq_input.php" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group">
                                     <div class="row">
                           <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"> 
                                <textarea name="ask_query" rows="7" class="form-control" required>Ask your query here....</textarea>
                             </div>
                       </div>
                        </div>                                            
                            <div class="form-group">
                             <center>
                            <input type='submit' class='btn btn-primary form-control' value='Submit' style="width:auto;"> 
                                 <button type="button"  class="btn btn-success" onclick="document.getElementById('id02').style.display='none';" style="width:auto;">Cancel</button>
                            </center>
                    </div>
                    </form>
                    
                </div>
                
            </div>
                </div>
                </div>
                </div>
                
            </div>
           
         <?php include "footer.php"; ?>
    </body>
</html> 
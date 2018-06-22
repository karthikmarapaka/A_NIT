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
             
                
                
                .faq_y{
                    color:white;
                }
                
  </style>
        
    </head>
    
    <body class="background" style="overflow-x:hidden;">
        <?php include "navigation_bar.php"; ?>
        <br><br><br><br>
       
      <div class="container">
        <div class="row">
            <center>
            <div>
                
           
                <button class="btn btn-success" style="width:auto;">
                    <a href="faq_input.php" style="text-decoration:none; color:white;">Ask your query</a>
                </button>
            </div>
                </center>
        </div> </div>
        <br><br>
        
                                                                
                      
        
      <?php                                        
             $q ="SELECT * FROM faq";
                          if($sr=mysqli_query($a,$q))
                                  
                                {                                 
                    while($row=mysqli_fetch_array($sr))
                {
                ?>
        <div class='container'>
            <div class="row faq_y">
                <?php 
                if($row[2]!=''){
               echo '<div class="col-sm-1 col-md-1 col-lg-1 col-xs-1">Q)</div>';
                echo '<div class="col-md-11 col-lg-11 col-sm-11 col-xs-11">' ;
                                  
                echo $row[1];
                          echo "<br>";
                echo '</div>';
                    echo '<div class="col-sm-1 col-md-1 col-lg-1 col-xs-1">A)</div>';
                     echo '<div class="col-md-11 col-lg-11 col-sm-11 col-xs-11">';
                                                               
                    echo $row[2]; 
                    echo '<hr>';
                    echo '</div>';
                             }
                             else{
                                 echo '<div class="col-sm-1 col-md-1 col-lg-1 col-xs-1">Q)</div>';
                echo '<div class="col-md-11 col-lg-11 col-sm-11 col-xs-11">' ;
                                  
                echo $row[1];
                          echo "<br>";
                echo '</div>';
                    echo '<div class="col-sm-1 col-md-1 col-lg-1 col-xs-1">A)</div>';
                     echo '<div class="col-md-11 col-lg-11 col-sm-11 col-xs-11">';
                                                               
                    echo "Answer will be posted soon."; 
                    echo '<hr>';
                    echo '</div>';
                             }
                             ?>
                </div>
            
    </div>
                      
                            
                    <?php
                                 }   $_SESSION['prev_q']=$row[1];
                                } 
                                 ?>                            
        
        <br><br><br>
        
        <?php include "footer.php"; ?>
        
        
    </body>
</html>

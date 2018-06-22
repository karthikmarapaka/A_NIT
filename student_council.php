
<!DOCTYPE html>
 <?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['email_s']))
        {   $email_m=$_SESSION['email_s'];
        } 
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['s_no_s']))
        {   $s_no_m=$_SESSION['s_no_s'];
        } 
        else
        {
            header('location: login.php');
        }

if(isset($_SESSION['first_name_s']))
        {
            $first_name_a=$_SESSION['first_name_s'];
            
        }
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['reg_no_s']))
        {
            $reg_no_a=$_SESSION['reg_no_s'];
            $sqla= "SELECT * FROM student_council";
            if($result=mysqli_query($a,$sqla))
            {
                $row=mysqli_fetch_array($result);
            }
        }
        else
        {
            header('location: login.php');
        }
?>
<html>
    <head>
        <title>Student Council | A_NIT</title>
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
        <style>
            .background{
                background: url(img/background_23.jpg) no-repeat center center fixed;
                background-size:cover;
            }
        </style>
    </head>
    <body class="background" style="overflow-x:hidden">
        <div class="container">
        <?php include "navigation_bar.php"; ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
               <div class="col-md-5 col-sm-6 col-lg-4">
                     <div>
                   <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>    </div>
               </div>
                <br>
                <br>
               <div class="col-lg-offset-1 col-md-offset-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <div class="jumbotron">
                   <div class="row"><h3>&nbsp;<?php echo $row[2]; ?></h3></div>
                   <div class="row">&nbsp;&nbsp;<?php echo $row[1]; ?></div>
                   <div class="row">&nbsp;&nbsp;<?php echo $row[4]; ?></div>
                   <div class="row">&nbsp;&nbsp;<?php echo $row[5]; ?></div>
                   <div class="row">&nbsp;&nbsp;<?php echo $row[6]; ?></div>
                   <div class="row">&nbsp;&nbsp;<?php echo $row[7]; ?></div>
                </div>
                </div>
            </div>
            <hr>
           <?php $row=mysqli_fetch_array($result); ?>
            <div class="row">
                <center>
                <div class="col-md-4 col-sm-4 col-lg-4 home-feature">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                         <?php echo $row[2]; ?>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[4]; ?></div>
                        <div><?php echo $row[5]; ?>
                        </div>
                        <div><?php echo $row[6]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-4 col-sm-4 col-lg-4 home-feature">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                         <?php echo $row[2]; ?>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[4]; ?></div>
                        <div><?php echo $row[5]; ?>
                        </div>
                        <div><?php echo $row[6]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-4 col-sm-4 col-lg-4 home-feature">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                         <?php echo $row[2]; ?>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[4]; ?></div>
                        <div><?php echo $row[5]; ?>
                        </div>
                        <div><?php echo $row[6]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                </center>
            </div>
           
            <div class="row">
                <center>
                    <?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-4 col-sm-4 col-lg-4 home-feature">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                   <div class="caption">
                        <div><h4>
                         <?php echo $row[2]; ?>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[4]; ?></div>
                        <div><?php echo $row[5]; ?>
                        </div>
                        <div><?php echo $row[6]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-4 col-sm-4 col-lg-4 home-feature">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                   <div class="caption">
                        <div><h4>
                         <?php echo $row[2]; ?>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[4]; ?></div>
                        <div><?php echo $row[5]; ?>
                        </div>
                        <div><?php echo $row[6]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-4 col-sm-4 col-lg-4 home-feature">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                         <?php echo $row[2]; ?>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[4]; ?></div>
                        <div><?php echo $row[5]; ?>
                        </div>
                        <div><?php echo $row[6]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                </center>
            </div>
                        
              <div class="container">
                    <div class="jumbotron">
                <center><h2>B.Tech(4/4)</h2></center>
                </div>
                </div>
               
            <div class="row">
                <center>
                    <?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                   <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                   <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                   <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                
                </center>
            </div> 
             
              <div class="container">
                    <div class="jumbotron">
                <center><h2>B.Tech(3/4)</h2></center>
                </div>
                </div>
              <div class="row">
                <center>
                    <?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                   <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                
                </center>
            </div> 
             
              <div class="container">
                    <div class="jumbotron">
                <center><h2>B.Tech(2/4)</h2></center>
                </div>
                </div>
              <div class="row">
                <center><?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                   <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                
                </center>
            </div> 
             
              <div class="container">
                    <div class="jumbotron">
                <center><h2>B.Tech(1/4)</h2></center>
                </div>
                </div>
              <div class="row">
                <center><?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                   <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                    <?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                        <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                    </div>
                </div>
                <?php $row=mysqli_fetch_array($result); ?>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                   <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                    
                </div><?php $row=mysqli_fetch_array($result); ?>
            <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
            <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div><?php $row=mysqli_fetch_array($result); ?>
            <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                    <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" alt="president" class="img-circle img-responsive">';
                      ?>
                    <div class="caption">
                        <div><h4>
                                <div><?php echo $row[2]; ?></div>
                                <div>(<?php echo $row[6]; ?>)</div>
                        
                        </h4></div>
                        <div><?php echo $row[1]; ?></div>
                        <div><?php echo $row[7]; ?></div>
                    </div>
                </div>
                </div>
                
                </center>
              </div>
            </div> 
          
              
            
        <br><br><br>
       <?php include "footer.php"; ?>
    </body>
</html>

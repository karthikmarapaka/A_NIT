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
       
        <title>My Creative Ideas | A_NIT</title>
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
                background: url(img/background_28.jpg) no-repeat center center fixed;
                background-size:cover;
            }
                         

     </style>
        
    </head>
    <body class="background" style="overflow-x:hidden;">
        <?php include "navigation_bar.php"; ?>
        <br>
        <br>
        <br><br>
         <?php
               $message="";
if ($_SERVER["REQUEST_METHOD"]=="POST") 
    { 
if($_POST['submit7']=='Submit'){
    $u=mysqli_real_escape_string($a,$_POST['delete1']);
    
        $ub="DELETE FROM warq_q WHERE s_no_q=$u";
        if($ud=mysqli_query($a,$ub)){
            {      $message="Deleted successfully. Please refresh to verify.";
                       echo '<div class="alert alert-danger">';
                        echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                            echo $message; 
                         echo '</div>';
                           
                           }
    }  
               
           
}
    if($_POST['submit8']=='Submit'){ 
    $ua=mysqli_real_escape_string($a,$_POST['delete2']);
   
 
        $uc="DELETE FROM warq_a WHERE q_no_wa=$ua AND reg_no_wa='$reg_no_c'";
        
        if($ue=mysqli_query($a,$uc))
                {
                        $message="Deleted successfully. Please refresh to verify.";
                       echo '<div class="alert alert-danger">';
                        echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                            echo $message; 
                         echo '</div>';
                      
                }
    
    }   
    }
   

    ?>
        <?php 
        $wa="SELECT * FROM warq_q WHERE reg_no_q='$reg_no_c'";
        $wp="SELECT * FROM  warq_a WHERE reg_no_wa='$reg_no_c'";
        
        
        if($wb=mysqli_query($a,$wa))
        {  while($wc=mysqli_fetch_array($wb))
            { 
                ?>   
        
        <div class="row">
            <span class="parent">
        <div class="tot col-lg-offset-1 col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10" style="height:auto;">
            <div><strong><?php echo $wc[0];?>]&nbsp;<?php echo $wc[1];?></strong></div>
            <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-6 col-xs-offset-6"><strong>---<?php echo $wc[2];?></strong><form method="post" name="submit7"  action="my_warq.php"><input type="hidden" name="delete1" value="<?php echo$wc[0];?>"/><button type="submit"   value="Submit" name="submit7" class="btn btn-danger">Delete</button></form></div><br>
            <?php 
            $waa="SELECT * FROM warq_a WHERE q_no_wa=$wc[0]";
            if($wab=mysqli_query($a,$waa))
            {
                while($wac=mysqli_fetch_array($wab))
                {
                  ?>  <div>A]&nbsp;<?php echo $wac[1];?> </div>
                  <?php if($wac[3]==$reg_no_c)
                  { ?>
                  <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-6 col-xs-offset-6"><strong>---<?php echo $wac[3];?></strong><form method="post" name="submit8" action="my_warq.php"><input type="hidden" name="delete2" value="<?php echo$wc[0]?>"><button type="submit"  value="Submit" name="submit8" class="btn btn-danger">Delete</button></form></div><br>
                  <?php } else { ?>
                  <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-6 col-xs-offset-6"><strong>---<?php echo $wac[3];?></strong></div><br>
        <?php  } ?>
 <?php
                }
            }?>
                  <hr/>
            </div>
            </span></div>
        <br>
        <br>
        <?php
            
        }
        
                }
                if($wq=mysqli_query($a,$wp))
                {
                    while($wd=mysqli_fetch_array($wq))
            {       
              $we="SELECT * FROM warq_q WHERE s_no_q=$wd[2]"; 
               if($wf=mysqli_query($a,$we))
            {
                   if($wae=mysqli_fetch_array($wf)){
               
?>   
       
        <div class="row">
            <span class="parent">
        <div class="tot col-lg-offset-1 col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10" style="height:auto;">
            <div><strong><?php echo $wae[0];?>]&nbsp;<?php echo $wae[1];?></strong></div>
            <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-7 col-xs-offset-7"><strong>---<?php echo $wae[2];?></strong></div><br>
            <?php 
            $waa="SELECT * FROM warq_a WHERE q_no_wa=$wae[0]";
            if($wab=mysqli_query($a,$waa))
            { 
                while($wac=mysqli_fetch_array($wab))
                {
                  ?>  <div>A]&nbsp;<?php echo$wac[1];?> </div>
                  <?php if($wac[3]==$reg_no_c)
                  { ?>
                  <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-6 col-xs-offset-6"><strong>---<?php echo $wac[3];?></strong><form method="post" name="submit8"  action="my_warq.php"><input type="hidden" name="delete2" value="<?php echo$wae[0]?>"/><button type="submit" name="submit8"  value="Submit" class="btn btn-danger">Delete</button></form></div><br>
                  <?php } else { ?>
                      <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-6 col-xs-offset-6"><strong>---<?php echo $wac[3];?></strong></div><br>
                 <?php  } ?>
         <?php
                }
            }?>
                  <hr/>
            </div>
            </span></div>
        <br>
        <br>
            <?php  }
            
        }
            }
                }
   
   
   ?>
       


        
        <br><br>
        <?php include "footer.php"; ?>
    </body>
</html>

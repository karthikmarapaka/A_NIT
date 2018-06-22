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
       
        <title>Creative Ideas Input | A_NIT</title>
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
                background: url(img/background_37.jpg) no-repeat center center fixed;
                background-size:cover;
            }
                            

     </style>
        
    </head>
    <body class="background" style="overflow-x:hidden;">
        <?php include "navigation_bar.php"; ?>
        <br>
        <br>
            <?php
$message="";
$a=mysqli_connect("localhost","root","","a_nit") or die("karthik".mysqli_error($a));
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_POST['submit2']=='Submit'){
    $u1=mysqli_real_escape_string($a,$_POST['ask_query2']);
    
        $u3="INSERT INTO ragging_complaints(info_rc) VALUES('$u1')";
        if($u5=mysqli_query($a,$u3)){
            {      echo "<script type='text/javascript'>window.location.href =
                'ragging_complaint.php';</script>";
// header('location: index.php');
//            $message="Submitted successfully";
  //                     echo '<div class="alert alert-danger">';
    //                    echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
      //                      echo $message; 
        //                  echo '</div>';
                           }
         
    
}
}
}
    ?>
        
       
 

    
      
  
  <form method='post' action="ragging_complaint_input.php" name="submit2" id="id02">
    <div class="container">
      <h1 style='color:yellow;'>Complaint about Ragging</h1>
         <div class="row">
          <div class="row">
                           <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12"> 
                                <textarea name="ask_query2" rows="7" class="form-control" required>Give your complaint here. Your name will not disclosed.(Anonymous)</textarea>
                             </div>
                       </div>
      
          <br>
          <div class='row'>
              <div class="col-md-offset-2 col-xs-offset-2 col-sm-offset-2 col-lg-offset-2"> 
          
        <button type="submit" class="btn btn-success" style="width:auto;" value="Submit" name="submit2">
        Submit
    </button>
          <button type="button"  class="btn" style="width:auto;">Cancel</button>
            </div> </div></div>
      
    </div>
  </form>
        <br><br>
        
        <?php include "footer.php"; ?>
    </body>
</html>
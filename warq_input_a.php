<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['email_s']))
        {   $email_w=$_SESSION['email_s'];
        } 
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['s_no_s']))
        {   $s_no_w=$_SESSION['s_no_s'];
        } 
        else
        {
            header('location: login.php');
        }

if(isset($_SESSION['first_name_s']))
        {
            $first_name_w=$_SESSION['first_name_s'];
            
        }
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['reg_no_s']))
        {
            $reg_no_w=$_SESSION['reg_no_s'];
            
        }
        else
        {
            header('location: login.php');
        }
?>
<html>
    <head>
       
        <title>WarQ Input | A_NIT</title>
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
            <?php
$message="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if($_POST['submit3']=='Submit'){
    $h=mysqli_real_escape_string($a,$_POST['ask_query3']);
    $ha=$_SESSION['q_no_s'];
    
        $hb="INSERT INTO warq_a(answer_wa,q_no_wa,reg_no_wa) VALUES('$h','$ha','$reg_no_w')";
        if($u4=mysqli_query($a,$hb)){
            {      echo "<script type='text/javascript'>window.location.href = 'warq.php';</script>";
            //$message="Submitted successfully";
                      // echo '<div class="alert alert-danger">';
                       // echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                           // echo $message; 
                        //  echo '</div>';
                          
                           }
        
    }
}
    if($_POST['submit4']=='Submit'){
    $hc=mysqli_real_escape_string($a,$_POST['ask_query4']);
    $hd=$_SESSION['q_no_s'];
        $he="INSERT INTO warq_a(answer_wa,q_no_wa,reg_no_wa) VALUES('$hc','$hd','unknown')";
        if($u5=mysqli_query($a,$he)){
            {      echo "<script type='text/javascript'>window.location.href = 'warq.php';</script>";
// header('location: index.php');
//            $message="Submitted successfully";
  //                     echo '<div class="alert alert-danger">';
    //                    echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
      //                      echo $message; 
        //                  echo '</div>';
                           }
    
    
    
}
} unset($_SESSION['q_no_s']);
}
    ?>
        
       
  <center><form method='post' id="id03" action="warq_input_a.php" name="submit3">
    <div class="container">
      <center><h1 style='color:white;'>Answer</h1></center>
         <div class="row">
             
             <br>
          <div class="row">
                
                           <div class="col-lg-offset-3 col-md-offset-3 col-md-6 col-lg-6 col-sm-12 col-xs-12"> 
                                <textarea name="ask_query3" rows="7" class="form-control" required>Ask your query here.(Public)</textarea>
                             </div>
                       </div>
      
          <br>
          <div class='row'>
              <div> 
         <button type="submit" class="btn btn-success" style="width:auto;" value="Submit" name="submit3">
        Submit
    </button>
        <button type="button"  class="btn btn-succes" onclick="document.getElementById('id03').style.display='none'" style="width:auto;">Cancel</button>
            </div> </div></div>
      
    </div>
  </form>
    <form method='post' id="id04" action="warq_input_a.php" name="submit4">
    <div class="container">
      <center><h1 style='color:white;'>Answer(Anonymous)</h1></center>
         <div class="row">
             
             <br>
          <div class="row">
                           <div class="col-lg-offset-3 col-md-offset-3 col-md-6 col-lg-6 col-sm-12 col-xs-12"> 
                                <textarea name="ask_query4" rows="7" class="form-control" required>Ask your query here.(Anonymous)</textarea>
                             </div>
                       </div>
      
          <br>
          <div class='row'>
              <div> 
         <button type="submit" class="btn btn-success" style="width:auto;" value="Submit" name="submit4">
        Submit
    </button>
        <button type="button"  class="btn btn-succes" onclick="document.getElementById('id04').style.display='none'" style="width:auto;">Cancel</button>
            </div> </div>
         </div>
      
    </div>
  </form></center>
        <br><br>
        
        <?php include "footer.php"; ?>
    </body>
</html>
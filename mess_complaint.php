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
       
        <title>Mess Complaints | A_NIT</title>
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
                            
/* The Modal (background) */
#id01,#id02 {
    display: none; /* Hidden by default */
    position: relative; /* Stay in place */
    z-index: 1; /* Sit on top */
   
    
    
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
                <button class="btn btn-primary" style="width:auto; ">
                    <a href="mess_complaint_input.php" style="text-decoration: none; color:white;">Give your Complaint</a>
                </button>
           
                
            </div>
                </center>
        </div> </div>
     

        <br>
        <br>
            
        <?php 
        $r="SELECT * FROM mess_complaints";
        if($sr=mysqli_query($a,$r))
                                {                                     
                    while($row=mysqli_fetch_array($sr))
                            { ?> <div class="container"><div style="color:black;"><?php echo $row[1]; ?></div>
                                <div style="color:yellow;" class="col-md-offset-10 col-sm-offset-6 col-xs-offset-6 col-lg-offset-10">---<?php echo $row[2]; ?></div>
                             
                                <hr></div> <?php
                                
                                }
                                
                                }
        ?>
       



  <br><br><br>
        
        
        <?php include "footer.php"; ?>
        
    </body>
</html>

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
                background: url(img/background_21.jpg) no-repeat center center fixed;
                background-size:cover;
            }
                         

     </style>
        
    </head>
    <body class="background">
        <?php include "navigation_bar.php"; ?>
        <br>
        <br>
        <br>
        <br>
                 <?php
               $message="";
if ($_SERVER["REQUEST_METHOD"]=="POST") 
    { 
if($_POST['submit']=='Submit'){
    $u=mysqli_real_escape_string($a,$_POST['delete']);
    
        $ub="DELETE FROM creative_ideas WHERE s_no_c=$u";
        if($ud=mysqli_query($a,$ub)){
            {      $message="Deleted successfully. Please refresh to verify.";
                       echo '<div class="alert alert-danger">';
                        echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                            echo $message; 
                         echo '</div>';
                           
                           }
    }  
               
           
}
  
    }
   

    ?>
        <?php 
        $r="SELECT * FROM creative_ideas WHERE reg_no_c=$reg_no_c";
        if($sr=mysqli_query($a,$r))
                                {                                     
                    while($row=mysqli_fetch_array($sr))
                            { ?> <div class="container"><div style="color:white;"><?php echo $row[1]; ?></div>
                                      <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-6 col-xs-offset-6"><form method="post" name="submit"  action="my_creative_ideas.php"><input type="hidden" name="delete" value="<?php echo$row[0];?>"/><button type="submit"   value="Submit" name="submit" class="btn btn-danger">Delete</button></form></div><br>
                             
                                <hr></div> <?php
                                
                                }
                                
                                }
        ?>
        <br><br>
        <?php include "footer.php"; ?>
    </body>
</html>

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
        {$first_name_w="Guest";
  
            header('location: login.php');
        }
        if(isset($_SESSION['reg_no_s']))
        {
            $reg_no_w=$_SESSION['reg_no_s'];
            $sqla= "SELECT * FROM my_account WHERE email='$email_m'";
            if($result=mysqli_query($a,$sqla))
            {
                $row=mysqli_fetch_row($result);
            }
        }
        else
        {
            header('location: login.php');
        }
?>

<html>
    <head>
       
        <title>WarQ | A_NIT</title>
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
            
            .tot{
                background-color:rgba(178,190,181,.2);
                border-radius:3%;
               
                  }
                  #ifr2{
                      display:none;
                  }
                  
                  
        </style>
        
    </head>
    
    <body class="background" style="overflow-x:hidden;">
        <?php include "navigation_bar.php"; ?>
        <br>
        <br><br><br><br>
    
        
        <?php 
        $wa="SELECT * FROM warq_q";
        if($wb=mysqli_query($a,$wa))
        {
            while($wc=mysqli_fetch_array($wb))
            {
                ?>   
        
        <div class="row">
            <span class="parent">
        <div class="tot col-lg-offset-1 col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10" style="height:auto;">
            <div><strong><?php echo $wc[0];?>]&nbsp;<?php echo $wc[1];?></strong></div>
            <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-7 col-xs-offset-7"><strong>---<?php echo $wc[2];?></strong></div><br>
            <?php 
            $waa="SELECT * FROM warq_a WHERE q_no_wa=$wc[0]";
            if($wab=mysqli_query($a,$waa))
            {
                while($wac=mysqli_fetch_array($wab))
                {
                  ?>  <div>A]&nbsp;<?php echo$wac[1];?> </div>
                  <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-7 col-xs-offset-7"><strong>---<?php echo $wac[3];?></strong></div><br>
            
         <?php
                }
            }?>
                  <center>
                      <form method="post" name="submit8"  action="warq.php">
                          <input type="hidden" name="answer2" value="<?php echo$wc[0]?>"/>
                          <button type="submit" name="submit8" style="width:auto;" onclick="window.open('warq_input_a.php');" value="Submit" class="btn btn-light">
                              Answer
                          </button>
                      </form>
                  
                  
                  </center>
            </div>
            </span></div>
        <br>
        <br>
        <?php
            
        }
   }
   
   ?>
       
        <div class="container" style="color:blue;"><hr></div>
       
  <center class="ground">
                             
                     <?php
               $message="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
if($_POST['submit8']=='Submit'){
    $u=mysqli_real_escape_string($a,$_POST['answer2']);
    
     $_SESSION['q_no_s']=$u;      
}
    
}
    ?>                            
                     <?php
               $message="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
if($_POST['submit1']=='Submit'){
    $u=mysqli_real_escape_string($a,$_POST['ask_query1']);
    if($u!='Ask your query here.(Public)')
    {
        $ub="INSERT INTO warq_q(question_q,reg_no_q) VALUES('$u','$reg_no_w')";
        if($ud=mysqli_query($a,$ub)){
            {      echo "<script type='text/javascript'>window.location.href = 'warq.php';</script>";
                           
                           }
    }  
    
            }
            else {
                $message="Did not submit your query";
                       echo '<div class="alert alert-danger">';
                        echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                            echo $message; 
                         echo '</div>';
            }
}
    if($_POST['submit2']=='Submit'){
    $ua=mysqli_real_escape_string($a,$_POST['ask_query2']);
    if($ua!='Ask your query here.(Anonymous)'){
    
        $uc="INSERT INTO warq_q(question_q,reg_no_q) VALUES('$ua','unknown')";
        if($ue=mysqli_query($a,$uc))
                {
                      {      echo "<script type='text/javascript'>window.location.href ='warq.php';</script>";
                      }  
                }
    }
    else {$message="Did not submit your query";
                       echo '<div class="alert alert-danger">';
                        echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                            echo $message; 
                         echo '</div>';
        
    }
    }
}
    ?>
        
       
  <form method='post' id="id01" action="warq.php" name="submit1">
    <div class="container">
      <h1 style='color:white;'>Queries</h1>
         <div class="row">
          <div class="row">
                           <div class="col-lg-offset-3 col-md-offset-3 col-md-6 col-lg-6 col-sm-12 col-xs-12"> 
                                <textarea name="ask_query1" rows="7" class="form-control" required>Ask your query here.(Public)</textarea>
                             </div>
                       </div>
      
          <br>
          <div class='row'>
              <div> 
         <button type="submit" class="btn btn-success" style="width:auto;" value="Submit" name="submit1">
        Submit
    </button>
        <button type="button"  class="btn btn-succes" onclick="document.getElementById('id01').style.display='none';" style="width:auto;">Cancel</button>
            </div> </div></div>
      
    </div>
  </form>
      <br>
    
      
  
  <form method='post' action="warq.php" name="submit2" id="id02">
    <div class="container">
      
         <div class="row">
          <div class="row">
                           <div class="col-lg-offset-3 col-md-offset-3 col-md-6 col-lg-6 col-sm-12 col-xs-12"> 
                                <textarea name="ask_query2" rows="7" class="form-control" required>Ask your query here.(Anonymous)</textarea>
                             </div>
                       </div>
      
          <br>
          <div class='row'>
              <div> 
          
        <button type="submit" class="btn btn-success" style="width:auto;" value="Submit" name="submit2">
        Submit
    </button>
          <button type="button"  class="btn btn-succes" onclick="document.getElementById('id02').style.display='none';" style="width:auto;">Cancel</button>
            </div> </div></div>
      
    </div>
  </form>
        <br><br>
        
        
    </center>
    
        <?php include "footer.php"; ?> 
    </body>
</html>

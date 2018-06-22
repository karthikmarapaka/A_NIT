<!DOCTYPE html>
<html>
    <head>
       
        <title>Sign Up | A_NIT</title>
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
                background: url(img/background_14.jpg) no-repeat center center fixed;
                background-size:cover;
            }
        </style>
        
    </head>
    
    <body style=" height:100%; width:100%;" class="background">
        <br>
                   <div class="container">
                       <div class='row'>
                           <center>
                               
                               <img src='img\1.png.' alt='NIT_WARANGAL_LOGO'>
                           </center>
                       </div>
        <div class="row" style="margin-top:10vh;margin-bottom:10vh;">
            <div class=" col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-2 col-lg-8">
        <div class=" panel-primary">
            <div class="panel-heading kat3">
                <h4>
                    Register to open an account
                </h4>
            </div>
            <div class="panel-body">
                
                <br>
                <form class="form" method="post" action="signup.php" enctype="multipart/form-data" autocomplete="on">
                   
                    <?php
$message="";
include "connect.php";
if($_SERVER['REQUEST_METHOD']=='POST')
    {
                $b=mysqli_real_escape_string($a,$_POST['first_name']);
                $t=mysqli_real_escape_string($a,$_POST['sur_name']);
                $c=mysqli_real_escape_string($a,$_POST['reg_no']);
                $d=mysqli_real_escape_string($a,$_POST['roll_no']);
                $e=mysqli_real_escape_string($a,$_POST['father_name']);
                $f=mysqli_real_escape_string($a,$_POST['mother_name']);
                $g=mysqli_real_escape_string($a,$_POST['parent_phone_no']);
                $i=mysqli_real_escape_string($a,$_POST['year']);
                $j=mysqli_real_escape_string($a,$_POST['branch']);
                $k=mysqli_real_escape_string($a,$_POST['temporary_address']);
                $l=mysqli_real_escape_string($a,$_POST['permanent_address']);
                $m=mysqli_real_escape_string($a,$_POST['extra_skills']);
                $n=mysqli_real_escape_string($a,$_POST['email']);
                $o=mysqli_real_escape_string($a,$_POST['student_phone_no']);
                $p=mysqli_real_escape_string($a,$_POST['password1']);
                //error_reporting(0);
 if (preg_match("/^[a-zA-Z ]*$/",$b)) 
 {
 if (preg_match("/^[a-zA-Z ]*$/",$t))
        {       
             if (preg_match("/^[0-9]*$/",$c))
                 {
                       if (preg_match("/^[0-9]*$/",$d))
                    {
                            if (preg_match("/^[a-zA-Z ]*$/",$e)) 
                                    {
                                            if (preg_match("/^[a-zA-Z ]*$/",$f))
                                                   {
                                                       if (preg_match("/^[0-9]*$/",$g))
                                                               {
                                                                       if (preg_match("/^[0-9]*$/",$o)) 
                                                                                 { 
                                                                                        if($_POST['password1']==$_POST['password2'])
                                                                                              {
                                                                                                    $q="INSERT INTO my_account(first_name,last_name,reg_no,roll_no,email,password,father_name,mother_name,year,branch,temporary_address,permanent_address,student_phone_no,parent_phone_no,extra_skills)VALUES ('$b','$t','$c','$d','$n','$p','$e','$f','$i','$j','$k','$l','$o','$g','$m')" or die("insertion_error".$q);
                                                                                                    if($sr=mysqli_query($a,$q))
                                                                                                            {
                                                                                                                    $message="Registration successful";
                                                                                                                    
                                                                                                                       echo '<div class="alert alert-danger">';
                                                                                                                       echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                       echo '</div>';
                                                                                                                    
                                                                                                            }
                                                                                                    else
                                                                                                            {
                                                                                                                    $message="Error! Registration is unsuccessful. Please try again.";
                                                                                                                     echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
  
                                                                                                            }
                                                                                                }
                                                                                            else
                                                                                                 {
                                                                                                        $message="Error! Passwords do not match. Please try again.";
                                                                                                         echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
        
                                                                                                  }
      
                                                                                 }
                                                                       else
                                                                              {
                                                                              $message="Error! Student phone number must contain digits only";
                                                                               echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
                                                                              }
                                                               }
                                                               else
                                                               {
                                                                   $message="Error! Parent phone number must contain digits only";
                                                                    echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
                                                               }
                                                   }
                                                 else 
                                                     {
                                                     $message="Error! Mother name must contain alphabets and spaces only";
                                                      echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
                                                      }
                                    }
                                    else 
                                         {
                                              $message="Error! Father name must contain alphabets and spaces only";
                                               echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
                                         }
                                }
                                else 
                                   {
                                      $message="Error! Roll Number must contain digits only";
                                       echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
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
                    else 
                                   {
                                      $message="Error! Last name must contain alphabets and spaces only";
                                       echo '<div class="alert alert-danger">';
                                                                                                                 echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                    echo '</div>';
                                   }
    }
    else 
                                   {
                                      $message="Error! First name must contain alphabets and spaces only";
                                       echo '<div class="alert alert-danger">';
                                                                                                                 echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                    echo '</div>';
                                   }
                 }
        
 mysqli_close($a);
?>
                    
                    <div class="form-group">
                        <input type="text" placeholder="First Name" name="first_name" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Sur Name" name="sur_name" class="form-control" required="true">
                    </div>
                     <div class="form-group">
                        <input type="text" placeholder="Registration No" name="reg_no" class="form-control" required="true">
                    </div>
                     <div class="form-group">
                        <input type="text" placeholder="Roll No" name="roll_no" class="form-control" required="true">
                    </div>
                     <div class="form-group">
                        <input type="text" placeholder="Father Name" name="father_name" class="form-control" required="true">
                    </div>
                     <div class="form-group">
                        <input type="text" placeholder="Mother Name" name="mother_name" class="form-control" required="true">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" placeholder="Parent Mobile No" name="parent_phone_no" class="form-control" required="true">
                    </div>
                    
                    <div class="form-group">
                    <select name="year" placeholder="Year" class="form-control" required="true">
                        <option value="eg_year" disabled="true" selected>Please select year of study</option>
                                            <option value="I Year">I year</option>
                                            <option value="II Year">II year</option>
                                            <option value="III Year">III year</option>
                                            <option value="IV Year">IV year</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <select name="branch" placeholder="Branch" class="form-control" required="true">
                        <option value="eg_branch" disabled="true" selected>Please select your branch</option>
                                            <option value="CSE">CSE</option>
                                            <option value="ECE">ECE</option>
                                            <option value="EEE">EEE</option>
                                            <option value="MECH">MECH</option>
                                            <option value="CIVIL">CIVIL</option>
                                            <option value="CHEM">CHEM</option>
                                            <option value="BIOTECH">BIOTECH</option>
                                            <option value="META">META</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <textarea name="temporary_address" placeholder="Temporary address..." class="form-control" rows='3' required="true"></textarea>
                    </div>
                     <div class="form-group">
                        <textarea name="permanent_address" class="form-control" placeholder="Permanent Address..." rows='3' required="true"></textarea>
                    </div>
                     <div class="form-group">
                        <textarea name="extra_skills" class="form-control" placeholder="Extra Skills..." rows='3' required="true"></textarea>
                    </div>
                   
                    <div class="form-group">
                        <input type="email" placeholder="Email" name="email" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Student Mobile No" name="student_phone_no" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password1" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Retype Password" name="password2" class="form-control" required="true">
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
    </body>
</html>

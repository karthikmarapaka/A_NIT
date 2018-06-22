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
        <title>My Account | A_NIT</title>
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
                background: url(img/background_14.jpg) no-repeat center center fixed;
                background-size:cover;
            }
        </style>
    </head>
    <body class="background" style="overflow-x:hidden;">
     
        <div class="container">
            
            <?php include "navigation_bar.php"; ?>
          
        <br>
        <br>
        <br>
        <br>
        <br>

           
                    <form method="post" action="my_account.php" enctype="multipart/form-data" autocomplete="on">
                         <div class="jumbotron">   
                            
                        <?php
                       

$message="";

if($_SERVER['REQUEST_METHOD']=='POST')
    {  
                $b=mysqli_real_escape_string($a,$_POST['first_name1']);
                $t=mysqli_real_escape_string($a,$_POST['last_name']);
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
                
                $o=mysqli_real_escape_string($a,$_POST['student_phone_no']);
                
                $q ="UPDATE my_account SET first_name='$b',last_name='$t',reg_no='$c',roll_no='$d',father_name='$e',mother_name='$f',year='$i',branch='$j',temporary_address='$k',permanent_address='$l',student_phone_no='$o',parent_phone_no='$g',extra_skills='$m' WHERE s_no='$s_no_m'" or die("insertionerror".$q);
                          if($sr=mysqli_query($a,$q))
                                  { echo "<script type='text/javascript'>window.location.href = 'my_account.php';</script>";
                                         $message="Updated successfully.Please refresh to verify.";
                                         
                                            
                                            echo '<div class="alert alert-danger">';
                                              echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                        echo $message;        
                                                                echo '</div>';
                                                                
                                                                             }
                                                                             
                                                                else
                                                                         {
                                                                                   $message="Error Updating data. Please try again.";
                                                                                     echo '<div class="alert alert-danger">';
                                                                                          echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                         echo $message; 
                                                                                         echo '</div>';
                                                                           }
            }
   
                 
        
 
?>
                        <div class="form-group kar12">
                   <div class="row">  
                        <label for="first_name" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>First Name</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text"  id="first_name" placeholder=" First Name" name="first_name1" class="form-control" value="<?php echo $row[1]; ?>">
                    </div>
                   
                    </div>
               </div>
                        <div class="form-group kar12">
                   <div class="row">  
                        <label for="last_name" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Last Name</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="last_name"placeholder="Last Name" name="last_name" class="form-control" value="<?php echo $row[2]; ?>">
                    </div>
                   
                    </div>
               </div>
                      
                      <div class="form-group kar12">
                   <div class="row">  
                        <label for="email" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Email</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                            <input type="text" id="email" placeholder="Email" name="email" class="form-control" value="<?php echo $email_m; ?>" readonly="true">
                    </div>
                   
                    </div>
               </div>
                        
                        
                   <div class="form-group kar12">
                       <div class="row">
                        <label for="reg_no" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Reg No</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="reg_no" placeholder="Reg No" name="reg_no" class="form-control" value="<?php echo $row[3]; ?>">
                    </div>
                       </div>
                    </div> 
                         <div class="form-group kar12">
                       <div class="row">
                        <label for="roll_no" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Roll No</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="roll_no" placeholder="Roll No" name="roll_no" class="form-control" value="<?php echo $row[4]; ?>">
                    </div>
                    </div> 
                       </div>
                        <div class="form-group kar12">
                   <div class="row">  
                        <label for="branch" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Branch</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <select name="branch" id="branch" placeholder="Branch" class="form-control" required="true">
                        <option value="<?php echo $row[10]; ?>" ><?php echo $row[10]; ?></option>
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
                   
                    </div>
               </div>
                        <div class="form-group kar12">
                         <div class="row">
                        
                        <label for="year" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Year</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <select name="year" id="year" placeholder="Year" class="form-control" required="true">
                            <option value="<?php echo $row[9]; ?>"><?php echo $row[9]; ?></option>
                                            <option value="I Year">I year</option>
                                            <option value="II Year">II year</option>
                                            <option value="III Year">III year</option>
                                            <option value="IV Year">IV year</option>
                    </select>
                    </div>
                             </div>
                             
                    </div> 
                        
                         <div class="form-group kar12">
                   <div class="row">  
                        <label for="student_phone_no" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Phone No</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="student_phone_no" placeholder="Phone No" name="student_phone_no" class="form-control" value="<?php echo $row[13]; ?>">
                    </div>
                   
                    </div>
               </div>   
                        <div class="form-group kar12">
                   <div class="row">  
                        <label for="password" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Your password</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                            <input type="text" id="password" placeholder="Password" name="password" class="form-control" value="<?php echo $row[6]; ?>" readonly="true">
                    </div>
                   
                    </div>
               </div>   
                         <div class="form-group kar12">
                   <div class="row">  
                        <label for="extra_skills" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Extra Skills</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea id="extra_skills" placeholder="About Yourself" name="extra_skills" style="height:13vh;" class="form-control" ><?php echo $row[15]; ?></textarea>
                    </div>
                   
                    </div>
               </div>
          
                
                </div>
        
       
        
        <div class="jumbotron">
            
                
                      <div class="form-group kar12">
                   <div class="row">  
                        <label for="father_name" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Father Name</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="father_name" placeholder="Father Name" name="father_name" class="form-control" value="<?php echo $row[7]; ?>">
                    </div>
                   
                    </div>
               </div>
                       <div class="form-group kar12">
                   <div class="row">  
                        <label for="mother_name" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Mother Name</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="mother_name" placeholder="Mother Name" name="mother_name" class="form-control" value="<?php echo $row[8]; ?>">
                    </div>
                   
                    </div>
               </div> 
                       <div class="form-group kar12">
                   <div class="row">  
                        <label for="parent_phone_no" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Parent Phone No</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="parent_phone_no" placeholder="Parent Phone No" name="parent_phone_no" class="form-control" value="<?php echo $row[14]; ?>">
                    </div> 
                   
                    </div>
               </div> 
                    <div class="form-group kar12">
                   <div class="row">  
                        <label for="temporary_address" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Temporary Address</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea name="temporary_address"  id="temporary_address" style="height:13vh;" class="form-control"><?php echo $row[11]; ?></textarea>
                    </div>
                   
                    </div>
               </div>
                    <div class="form-group kar12">
                   <div class="row">  
                        <label for="permanent_address" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Permanent Address</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea name="permanent_address" id="permanent_address" style="height:13vh;" class="form-control"><?php echo $row[12]; ?></textarea>
                    </div>
                   
                    </div>
               </div>
                    
            <br>
                    
                        <center class='col-lg-offset-4 col-xs-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                    
                    <button type="submit" class="btn btn-success form-control" style="width:auto" onClick="refreshPage()">
                         Update Profile</button>
                        
                            </center>
                                <script>
                                    function refreshPage()
                                    {
                                    window.parent.location = window.parent.location.href;
                                    } 
                                </script>
                               
            <br>  
            
            
        </div>       
                        </form>
           
        <br>
          
        </div>
         <?php include "footer.php"; ?>
        
                   
    </body>
</html>
    
    
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
            $reg_no_j=$_SESSION['reg_no_s'];
           
        }
        else
        {
            header('location: login.php');
        }
?>
<html>
    <head>
        <title>Project Details | A_NIT</title>
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
                background: url(img/background_15.jpg) no-repeat center center fixed;
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
        <?php
        $message="Only one project is allowed for a registration number at a time. You can start new one after previous one is completed.";
                                         
                                            
                                            echo '<div class="alert alert-danger">';
                                              echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                        echo $message;        
                                                                echo '</div>';?>

           <?php 
            $x="SELECT * FROM projects WHERE reg_no_r=$reg_no_j AND status_r='incomplete';";
            
            if($y=mysqli_query($a,$x))
            { 
                $row=mysqli_fetch_array($y);
                {                 
                    
                ?>
                    <form method="post" action="my_projects.php" name="submit4" enctype="multipart/form-data" autocomplete="on">
                         <div class="jumbotron"> 
                                                   <?php
                       

$message="";

if($_SERVER['REQUEST_METHOD']=='POST')
    {    
if($_POST['submit4']=='Submit'){
               $d=mysqli_real_escape_string($a,$_POST['top_j']);
                $e=mysqli_real_escape_string($a,$_POST['team_j']);
                $f=mysqli_real_escape_string($a,$_POST['branch_j']);
                $g=mysqli_real_escape_string($a,$_POST['year_j']);
                
                $h=mysqli_real_escape_string($a,$_POST['our_abilities_j']);
                $i=mysqli_real_escape_string($a,$_POST['expecting_j']);
                $j=mysqli_real_escape_string($a,$_POST['mobile_no_j']);
                $k=mysqli_real_escape_string($a,$_POST['ts_j']);
                $l=mysqli_real_escape_string($a,$_POST['ps_j']);
              
             
                
                $q ="UPDATE projects SET title_r='$d',team_members_r='$e',branch_r='$f',year_r='$g',our_abilities_r='$h',expecting_r='$i',number_r='$j',team_status_r='$k',status_r='$l' WHERE reg_no_r='$reg_no_j'" or die("insertionerror".$q);
                          if($sr=mysqli_query($a,$q))
                                  { echo "<script type='text/javascript'>window.location.href = 'my_projects.php';</script>";
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
    }
                 
        
 
?>
                           
                        <div class="form-group kar12">
                   <div class="row">  
                        <label for="top_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Title</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" placeholder="Title of the Project" name="top_j" class="form-control" value="<?php echo $row[1];?>">
                    </div>
                   
                    </div>
               </div>
                        <div class="form-group kar12">
                   <div class="row">  
                        <label for="team_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Team members</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea name="team_j" placeholder="1)#Student1 2)#Student2 3)#Student3...." class="form-control" rows='3'><?php echo $row[2];?></textarea>
                    </div>
                    </div>
               </div>
                       <div class="form-group kar12">
                       <div class="row">
                        <label for="branch_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Branch</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea name="branch_j" placeholder="1)#Branch1 2)#Branch2 3)#Branch3...." class="form-control" rows='3'><?php echo $row[3];?></textarea>
                    </div>
                    </div> 
                       </div>
                      
                        
                               <div class="form-group kar12">
                   <div class="row">  
                        <label for="year_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Year</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea name="year_j" placeholder="1)#Year1 2)#Year2 3)#Year3...." class="form-control" rows='1'><?php echo $row[4];?></textarea>
                    </div>
                   
                    </div>
               </div>   
                        
                   <div class="form-group kar12">
                       <div class="row">
                        <label for="reg_no_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Registration No</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" placeholder="Registration No(Only one)" readonly name="reg_no_j" class="form-control"  value="<?php echo $row[5]; ?>">
                    </div>
                       </div>
                    </div> 
                        
                       
                        
                        
                       
                        <div class="form-group kar12">
                   <div class="row">  
                        <label for="our_abilities_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Their Abilities</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                            <textarea name="our_abilities_j" placeholder="Your Abitlies" class="form-control" rows='3'><?php echo $row[6];?></textarea>
                    </div>
                   
                    </div>
               </div>   
                         <div class="form-group kar12">
                   <div class="row">  
                        <label for="expecting_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Expecting</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                         <textarea name="expecting_j" placeholder="What you are expecting from others" class="form-control" rows='3'><?php echo $row[7];?></textarea>
                    </div>
                   
                    </div>
               </div>
                               
                         
                      <div class="form-group kar12">
                   <div class="row">  
                        <label for="mobile_no_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Mobile No.</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea name="mobile_no_j" placeholder="1)#Mobile1 2)#Mobile2 3)#Mobile3...." class="form-control" rows='3'><?php echo $row[8];?></textarea>
                    </div>
                   
                    </div>
               </div>
                    <div class="form-group kar12">
                   <div class="row">  
                        <label for="ts_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Team Status</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <select name="ts_j" id="ts_j" placeholder="Team Status" class="form-control">
                        <option value="<?php echo $row[9]; ?>" ><?php echo $row[9]; ?></option>
                                            <option value="Seeking to form a team">Seeking to form a team</option>
                                            <option value="Team formed">Team formed</option>
                                            
                    </select>
                    </div>
                   
                    </div>
               </div>   
                              <div class="form-group kar12">
                   <div class="row">  
                        <label for="ts_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Project Status</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <select name="ps_j" id="ts_j" placeholder="Team Status" class="form-control">
                        <option value="<?php echo $row[10]; ?>" ><?php echo $row[10]; ?></option>
                                            <option value="incomplete">Incomplete</option>
                                            <option value="completed">Completed</option>
                                            
                    </select>
                    </div>
                   
                    </div>
               </div>   
                                    
                             <br>
                            <center class='col-lg-offset-4 col-xs-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                    
                    <button type="submit" class="btn btn-success form-control" name="submit4" value="Submit" style="width:auto">
                         Edit</button>
                        
                            </center>
                             <br>
                                                      
        </div>    
                    </form> <?php
                    }
            }
           ?>
        
           
        <br>
          
        </div>
         <?php include "footer.php"; ?>
        
                   
    </body>
</html>
    
    
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
        {       $reg_no_j=$_SESSION['reg_no_s'];
           
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
     <?php 
     
$message="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
if($_POST['submit4']=='Submit'){
            $pro_no_r=$_SESSION['pro_no_s'];
            unset($_SESSION['pro_no_s']);
            $sqla= "SELECT * FROM projects WHERE s_no_r='$pro_no_r'";
            
            if($result=mysqli_query($a,$sqla))
            {
                $row=mysqli_fetch_row($result);
               
            }
                        }

            }
           ?>
               
            <?php include "navigation_bar.php"; ?>
            
           
        <br>
        <br>
        <br>
        <br>
<div class="container">
          
                    <form method="post" action="projects_read.php" name="submit4">
                         <div class="jumbotron">   
                           <center> 
         <button type="submit" class="btn btn-success" style="width:auto;" value="Submit" name="submit4">
        Press this button
    </button>
        
            </center> <br>
                        <div class="form-group kar12">
                   <div class="row">  
                        <label for="top_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Title</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" placeholder="Title of the Project" name="top_j" readonly class="form-control" value="<?php echo $row[1];?>">
                    </div>
                   
                    </div>
               </div>
                        <div class="form-group kar12">
                   <div class="row">  
                        <label for="team_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Team members</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea name="team_j" readonly placeholder="1)#Student1 2)#Student2 3)#Student3...." class="form-control" rows='3'><?php echo $row[2];?></textarea>
                    </div>
                    </div>
               </div>
                       <div class="form-group kar12">
                       <div class="row">
                        <label for="branch_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Branch</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea name="branch_j" readonly placeholder="1)#Branch1 2)#Branch2 3)#Branch3...." class="form-control" rows='3'><?php echo $row[3];?></textarea>
                    </div>
                    </div> 
                       </div>
                      
                        
                               <div class="form-group kar12">
                   <div class="row">  
                        <label for="year_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Year</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea name="year_j"  readonly placeholder="1)#Year1 2)#Year2 3)#Year3...." class="form-control" rows='1'><?php echo $row[4];?></textarea>
                    </div>
                   
                    </div>
               </div>   
                        
                   <div class="form-group kar12">
                       <div class="row">
                        <label for="reg_no_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Registration No</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" readonly placeholder="Registration No(Only one)" name="reg_no_j" class="form-control"  value="<?php echo $row[5]; ?>">
                    </div>
                       </div>
                    </div> 
                        
                       
                        
                        
                       
                        <div class="form-group kar12">
                   <div class="row">  
                        <label for="our_abilities_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Their Abilities</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                            <textarea name="our_abilities_j" readonly placeholder="Your Abitlies" class="form-control" rows='3'><?php echo $row[6];?></textarea>
                    </div>
                   
                    </div>
               </div>   
                         <div class="form-group kar12">
                   <div class="row">  
                        <label for="expecting_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Expecting</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                         <textarea name="expecting_j" readonly placeholder="What you are expecting from others" class="form-control" rows='3'><?php echo $row[7];?></textarea>
                    </div>
                   
                    </div>
               </div>
                               
                         
                      <div class="form-group kar12">
                   <div class="row">  
                        <label for="mobile_no_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Mobile No.</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <textarea name="mobile_no_j" readonly placeholder="1)#Mobile1 2)#Mobile2 3)#Mobile3...." class="form-control" rows='3'><?php echo $row[8];?></textarea>
                    </div>
                   
                    </div>
               </div>
                    <div class="form-group kar12">
                   <div class="row">  
                        <label for="ts_j" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Team Status</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <select name="ts_j" id="ts_j"readonly  placeholder="Team Status" class="form-control">
                        <option value="<?php echo $row[9]; ?>" ><?php echo $row[9]; ?></option>
                                            <option value="Seeking to form a team">Seeking to form a team</option>
                                            <option value="Team formed">Team formed</option>
                                            
                    </select>
                    </div>
                   
                    </div>
               </div>   
                             
              
                                    
                             <br>
                            
                                                      
        </div>                             </form>
           
        <br>
          
        </div>
         <?php include "footer.php"; ?>
        
                   
    </body>
</html>
    
    